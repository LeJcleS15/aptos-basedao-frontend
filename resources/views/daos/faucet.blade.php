@extends('default')

@section('content')

    <div class="flex max-w-7xl w-full pt-24 mx-auto">

        <div class="faucet_container flex flex-col sm:flex-row w-full">

            <div class="flex flex-col w-full sm:w-40p sm:px-6 py-2 ">

                <div class="flex justify-between">
                    <span id="count" class="text-amber-700 text-sm font-semibold">Aptos Testnet</span>
                </div>

                <h2 id="name" class="inline name text-2xl font-semibold mt-2">Governance Token Faucet</h2>
                
                <p class="text-base mt-4 text-justify">Easily mint test governance tokens to begin interacting with our DAOs on the Aptos testnet.</p>
                <p class="text-base mt-2 text-justify">These tokens will enable you to participate in various DAOs across our platform.</p>
                <p class="text-base mt-2 text-justify">Create and vote on proposals, and experiment with decentralised governance in a risk-free environment.</p>
                
                <p class="text-base mt-4 text-justify font-semibold">Get started with free tokens:</p>
                <p class="text-base mt-2 text-justify">Enter the amount you wish to mint and instantly receive test tokens that you can use across various markets.</p>
                <p class="text-base mt-2 mb-4 text-justify">No limits, no costs—just free tokens to explore and experiment!</p>

                @include('partials.flash_messages')

                <div id="faucet" class="faucet mt-4">
                    <label for="mint_amount" class="block text-sm text-amber-700 font-bold">How many tokens would you like to mint?</label>
                    <div class="mt-3 flex rounded-md shadow-sm">
                        <div class="relative flex items-stretch flex-grow focus-within:z-10">
                            <input type="text" name="mint_amount" id="mint_amount" class="mint_amount border focus:ring-amber-500 focus:border-amber-500 block w-full rounded-none rounded-l-md pl-4 sm:text-sm border-gray-300" placeholder="Input amount to mint" />
                        </div>
                        <button type="button" class="-ml-px relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-amber-500 focus:border-amber-500">
                            <span>Tokens</span>
                        </button>
                    </div>

                    <div class="inline-flex items-left mt-6">

                        <div id="mint_oracle_tokens_button"></div>

                    </div>
                </div>

            </div>

            <div class="flex relative w-full sm:w-60p sm:pl-6 pl-20 pt-8">
                <div class="faucet_image_container relative w-full">
                    <img id="faucet_image" src="https://res.cloudinary.com/blockbard/image/upload/v1728905109/governance-token-faucet-2_dbc3b2.png" class="faucet_image rounded-lg w-full shadow-lg" style="height: 500px">
                    <div class="overlay rounded-md"></div>
                </div>
            </div>

        </div>

    </div>

@endsection
