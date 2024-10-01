import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";
// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type executeCoinTransferProposalArguments = {
    dao_identifier: string;
    proposal_id: number;
};

export const executeCoinTransferProposal = (args: executeCoinTransferProposalArguments): InputTransactionData => {
  const { dao_identifier, proposal_id } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::${dao_identifier}::execute_coin_transfer_proposal`,
        typeArguments: ["0x1::aptos_coin::AptosCoin"],
        functionArguments: [
            proposal_id
        ],
    },
  };
};