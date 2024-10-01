import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";
// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type depositFaToDaoArguments = {
    dao_identifier: string;
    amount: number;
    token_metadata: string;
};

export const contribute = (args: depositFaToDaoArguments): InputTransactionData => {
  const { dao_identifier, amount, token_metadata } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::${dao_identifier}::deposit_fa_to_dao`,
        typeArguments: [],
        functionArguments: [
            amount,
            token_metadata
        ],
    },
  };
};
