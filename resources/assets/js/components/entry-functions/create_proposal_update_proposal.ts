import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";
// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type createProposalUpdateProposalArguments = {
    dao_identifier: string;
    title: string;
    description: string;
    proposal_type: string;
    opt_proposal_type: string;
    opt_duration: string;
    opt_success_vote_percent: string;
    opt_min_amount_to_vote:string;
    opt_min_amount_to_create_proposal: string;
};

export const createProposalUpdateProposal = (args: createProposalUpdateProposalArguments): InputTransactionData => {
  const { dao_identifier, title, description, proposal_type, opt_proposal_type, opt_duration, opt_success_vote_percent, opt_min_amount_to_vote, opt_min_amount_to_create_proposal } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::${dao_identifier}::create_proposal_update_proposal`,
        typeArguments: [],
        functionArguments: [
            title,
            description,
            proposal_type,
            opt_proposal_type,
            opt_duration,
            opt_success_vote_percent,
            opt_min_amount_to_vote,
            opt_min_amount_to_create_proposal
        ],
    },
  };
};