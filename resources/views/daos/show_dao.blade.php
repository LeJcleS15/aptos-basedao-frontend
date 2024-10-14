@extends('default')

@section('content')

    <div class="flex w-full py-24" style="background-image: url('https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728839558/header-4_gpszvy.png'); background-size: cover; background-position: center;">
        <div class="max-w-7xl">
            <div class="flex flex-col ml-40 bg-white opacity-90 px-12 py-4 rounded-md"> 
                <h3 class="text-3xl text-amber-600 font-extrabold">DAO</h3>
                <span class="w-14 border-2 border-amber-600 mt-1"></span>
            </div>
        </div>
    </div>

    <div class="flex max-w-7xl w-full px-10 pt-16 pb-32 mx-auto">

        <div class="dao_container single_dao flex flex-col sm:flex-row w-full">

            <div class="flex w-full sm:w-1/2 sm:pr-6">
                <img id="featured_image" src="https://aptos-blockbard.s3.ap-southeast-2.amazonaws.com/aptos-crowdfund/crowdfunding-placeholder.png" class="featured_image rounded-md w-full" style="height: 500px">
            </div>

            <div class="flex flex-col w-full sm:w-1/2 sm:px-10 py-2 ">

                <div class="flex justify-between">
                    <span id="count" class="text-amber-700 text-sm font-semibold">{{ ucfirst($dao->dao_type).' DAO' }}</span>
                    <div id="edit_dao"></div>
                </div>

                <h2 id="name" class="inline name text-2xl font-semibold mt-2">{{ $dao->name }}</h2>

                <h3 id="description" class="description text-base mt-4 mb-2 text-justify">{{ $dao->description }}</h3>

                @include('partials.flash_messages')

                {{-- <div id="contribute_form" class="contribute_form mt-3">
                    <label for="contribution" class="block text-sm text-amber-700 font-bold">Support This dao:</label>
                    <div class="mt-3 flex rounded-md shadow-sm">
                        <div class="relative flex items-stretch flex-grow focus-within:z-10">
                            <input type="text" name="contribution" id="contribution" class="contribution border focus:ring-amber-500 focus:border-amber-500 block w-full rounded-none rounded-l-md pl-4 sm:text-sm border-gray-300" placeholder="Pledge Amount" />
                        </div>
                        <button type="button" class="-ml-px relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-amber-500 focus:border-amber-500">
                            <span>APT</span>
                        </button>
                    </div>

                    <div class="inline-flex items-left mt-6">

                        <div id="contribute_submit"></div>

                        <div id="refund_submit"></div>

                        <div id="claim_funds_submit"></div>
                    </div>
                </div> --}}

            </div>

        </div>

    </div>

@endsection
