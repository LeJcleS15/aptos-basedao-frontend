@extends('default')

@section('content')

    <div class="flex w-full py-24" style="background-image: url('https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728839558/header-5_tpbf7h.png'); background-size: cover; background-position: center;">
        <div class="max-w-7xl">
            <div class="flex flex-col ml-40 bg-white opacity-90 px-12 py-4 rounded-md"> 
                <h3 class="text-3xl text-amber-600 font-extrabold">DAOs</h3>
                <span class="w-14 border-2 border-amber-600 mt-1"></span>
            </div>
        </div>
    </div>

    <div class="flex max-w-7xl w-full px-6 py-6 mx-auto">

        <div class="flex flex-col w-full mt-6 ml-4 mb-10">

            <div class="mt-12 w-full mx-auto">

                <div id="show_all_daos" class="flex flex-col rounded-lg overflow-hidden w-full">
                
                    <div class="w-full mx-auto grid gap-8 lg:grid-cols-3 pb-6">

                        @foreach($daos as $dao)
                        
                        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                           <div class="flex-shrink-0 relative">
                                <a href="{{ route('show_dao', [$dao->dao_type, $dao->dao_id])}}">
                                    <img class="lazy h-72 w-full object-cover hover:opacity-70" src="{{ $dao->image_url }}" alt="{{ $dao->name }}" onerror="this.onerror=null; this.src='https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728905872/dao-image-not-found-2_siqpba.png';">
                                </a>
                                <div class="absolute bottom-8 right-3"><span class="inline-flex items-center px-2.5 py-0.5 rounded-sm text-xs font-medium bg-yellow-100 text-yellow-800">{{ ucfirst($dao->dao_type) }}</span></div>
                                {{-- <div class="flex relative overflow-hidden h-3 text-xs bg-white">
                                    <div class="progress_bar shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-indigo-600" style="width: 0%;"></div>
                                </div> --}}
                           </div>
                           <div class="flex-1 bg-amber-100 pt-3 p-6 flex flex-col justify-between ">
                              <div class="flex-1">
                                 <p class="text-xl font-semibold showcase_text_gray_900"><a href="{{ route('show_dao', [$dao->dao_type, $dao->dao_id])}}" class="hover:underline">{{ $dao->name}}</a></p>
                                 {{-- <p class="mt-3 text-base text-gray-500 text-justify">{{ \Illuminate\Support\Str::limit($dao->description, 250) }}</p> --}}
                                 <p class="mt-3 text-base text-gray-600 text-justify">{{ \Illuminate\Support\Str::words($dao->description, 50, '...') }}</p>

                              </div>
                           </div>
                        </div>

                        @endforeach

                    
                </div> 

            </div>
        </div>
    </div>

@endsection