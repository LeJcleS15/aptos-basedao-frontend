@extends('default')

@section('content')

    <div class="flex w-full px-10">

        <div class="home flex flex-col sm:flex-row w-full">

            <div class="flex flex-col items-start justify-center w-full sm:w-1/2 sm:pr-16 sm:pl-20 pb-10 pt-10 sm:pt-0">

                <h1 class="text-5xl text-amber-600 font-extrabold">BaseDAO</h1>
                <span class="w-20 border-2 border-amber-600 mt-2"></span>
                <h3 class="text-md mt-2 font-semibold italic">Collectively building the future ecosystem on Aptos</h3>

                <p class="text-base mt-8">Choose from several different types of DAOs that suit your community's needs and then create a new DAO with one click.</p>

                <div class="flex flex-row mt-10 space-x-4">
                    <a href="{{ route('show_all_daos') }}">
                        <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500">
                            Explore DAOs
                        </button>
                    </a>

                    <a href="{{ route('create_dao') }}">
                        <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-amber-700 bg-amber-100 hover:bg-amber-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500">
                            Start a DAO
                        </button>
                    </a>
                </div>

                <span class="w-10 border border-amber-600 mt-24"></span>
                <p class="text-sm mt-2 italic">DAO it yourself—power to the people, code to the community</p>

            </div>

            <div class="flex flex-col items-center justify-center w-full sm:w-1/2 sm:px-6 pb-20 sm:pb-0 relative -top-10" >
                @include('partials.home_svg')
            </div>

        </div>

    </div>

@endsection
