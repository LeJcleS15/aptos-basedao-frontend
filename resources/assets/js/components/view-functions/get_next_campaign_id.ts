import { aptosClient } from "../utils/aptosClient";
import { MODULE_ADDRESS } from "../../constants";

export type getDaoInfoArguments = {
    dao_identifier : string;
};

export const getNextProposalId = async (args: getDaoInfoArguments): Promise<[number]> => {
    
    const { dao_identifier } = args;
    const next_proposal_id = await aptosClient().view<[number]>({
        payload: {
            function: `${MODULE_ADDRESS}::${dao_identifier}::get_next_proposal_id`,
            typeArguments: [],
            functionArguments: [],
        },
    });
    return next_proposal_id;
};