<nav class="fixed w-full bg-white shadow z-20 border-b border-transparent  ">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-14">
            <div class="flex sm:w-3/5">
                <div class="flex-shrink-0 flex items-center">

                    <a href="{{ route('home') }}" class="inline-flex items-center py-2 ml-2 relative top-0.5">
                        <span class=" text-lg font-extrabold text-amber-600 hover:text-amber-800">BaseDAO</span>
                    </a>

                </div>

                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a href="{{ route('about') }}" class="{{ \Request::route()->getName() == 'about' ? 'border-amber-500 text-amber-900' : 'border-transparent text-gray-500 hover:border-amber-500 hover:text-amber-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium hover:border-amber-500">
                        About
                    </a>

                    {{-- <a href="{{ route('about') }}" class="{{ \Request::route()->getName() == 'about' ? 'border-amber-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Creators
                    </a> --}}

                    <a href="{{ route('show_all_daos') }}" class="{{ \Request::route()->getName() == 'show_all_daos' ? 'border-amber-500 text-amber-900' : 'border-transparent text-gray-500 hover:border-amber-500 hover:text-amber-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium hover:border-amber-500">
                        DAOs
                    </a>

                    <a href="{{ route('faucet') }}" class="{{ \Request::route()->getName() == 'faucet' ? 'border-amber-500 text-amber-900' : 'border-transparent text-gray-500 hover:border-amber-500 hover:text-amber-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Faucet
                    </a>

                    <a href="{{ route('guide') }}" class="{{ \Request::route()->getName() == 'guide' ? 'border-amber-500 text-amber-900' : 'border-transparent text-gray-500 hover:border-amber-500 hover:text-amber-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                        Guide
                    </a>

                </div>

            </div>

        <div class="ml-6 flex items-center">

            <a href="{{ route('create_dao') }}" class="mr-4">
                <button type="button" class="nav_create_dao_button invisible items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-amber-600 hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500">
                    Create DAO
                </button>
            </a>

            <div id="connect-wallet" class="connect_wallet cursor-pointer text-sm font-semibold">
                connect
            </div>

        </div>

</nav>
