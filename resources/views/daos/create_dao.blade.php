@extends('default')

@section('content')

    <div class="flex flex-col w-8/12 px-12 py-6 m-auto mt-8">

        <div class="flex flex-col pl-3 mt-6">
            <h3 class="font-semibold text-3xl">Create a new DAO</h3>
            <p class="text-sm text-gray-500">All information here will be stored on the Aptos blockchain</p>

            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mt-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-yellow-700">
                            Notice: DAO will be initialized on Aptos Testnet
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="create_dao_form" class="w-full mt-6 mb-32 create_dao_form">
            <div class="flex flex-row mb-8">

                <div class="flex flex-col w-full pr-1">

                    <input id="dao_type" class="dao_type hidden" name="dao_type" data-dao-type="standard" value="standard" />

                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                            Name
                        </label>
                        <input id="name" autocomplete="off" class="name appearance-none shadow-sm focus:ring-amber-500 focus:border-amber-500 mt-1 block w-full px-2 py-2 sm:text-sm border border-gray-300 rounded-md" type="text" placeholder="DAO Name">
                    </div>

                    <div class="w-full px-3 mt-6">
                        <label class="block mb-2" for="description">
                            <span class="uppercase tracking-wide text-gray-700 text-xs font-bold">About</span>
                        </label>
                        <textarea id="description" name="description" rows="2" class="description appearance-none shadow-sm focus:ring-amber-500 focus:border-amber-500 mt-1 block w-full px-2 py-2  sm:text-sm border border-gray-300 rounded-md" placeholder="Tell us more about this DAO"></textarea>
                    </div>

                    <div class="w-full px-3 mb-6 md:mb-0 mt-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="start_imagedate">
                            DAO Image (URL or IPFS)
                        </label>
                            <input id="image_url" autocomplete="off" class="image_url appearance-none shadow-sm focus:ring-amber-500 focus:border-amber-500 mt-1 block w-full px-2 py-2 sm:text-sm border border-gray-300 rounded-md" type="text" placeholder="Full url or ipfs://">
                    </div>

                    
                    <div class="w-full px-3 mb-6 md:mb-0 mt-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold" for="start_imagedate">
                            Governance Token
                        </label>
                        <span class="text-xs mb-2">(For testnet, we use our default governance token that you can mint from the faucet)</span>
                        <input id="governance_token" disabled autocomplete="off" class="hover:cursor-not-allowed governance_token appearance-none shadow-sm focus:ring-amber-500 focus:border-amber-500 mt-1 block w-full px-2 py-2 sm:text-sm border border-gray-300 rounded-md" type="text" placeholder="Default governance token" val="governance">
                    </div>

                </div>

            </div>

            <div id="create_dao_submit_button"></div>

        </div>
    </div>

@endsection
