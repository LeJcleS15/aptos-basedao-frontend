import { InputTransactionData } from "@aptos-labs/wallet-adapter-react";
import { MODULE_ADDRESS } from "../../constants";

// Internal utils
import { convertAmountFromHumanReadableToOnChain } from "../utils/helpers";

export type mintGovernanceTokensArguments = {
    amount: number;
};

export const mintGovernanceTokens = (args: mintGovernanceTokensArguments): InputTransactionData => {
  const {amount } = args;
  const decimals = 8;
  return {
    data: {
        function: `${MODULE_ADDRESS}::gov_token::public_mint`,
        typeArguments: [],
        functionArguments: [
            amount * 10**decimals
        ],
    },
  };
};
