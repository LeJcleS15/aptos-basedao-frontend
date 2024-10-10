import { aptosClient } from "../utils/aptosClient";
import { GOV_TOKEN_MODULE_ADDRESS } from "../../constants";

// Fetch the Metadata object from the blockchain
export const getMetadataAddress = async (): Promise<string> => {
    try {
        // Make the view function call to fetch the Metadata object
        const metadata_address = await aptosClient().view<[string]>({
            payload: {
                function: `${GOV_TOKEN_MODULE_ADDRESS}::gov_token::metadata_address`, 
                typeArguments: [],
                functionArguments: [],
            },
        });

        // Return the Metadata address
        return metadata_address[0];

    } catch (error) {
        console.error("Error fetching metadata address:", error);
        throw error;
    }
};