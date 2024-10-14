import "../sass/app.scss";

import ReactDOM from 'react-dom/client'; 

import { NETWORK } from "./constants";
import { WalletSelector } from './components/WalletSelector';
import { WalletProvider } from "./components/WalletProvider";
import { aptosClient } from "./components/utils/aptosClient";
import { useWallet } from "@aptos-labs/wallet-adapter-react";
import { Aptos, AptosConfig, Network, AccountAddress } from "@aptos-labs/ts-sdk";
import { useState, useEffect } from "react";

// entry functions
import { initDao } from "./components/entry-functions/init_dao";
import { createDaoUpdateTransferProposal } from "./components/entry-functions/create_dao_update_proposal";
import { createCoinTransferProposal } from "./components/entry-functions/create_coin_transfer_proposal";
import { createFaTransferProposal } from "./components/entry-functions/create_fa_transfer_proposal";
import { createProposalUpdateProposal } from "./components/entry-functions/create_proposal_update_proposal";
import { createStandardProposal } from "./components/entry-functions/create_standard_proposal";
import { depositCoinToDao } from "./components/entry-functions/deposit_coin_to_dao";
import { depositFaToDao } from "./components/entry-functions/deposit_fa_to_dao";
import { executeCoinTransferProposal } from "./components/entry-functions/execute_coin_transfer_proposal";
import { executeProposal } from "./components/entry-functions/execute_proposal";
import { mintGovernanceTokens } from "./components/entry-functions/mint_governance_tokens";

// view functions
import { getMetadata } from "./components/view-functions/get_metadata";
import { getMetadataAddress } from "./components/view-functions/get_metadata_address";
// import { getConfigInfo } from "./components/view-functions/get_config";
// import { getNextCampaignId } from "./components/view-functions/get_next_campaign_id";
// import { getContributorAmountInfo } from "./components/view-functions/get_contributor_amount";
// import { accountAPTBalance } from "./components/view-functions/accountBalance";

// import { useGetAllCampaigns } from "./components/hooks/useGetAllCampaigns"; 

// start

interface Metadata {
    symbol: string;
    name: string;
    icon: string;
    website: string;
}

var governanceTokensMintedSuccessMessage = `
    <div class="success_notification rounded-md bg-green-50 p-4 mt-2 mb-1 border border-green-600">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="sucess_message text-sm font-medium text-green-800">Mint successful. Have fun!</p>
            </div>
        </div>
    </div>`;

var contributeSuccessMessage = `
    <div class="success_notification rounded-md bg-green-50 p-4 mt-2 mb-1 border border-green-600">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="sucess_message text-sm font-medium text-green-800">Your pledge is successful. Thanks for your contribution!</p>
            </div>
        </div>
    </div>`;

var refundSuccessMessage = `
    <div class="success_notification rounded-md bg-green-50 p-4 mt-2 mb-1 border border-orange-600">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-orange-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="sucess_message text-sm font-medium text-orange-800"> Your refund is successful.</p>
            </div>
        </div>
    </div>`;


var claimFundsSuccessMessage = `
    <div class="success_notification rounded-md bg-green-50 p-4 mt-2 mb-1 border border-green-600">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="sucess_message text-sm font-medium text-green-800">Congratulations! Your funds have been claimed.</p>
            </div>
        </div>
    </div>`;
    


function InitDaoSubmitButton() {
    const { account, signAndSubmitTransaction } = useWallet();
    
    const initNewDao = async () => {
        try {
            
            let aptosConfig = new AptosConfig({ network: NETWORK });
            let aptos       = new Aptos(aptosConfig);
            
            var create_dao_form = $('.create_dao_form');

            let dao_type: string = create_dao_form.find('.dao_type').val() as string;

            let getNextAvailableDao = await fetch(`/daos/${dao_type}`, {
                method: 'GET',
            });
            let next_available_dao = await getNextAvailableDao.json();
            
            if (!next_available_dao) {
                throw new Error('No available DAOs');
            }

            let dao_identifier: string = dao_type+"_dao_"+next_available_dao.dao_id;

            let name: string = create_dao_form.find('.name').val() as string;
            let description: string = create_dao_form.find('.description').val() as string;
            let image_url: string   = create_dao_form.find('.image_url').val() as string;
            
            let governance_token_metadata: string = await getMetadataAddress();

            const response = await signAndSubmitTransaction(
                initDao({
                    dao_identifier,
                    name,
                    description,
                    image_url,
                    governance_token_metadata
                })
            );
        
            // Wait for transaction to complete
            console.log('executing');
            await aptos.waitForTransaction({ transactionHash: response.hash });

            // Mark the DAO as initialized in the database
            console.log(`dao id: ${next_available_dao.dao_id} | signer: ${account.address}`)
            let update_response = await fetch(`/daos/update/${dao_type}/${next_available_dao.dao_id}?signer=${account.address}`, {
                method: 'GET'
            });
            

            // Check if the update was successful
            if (!update_response.ok) {
                throw new Error('Failed to update DAO status');
            };

            console.log('dao created and updated in database');
        
            // redirect to show dao page
            // window.location.replace(`/campaigns/${nextCampaignId}`);

        } catch (error) {
            console.log(error);
        }
    };
    
    return (
        <div>
        <button
            className="create_dao flex m-auto px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500"
            onClick={initNewDao}
        >
            Create DAO
        </button>
        </div>
    );
}


