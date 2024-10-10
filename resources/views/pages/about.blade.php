@extends('default')

@section('content')

    <div class="bg-amber-50 overflow-hidden w-full">
        <div class="relative max-w-7xl mx-auto py-8 sm:py-16 px-12 sm:px-6 lg:px-8">
            <div class="hidden lg:block bg-orange-50 absolute top-0 bottom-0 left-3/4 w-screen"></div>
            <div class="mx-auto text-base max-w-prose lg:grid lg:grid-cols-2 lg:gap-8 lg:max-w-none">
                <div>
                    <h2 class="text-base text-gray-700 font-semibold tracking-wide uppercase">0xBlockBard</h2>
                    <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-amber-600 sm:text-4xl">About BaseDAO</h3>
                    <p class="mt-4 text-md text-gray-500 italic font-merriweather">Decentralised DAO Generator on Aptos</p>
                </div>
            </div>
            <div class="mt-8 lg:grid lg:grid-cols-2 lg:gap-8">
                <div class="relative lg:row-start-1 lg:col-start-2">
                    <svg class="hidden lg:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                        <defs>
                            <pattern id="de316486-4a29-4312-bdfc-fbce2132a2c1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-amber-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="384" fill="url(#de316486-4a29-4312-bdfc-fbce2132a2c1)" />
                    </svg>
                    <div id="about_image" class="relative text-base mx-auto max-w-prose lg:max-w-none sm:pl-20">
                        <figure>
                            <div class="aspect-w-12 aspect-h-7 lg:aspect-none">
                                <img class="rounded-lg shadow-lg object-cover object-center" src="https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728494657/about-3_dt5gun.png" alt="decentralised governance">
                            </div>
                            <figcaption class="mt-3 flex text-sm text-gray-500">
                                <svg class="flex-none w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V7a2 2 0 00-2-2h-1.586a1 1 0 01-.707-.293l-1.121-1.121A2 2 0 0011.172 3H8.828a2 2 0 00-1.414.586L6.293 4.707A1 1 0 015.586 5H4zm6 9a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                </svg>
                                <span class="ml-2">Crowdfunding the future, one idea at a time.</span>
                            </figcaption>
                        </figure>
                    </div>
                    
                </div>
                <div class="mt-8 lg:mt-0">
                    
                    <div class="mt-5 prose prose-amber text-gray-500 mx-auto lg:max-w-none lg:row-start-1 lg:col-start-1 text-justify pr-5 space-y-6">

                        <p>BaseDAO</p>

                        <h3>Who Made This</h3>
                        <p>BaseDAO is designed and built by <a href="https://twitter.com/0xblockbard" target="_blank">@0xblockbard</a>.
                        <p>Frameworks and tools used:</p>
                        <ul role="list">
                            <li>Laravel and Tailwind CSS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('scripts')

    {{-- @vite('resources/assets/js/scrollToFixed.js') --}}

    <script src="https://aptos-blockbard.s3.ap-southeast-2.amazonaws.com/assets/js/scrollToFixed.js"></script>

    <script>
        $(document).ready(function() {
            function handleScrollToFixed() {
                // check screen width and apply scrollToFixed for desktop screens (greater than 768px)
                if (window.innerWidth > 768) {
                    $('#about_image').scrollToFixed();
                } else {
                    // remove scrollToFixed if the screen width is below 768px
                    $('#about_image').trigger('detach.ScrollToFixed');
                }
            }

            handleScrollToFixed();

            // on window resize
            $(window).resize(function() {
                handleScrollToFixed();
            });
        });
    </script>

@endsection