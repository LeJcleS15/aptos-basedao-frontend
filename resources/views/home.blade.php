@extends('default')

@section('content')

    <div class="flex flex-col w-full px-10 mt-20">

        <div class="section_one flex flex-col sm:flex-row w-full">

            <div class="flex flex-col items-start justify-center w-full sm:w-1/2 sm:pr-16 sm:pl-20 pb-10 pt-10 sm:pt-0">

                <h1 class="text-5xl text-amber-600 font-extrabold">BaseDAO</h1>
                <span class="w-20 border-2 border-amber-600 mt-2"></span>
                <h3 class="text-md mt-2 font-semibold italic">Collectively building the future ecosystem on Aptos</h3>

                <p class="text-base mt-2">From governance to collaboration, create and manage a new DAO on Aptos for your community with ease in just <span class="font-semibold underline">one click</span>.</p>

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

            <div class="flex flex-col items-center justify-center w-full sm:w-1/2 sm:px-6 sm:pb-0 relative sm:-top-10" >
                <img class="px-4" src="https://res.cloudinary.com/blockbard/image/upload/v1728473393/basedao-home-2_bp2r0c.png" alt="decentralised governance"/> 
            </div>

        </div>

        @include('pages.partials.dao_models')

        @include('pages.partials.testimonials')

        @include('pages.partials.faq')

    </div>

@endsection

@section('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
          const faqButtons = document.querySelectorAll('[aria-controls^="faq-"]');
      
          faqButtons.forEach(button => {
            button.addEventListener('click', () => {
              const contentId = button.getAttribute('aria-controls');
              const content = document.getElementById(contentId);
      
              const isExpanded = button.getAttribute('aria-expanded') === 'true';
              button.setAttribute('aria-expanded', !isExpanded);
      
              // Toggle the visibility of the answer
              content.classList.toggle('hidden', isExpanded);
      
              // Toggle the icons
              const icons = button.querySelectorAll('[data-slot="icon"]');
              icons[0].classList.toggle('hidden', !isExpanded); // + icon
              icons[1].classList.toggle('hidden', isExpanded); // - icon
            });
          });
        });
      </script>
    
@endsection 