import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";
// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type depositCoinToDaoArguments = {
    dao_identifier: string;
    amount: number;
};

export const depositCoinToDao = (args: depositCoinToDaoArguments): InputTransactionData => {
  const { dao_identifier, amount } = args;
  return {
    data: {
        function: `${MODULE_ADDRESS}::${dao_identifier}::deposit_coin_to_dao`,
        typeArguments: ["0x1::aptos_coin::AptosCoin"],
        functionArguments: [
            amount
        ],
    },
  };
};
