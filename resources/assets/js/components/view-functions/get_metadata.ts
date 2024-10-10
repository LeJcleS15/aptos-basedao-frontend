import { aptosClient } from "../utils/aptosClient";
import { GOV_TOKEN_MODULE_ADDRESS } from "../../constants";

interface Metadata {
    symbol: string;
    name: string;
    icon: string;
    website: string;
}

// Fetch the Metadata object from the blockchain
export const getMetadata = async (): Promise<[Metadata]> => {
    try {
        // Make the view function call to fetch the Metadata object
        const metadata = await aptosClient().view<[Metadata]>({
            payload: {
                function: `${GOV_TOKEN_MODULE_ADDRESS}::gov_token::metadata`, // Call the view function
                typeArguments: [],
                functionArguments: [],
            },
        });

        // Return the Metadata object
        return metadata;

    } catch (error) {
        console.error("Error fetching metadata:", error);
        throw error;
    }
};