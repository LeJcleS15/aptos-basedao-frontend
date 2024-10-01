import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";
// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type createStandardProposalArguments = {
    dao_identifier: string;
    title: string;
    description: string;
    proposal_type: string;
};

export const createStandardProposal = (args: createStandardProposalArguments): InputTransactionData => {
  const { dao_identifier, title, description, proposal_type } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::${dao_identifier}::create_standard_proposal`,
        typeArguments: [],
        functionArguments: [
            title,
            description,
            proposal_type
        ],
    },
  };
};