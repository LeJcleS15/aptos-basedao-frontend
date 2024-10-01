import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";
// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type createFaTransferProposalArguments = {
    dao_identifier: string;
    title: string;
    description: string;
    proposal_type: string;
    opt_transfer_recipient: string;
    opt_transfer_amount: number;
    opt_transfer_metadata: string;
};

export const createFaTransferProposal = (args: createFaTransferProposalArguments): InputTransactionData => {
  const { dao_identifier, title, description, proposal_type, opt_transfer_recipient, opt_transfer_amount, opt_transfer_metadata } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::${dao_identifier}::create_fa_transfer_proposal`,
        typeArguments: [],
        functionArguments: [
            title,
            description,
            proposal_type,
            opt_transfer_recipient,
            opt_transfer_amount,
            opt_transfer_metadata
        ],
    },
  };
};
