@extends('default')

@section('content')

    <div class="flex w-full py-24" style="background-image: url('https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728839558/header-3_z3hbm2.png'); background-size: cover; background-position: center;">
        <div class="max-w-7xl">
            <div class="flex flex-col ml-16 sm:ml-40 bg-white opacity-90 px-12 py-4 rounded-md"> 
                <h3 class="text-3xl text-amber-600 font-extrabold">Create a new DAO</h3>
                <span class="w-14 border-2 border-amber-600 mt-1"></span>
            </div>
        </div>
    </div>

    <div class="flex flex-col w-8/12 px-12 py-6 m-auto">

        <div class="flex flex-col pl-3">

            <div class="bg-sky-50 border-l-4 border-sky-400 p-4 mt-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-sky-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-sky-700">
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

                    <div class="w-full px-3 mb-6 md:mb-0 mt-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="dao_type">
                            DAO Type
                        </label>
                        <div class="mt-1 sm:mt-0 w-full relative">
                            <select id="dao_type" name="dao_type" class="dao_type appearance-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5">
                                <option value="standard" {{ old('dao_type') == 'standard' ? 'selected' :''  }}>Standard DAO</option>
                                <option value="guild" {{ old('dao_type') == 'guild' ? 'selected' :''  }}>Guild DAO</option>
                                <option value="hybrid" {{ old('dao_type') == 'hybrid' ? 'selected' :''  }}>Hybrid DAO</option>
                            </select>
                            <!-- Dropdown arrow -->
                            <div class="pointer-events-none absolute inset-y-0 right-0 top-1 flex items-center pr-2">
                                <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707 1.707L6.414 9.707a1 1 0 01-1.414 0L.293 4.707A1 1 0 111.707 3.293l4 4 4-4A1 1 0 0110 3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="w-full px-3  mb-6 md:mb-0 mt-6">
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
