import { aptosClient } from "../utils/aptosClient";
import { MODULE_ADDRESS } from "../../constants";

export type getProposalTypeInfoArguments = {
    dao_identifier: string;
    proposal_type: string
};


export const getProposalTypeInfo = async (args: getProposalTypeInfoArguments): Promise<[number, number, number, number]> => {
    
    const { dao_identifier, proposal_type } = args;
    const daoInfo = await aptosClient().view<[number, number, number, number]>({
        payload: {
            function: `${MODULE_ADDRESS}::${dao_identifier}::get_proposal_type_info`,
            typeArguments: [],
            functionArguments: [proposal_type],
        },
    });
    return daoInfo;
};

// reference
// -------------
// proposal_type.duration
// proposal_type.success_vote_percent
// proposal_type.min_amount_to_vote
// proposal_type.min_amount_to_create_proposal