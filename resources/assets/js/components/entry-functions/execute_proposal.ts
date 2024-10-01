import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";
// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type executeProposalArguments = {
    dao_identifier: string;
    proposal_id: number;
};

export const executeProposal = (args: executeProposalArguments): InputTransactionData => {
  const { dao_identifier, proposal_id } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::${dao_identifier}::execute_proposal`,
        typeArguments: [],
        functionArguments: [
            proposal_id
        ],
    },
  };
};