const InitDaoSubmitButtonExists = document.getElementById('create_dao_submit_button');
if (InitDaoSubmitButtonExists) {
  const root = ReactDOM.createRoot(InitDaoSubmitButtonExists);
  root.render(
    <WalletProvider>
      <InitDaoSubmitButton />
    </WalletProvider>
  );
}


const walletDiv = document.getElementById('connect-wallet');
if (walletDiv) {
    const root = ReactDOM.createRoot(walletDiv); 
    
    root.render(
        <WalletProvider>
            <WalletSelector />
        </WalletProvider>
    );
}


$(document).ready(function () {
    
    const currentPath       = window.location.pathname;
    const campaignIdElement = document.getElementById('campaignId');
    
    if (campaignIdElement) {
        let campaign_id = Number(campaignIdElement.getAttribute('data-campaign-id'));
        console.log('campaign_id:', campaign_id);

        if (isNaN(campaign_id)) {
            console.error('Invalid campaign ID');
            return;
        }

        // if (currentPath.includes("/info")) {
        //     fetchCampaignData(campaign_id)
        //         .then((campaignData) => {
        //             updateCampaignForm(campaignData);
        //         });
        // } else if (currentPath.includes("/campaigns")) {
        //     fetchCampaignData(campaign_id)
        //         .then((campaignData) => {
        //             renderCampaignInfo(campaignData);
        //         });
        // }
    };

    // if (currentPath.includes("/about")) {
    //   $(document).ready(function() {
    //     $('#mydiv').scrollToFixed();
    //   });
    // };
    
    

});


function MintOracleTokensButton() {
    const { account, signAndSubmitTransaction } = useWallet();

    const mintOracleTokenDiv = async () => {
      try {
        
        let aptosConfig = new AptosConfig({ network: NETWORK });
        let aptos       = new Aptos(aptosConfig);

        var faucet = $('#faucet');
        let amount: number = faucet.find('#mint_amount').val() as number;

        const response = await signAndSubmitTransaction(
          mintGovernanceTokens({
            amount
          })
        );
  
        // Wait for transaction to complete
        console.log('executing');
        await aptos.waitForTransaction({ transactionHash: response.hash });
  
        // update total contribution amount
        console.log('success minted');

        $('.notification_container').find('.general_notification').remove();
        $(governanceTokensMintedSuccessMessage).appendTo('.notification_container').fadeIn(2000);
        faucet.find('#mint_amount').val('')

        setTimeout(() => {
            $('.notification_container .success_notification').fadeOut(1000);
        }, 5000);

      } catch (error) {
        console.log(error);
      }
    };
  
    return (
      <div>
        <button
          className={`${!account ? 'opacity-60 cursor-not-allowed' : '' } bg-amber-500 flex items-center justify-center text-white active:bg-amber-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150`}
          onClick={mintOracleTokenDiv}
        >
            <svg xmlns="http://www.w3.org/2000/svg" className="inline h-5 w-5 text-white mr-3" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
            Mint
        </button>
      </div>
    );
}


const MintOracleTokensButtonExists = document.getElementById('mint_oracle_tokens_button');
if (MintOracleTokensButtonExists) {
  const root = ReactDOM.createRoot(MintOracleTokensButtonExists);
  root.render(
    <WalletProvider>
      <MintOracleTokensButton />
    </WalletProvider>
  );
}
