import { aptosClient } from "../utils/aptosClient";
import { MODULE_ADDRESS } from "../../constants";

export type getProposalInfoArguments = {
    dao_identifier: string;
    proposal_id: number
};


export const getProposalTypeInfo = async (args: getProposalInfoArguments): Promise<[string, string, string, string, number, number, number, number, number, number, number, number, string, boolean]> => {
    
    const { dao_identifier, proposal_id } = args;
    const daoInfo = await aptosClient().view<[string, string, string, string, number, number, number, number, number, number, number, number, string, boolean]>({
        payload: {
            function: `${MODULE_ADDRESS}::${dao_identifier}::get_proposal_info`,
            typeArguments: [],
            functionArguments: [proposal_id],
        },
    });
    return daoInfo;
};

// reference
// -------------
// proposal_ref.proposal_type,
// proposal_ref.proposal_sub_type,
// proposal_ref.title,
// proposal_ref.description,

// proposal_ref.votes_yay,
// proposal_ref.votes_pass,
// proposal_ref.votes_nay,
// proposal_ref.total_votes,
// proposal_ref.success_vote_percent,

// proposal_ref.duration,
// proposal_ref.start_timestamp,
// proposal_ref.end_timestamp,

// proposal_ref.result,
// proposal_ref.executed