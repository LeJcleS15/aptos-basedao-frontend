import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";
// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type voteForProposalArguments = {
    dao_identifier: string;
    proposal_id: number;
    vote_type: number;
};

export const voteForProposal = (args: voteForProposalArguments): InputTransactionData => {
  const { dao_identifier, proposal_id, vote_type } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::${dao_identifier}::vote_for_proposal`,
        typeArguments: [],
        functionArguments: [
            proposal_id,
            vote_type
        ],
    },
  };
};