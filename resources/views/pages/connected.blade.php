@extends('default')

@section('content')

    <div class="bg-amber-50 overflow-hidden w-full">
        <div class="relative max-w-7xl mx-auto py-8 sm:py-10 px-4 sm:px-6 lg:px-8">

            <div class="mx-auto text-base max-w-full mt-4">
                <div class="flex flex-col items-center w-full">
                    <h2 class="text-base text-amber-800 font-semibold tracking-wide uppercase">Welcome</h2>
                    <div>
                        <h3 class="mt-2 text-3xl leading-8 font-roboto font-extrabold tracking-tight text-amber-600 sm:text-4xl">Get started with BaseDAO</h3>
                        <div class="w-40 sm:w-48 border border-amber-400 mt-2 mb-2 ml-auto pr-4"></div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row mt-8 px-20 sm:px-0 sm:space-x-12">
                    
                    <a class="flex w-full sm:w-1/3"  href="{{ route('show_all_daos') }}">
                        <div class="flex flex-col bg-white rounded-md shadow-md border border-amber-600 px-8 py-6 hover:shadow-xl shadow-amber-400 hover:border-amber-600 transition duration-300 ease-in-out hover:scale-[1.05] hover:cursor-pointer hover:border-2"> 
                            <h2 class="font-roboto font-bold text-xl text-center">Explore DAOs</h2>
                            <div class="w-20 border border-amber-400 mt-1 mb-4 mx-auto"></div>
                            <img class="rounded-sm shadow-md border border-amber-500 shadow-amber-500" src="https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728492800/explore-dao-2_fsbzsu.png" />
                            <p class="font-merriweather mt-6 sm:px-6 text-center text-sm font-medium">Find and join DAOs that align with your interests and goals</p>
                            <button class="mt-6 mb-2 text-sm leading-4 font-medium mx-auto py-2 px-4 bg-amber-600 text-white rounded-md hover:bg-amber-500 transition duration-300 font-sans">Learn More</button>
                        </div>
                    </a>

                    <a class="flex w-full sm:w-1/3 mt-10 sm:mt-0" href="{{ route('create_dao') }}">
                        <div class="flex flex-col bg-white rounded-md shadow-md border border-amber-600 px-8 py-6 hover:shadow-xl shadow-amber-400 hover:border-amber-600 transition duration-300 ease-in-out hover:scale-[1.05] hover:cursor-pointer hover:border-2"> 
                            <h2 class="font-roboto font-bold text-xl text-center">Create DAO</h2>
                            <div class="w-14 border border-amber-400 mt-1 mb-4 mx-auto"></div>
                            <img class="rounded-sm shadow-md border border-amber-500 shadow-amber-100" src="https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728492382/create-dao_jwpbpv.png" />
                            <p class="font-merriweather mt-6 text-center text-sm font-medium">Start a new DAO with one click and build your community</p>
                            <button class="mt-6 mb-2 text-sm leading-4 font-medium mx-auto py-2 px-4 bg-amber-600 text-white rounded-md hover:bg-amber-500 transition duration-300 font-sans">Learn More</button>
                        </div>
                    </a>

                    <a class="flex w-full sm:w-1/3 mt-10 sm:mt-0" href="{{ route('guide') }}">
                        <div class="flex flex-col bg-white rounded-md shadow-md border border-amber-600 px-8 py-6 hover:shadow-xl shadow-amber-400 hover:border-amber-600 transition duration-300ease-in-out hover:scale-[1.05] hover:cursor-pointer hover:border-2"> 
                            <h2 class="font-roboto font-bold text-xl text-center">Guide</h2>
                            <div class="w-14 border border-amber-400 mt-1 mb-4 mx-auto"></div>
                            <img class="rounded-sm shadow-md border border-amber-500 shadow-amber-500 " src="https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728493924/guide-concept-2_pdrwbt.png" />
                            <p class="font-merriweather mt-6 sm:px-4 text-center text-sm font-medium">Learn more about BaseDAO and the various DAO governance models</p>
                            <button class="mt-6 mb-2 text-sm leading-4 font-medium mx-auto py-2 px-4 bg-amber-600 text-white rounded-md hover:bg-amber-500 transition duration-300 font-sans">Learn More</button>
                        </div>
                    </a>
                    
                </div>
            </div>
            
            
        </div>
    </div>


@endsection