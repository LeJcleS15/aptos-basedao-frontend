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

                <!-- DAO Proposals Header and Add Button -->
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-semibold">DAO Proposals</h2>
                    <a href="{{ route('create_proposal', [$dao->dao_type, $dao->dao_id])}}">
                        <button class="items-center cursor-not-allowed opacity-70 px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500">
                            Create New Proposal
                        </button>
                    </a>
                </div>
                
                @include('partials.flash_messages')

                <!-- Ongoing Proposals Section -->
                <div class="ongoing-proposals mt-4 pt-8 mb-8 border-t border-amber-600">

                    <h3 class="text-xl font-semibold mb-4">Ongoing Proposals</h3>

                    <!-- Example Proposal -->
                    {{-- <div class="proposal relative bg-yellow-100 p-4 mb-4 rounded-md shadow-md">

                        <!-- Date Ended Timestamp -->
                        <div class="absolute top-4 right-4 text-xs text-gray-500">
                            End: Oct 30, 2024
                        </div>

                        <h3 class="text-lg font-semibold">Proposal #1: Increase DAO Fund</h3>
                        <p class="text-sm mb-2">Description: This proposal suggests increasing the DAO fund by 20%.</p>

                        <!-- Voting Buttons -->
                        <div class="flex space-x-2 mb-2">
                            <button class="bg-green-500 hover:bg-green-700 text-white font-semibold py-1 px-2 rounded">YAY</button>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded">NAY</button>
                            <button class="bg-gray-500 hover:bg-gray-700 text-white font-semibold py-1 px-2 rounded">PASS</button>
                        </div>
                        
                        <div class="text-sm">
                            <p class="font-semibold">Total Votes: 195</p>
                        </div>

                    </div> --}}

                    <!-- Improved Proposal Design -->
                    {{-- <div class="proposal relative bg-amber-100 p-6 mb-6 rounded-lg shadow-lg">

                        <!-- Date Ended Timestamp -->
                        <div class="absolute top-4 right-4 text-sm text-gray-600">
                            Ends: Oct 30, 2024
                        </div>

                        <h3 class="text-xl font-bold mb-2">Proposal #1: Increase DAO Fund</h3>
                        <p class="text-gray-700 mb-4">This proposal suggests increasing the DAO fund by 20%.</p>

                        <!-- Voting Section -->
                        <div class="mb-4">
                            <p class="font-semibold mb-2">Cast Your Vote:</p>
                            <div class="flex items-center space-x-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-green-500" name="voteOption" value="YAY">
                                    <span class="ml-2">YAY</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-red-500" name="voteOption" value="NAY">
                                    <span class="ml-2">NAY</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-gray-500" name="voteOption" value="PASS">
                                    <span class="ml-2">PASS</span>
                                </label>
                            </div>
                        </div>

                        <!-- Vote Button -->
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                            Vote
                        </button>

                        <!-- Total Votes Section -->
                        <div class="mt-6">
                            <p class="font-semibold mb-2">Total Votes:</p>
                            <div class="space-y-4">
                                <!-- YAY -->
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span class="font-semibold">YAY</span>
                                        <span class="font-semibold">100 votes (51.28%)</span>
                                    </div>
                                    <div class="w-full bg-gray-200 h-2">
                                        <div class="bg-green-500 h-2 rounded-sm" style="width:51.28%"></div>
                                    </div>
                                </div>
                                <!-- NAY -->
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span>NAY</span>
                                        <span class="font-semibold">70 votes (35.90%)</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-md h-2">
                                        <div class="bg-red-500 h-2 rounded-md" style="width:35.90%"></div>
                                    </div>
                                </div>
                                <!-- PASS -->
                                <div>
                                    <div class="flex justify-between mb-1">
                                        <span>PASS</span>
                                        <span class="font-semibold">25 votes (12.82%)</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-lg h-2">
                                        <div class="bg-gray-500 h-2 rounded-lg" style="width:12.82%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> --}}

                    <!-- Improved Proposal Design -->
                    <a href="{{ route('show_proposal', [$dao->dao_type, $dao->dao_id, 1])}}">
                    <div class="proposal relative bg-amber-100 p-6 mb-6 rounded-lg shadow-lg hover:shadow-lg hover:shadow-amber-600 transition duration-300">

                        <!-- Date Ended Timestamp -->
                        <div class="absolute top-4 right-4 text-xs text-gray-600">
                            Ends: Oct 30, 2024
                        </div>

                        <h3 class="text-xl font-bold mb-2">Proposal #1: Increase DAO Fund</h3>
                        <p class="text-gray-700 mb-4">This proposal suggests increasing the DAO fund by 20%.</p>

                        <!-- Voting Section -->
                        {{-- <div class="mb-4 flex">
                            <p class="font-semibold mb-2">Cast Your Vote:</p>
                            <div class="flex space-x-2">
                                <button class="vote-option text-sm bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-3 rounded focus:outline-none focus:ring-2 focus:ring-green-300" data-value="YAY">
                                    YAY
                                </button>
                                <button class="vote-option text-sm bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-3 rounded focus:outline-none focus:ring-2 focus:ring-red-300" data-value="NAY">
                                    NAY
                                </button>
                                <button class="vote-option text-sm bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-3 rounded focus:outline-none focus:ring-2 focus:ring-gray-300" data-value="PASS">
                                    PASS
                                </button>
                            </div>
                        </div>

                        <!-- Vote Button -->
                        <button class=" px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500">
                            Vote
                        </button> --}}

                        <!-- Total Votes Section -->
                        {{-- <div class="mt-6">
                            <p class="font-semibold mb-2">Total Votes:</p>
                            <div class="space-y-4">
                                <!-- YAY -->
                                <div>
                                    <div class="relative w-full bg-gray-200 rounded-sm h-6">
                                        <div class="absolute left-0 top-1 z-10 text-white pl-4 text-xs"> 
                                            YAY - 100 Votes (51.28%)
                                        </div>
                                        <div class="absolute left-0 top-0 z-0 h-6 bg-green-500 rounded-sm text-white text-sm flex items-center justify-center" style="width:71.28%">
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- NAY -->
                                <div>
                                    <div class="relative w-full bg-gray-200 rounded-sm h-6">
                                        <div class="absolute left-0 top-1 z-10 text-white pl-4 text-xs"> 
                                            NAY - 70 Votes (35.90%)
                                        </div>
                                        <div class="absolute left-0 top-0 z-0 h-6 bg-red-500 rounded-sm text-white text-sm flex items-center justify-center" style="width:35.90%">
                                            
                                        </div>
                                    </div>
                                </div>

                                <!-- PASS -->
                                <div>
                                    <div class="relative w-full bg-gray-200 rounded-sm h-6">
                                        <div class="absolute left-0 top-1 text-white z-10 pl-4 text-xs"> 
                                            Pass - 25 Votes (12.82%)
                                        </div>
                                        <div class="absolute left-0 top-0 z-0 h-6 bg-gray-500 rounded-sm text-white text-sm flex items-center justify-center" style="width:22.82%">
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> --}}

                    </div>
                    </a>


                    
                </div>

                <!-- Completed Proposals Section -->
                <div class="completed-proposals">
                    <h3 class="text-xl font-semibold mb-4">Completed Proposals</h3>
                    
                    <!-- Example Completed Proposal -->
                    <div class="completed_proposal relative bg-amber-100 p-4 mb-4 rounded-md shadow-md ">
                        
                        <!-- Date Ended Timestamp -->
                        <div class="absolute top-4 right-4 text-xs text-gray-500">
                            Ended: Sep 30, 2024
                        </div>
                        
                        <h3 class="text-lg font-semibold">Proposal #0: New DAO Proposal Types</h3>
                        <p class="text-sm mb-4">Description: This proposal suggests setting new proposal types for quick voting within 1 to 3 days.</p>
                        
                        <!-- Total Votes -->
                        <div class="text-sm">
                            <p class="font-semibold">Total Votes: 195</p>
                        </div>
                        
                        <!-- Status Tags -->
                        <div class="absolute bottom-4 right-4 flex space-x-2">
                            <!-- Approval Status Tag -->
                            <span class="bg-green-500 text-white text-xs font-semibold py-1 px-2 rounded">Approved</span>
                            <!-- Execution Status Tag -->
                            <span class="bg-blue-500 text-white text-xs font-semibold py-1 px-2 rounded">Executed</span>
                        </div>
                    </div>

                </div>



            </div>

        </div>

    </div>

@endsection
