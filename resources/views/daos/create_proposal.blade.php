@extends('default')

@section('content')

    <div class="flex w-full py-24" style="background-image: url('https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728839558/header-4_gpszvy.png'); background-size: cover; background-position: center;">
        <div class="max-w-7xl">
            <div class="flex flex-col ml-40 bg-white opacity-90 px-12 py-4 rounded-md"> 
                <h3 class="text-3xl text-amber-600 font-extrabold">DAO: {{ $dao->name }}</h3>
                <span class="w-14 border-2 border-amber-600 mt-1"></span>
            </div>
        </div>
    </div>

    <div class="flex max-w-7xl w-full px-10 pt-16 pb-32 mx-auto">

        <div class="dao_container single_dao flex flex-col sm:flex-row w-full">

            <div class="flex flex-col w-full sm:w-1/3 sm:pr-6">

                <div class="flex flex-row w-full">

                    <div class="flex flex-row items-center w-full mb-4">
                        <div class="w-40 h-40 mr-12">
                            <img id="featured_image" src="https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728905872/dao-image-not-found-2_siqpba.png" class="featured_image rounded-md w-full h-full object-cover" onerror="this.onerror=null; this.src='https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728905872/dao-image-not-found-2_siqpba.png';">
                        </div>
                        
                        <div class="flex flex-col justify-center">
                            <span id="count" class="text-amber-700 text-sm font-semibold">{{ ucfirst($dao->dao_type).' DAO' }}</span>
                            <h2 id="name" class="name text-2xl font-semibold mt-1">{{ $dao->name }}</h2>
                            <div id="edit_dao"></div>
                        </div>
                    </div>
                </div>

                <p id="description" class="description text-base mt-4 mb-2 text-justify border-t-2 pt-8 border-amber-600">
                    <span class="text-amber-600 font-semibold">About: </span>
                    {{ $dao->description }}
                </p>
            </div>

            <div class="flex flex-col w-full sm:w-2/3 sm:px-10 py-2 border-l-2 border-amber-600">

                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-semibold">Create New Proposal</h2>
                    <a href="{{ route('show_dao', [$dao->dao_type, $dao->dao_id])}}">
                        <button class="items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500">
                            Back to DAO
                        </button>
                    </a>
                </div>
                
                @include('partials.flash_messages')

                <div class="ongoing-proposals mt-4 pt-8 mb-8 border-t border-amber-600">

                    <h3 class="text-xl font-semibold mb-4">New Proposal</h3>


                    
                </div>

            </div>

        </div>

    </div>

@endsection
