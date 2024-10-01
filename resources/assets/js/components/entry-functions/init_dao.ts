import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";

// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type initDaoArguments = {
    dao_identifier: string,
    name: string;
    description: string;
    image_url: string;
    governance_token_metadata: string;
};

export const initDao = (args: initDaoArguments): InputTransactionData => {
  
    const { dao_identifier, name, description, image_url, governance_token_metadata } = args;

  return {
    data: {
        function: `${MODULE_ADDRESS}::${dao_identifier}::init_dao`,
        typeArguments: [],
        functionArguments: [
            name,
            description,
            image_url,
            governance_token_metadata
        ],
    },
  };
};
