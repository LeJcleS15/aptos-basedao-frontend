import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";
// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type createDaoUpdateProposalArguments = {
    dao_identifier: string;
    title: string;
    description: string;
    proposal_type: string;
    opt_dao_name: string;
    opt_dao_description: string;
    opt_dao_image_url: string;
};

export const createDaoUpdateTransferProposal = (args: createDaoUpdateProposalArguments): InputTransactionData => {
  const { dao_identifier, title, description, proposal_type, opt_dao_name, opt_dao_description, opt_dao_image_url } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::${dao_identifier}::create_dao_update_proposal`,
        typeArguments: [],
        functionArguments: [
            title,
            description,
            proposal_type,
            opt_dao_name,
            opt_dao_description,
            opt_dao_image_url
        ],
    },
  };
};