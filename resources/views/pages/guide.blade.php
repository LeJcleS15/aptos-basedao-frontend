@extends('default')

@section('content')

    <div class="flex w-full py-24" style="background-image: url('https://res.cloudinary.com/blockbard/image/upload/c_scale,w_auto,q_auto,f_auto,fl_lossy/v1728839558/header-4_gpszvy.png'); background-size: cover; background-position: center;">
        <div class="max-w-7xl">
            <div class="flex flex-col ml-40 bg-white opacity-90 px-12 py-4 rounded-md"> 
                <h3 class="text-3xl text-amber-600 font-extrabold">Guide</h3>
                <span class="w-14 border-2 border-amber-600 mt-1"></span>
            </div>
        </div>
    </div>

    <div class="flex flex-col w-8/12 px-12 py-6 m-auto">

        <div class="flex flex-col pl-3">

            <div class="bg-yellow-50 border-2 border-amber-400 p-4 rounded-md shadow-lg shadow-amber-300" style="min-height: 600px">
                
                <div class="mt-2 px-10 py-6 text-gray-600 space-y-6">

                    <h2 class="font-semibold text-2xl">DAO Models for Different Community Needs</h2>
                    
                    <p>BaseDAO offers various governance models to suit different types of communities:</p>

                    <p><strong>Standard DAO:</strong> This model supports collective decision-making, allowing members that hold the DAO’s governance tokens to participate in proposing, voting on, and executing ideas together.</p>

                    <p><strong>Guild DAO:</strong> Designed for specialised and focused groups, the Guild DAO model incorporates a centralized leadership structure without the need for governance tokens, making it a good fit for small to medium communities.</p>

                    <p><strong>Hybrid DAO:</strong> For communities that want a blend of democratic governance and role-based structures, the Hybrid DAO model offers flexibility with governance tokens and member roles together that influences a member’s vote and participation.</p>

                </div>

            </div>

        </div>

    </div>

@endsection
