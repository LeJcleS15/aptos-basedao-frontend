import { aptosClient } from "../utils/aptosClient";
import { MODULE_ADDRESS } from "../../constants";

export type getDaoInfoArguments = {
    dao_identifier : string;
};


export const getDaoInfo = async (args: getDaoInfoArguments): Promise<[string, string, string, string, string]> => {
    
    const { dao_identifier } = args;
    const daoInfo = await aptosClient().view<[string, string, string, string, string]>({
        payload: {
            function: `${MODULE_ADDRESS}::${dao_identifier}::get_dao_info`,
            typeArguments: [],
            functionArguments: [],
        },
    });
    return daoInfo;
};

// reference
// -------------
// dao.creator,
// dao.name,
// dao.description
// dao.image_url
// dao.governance_token_metadata