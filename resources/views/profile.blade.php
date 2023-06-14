@extends('layouts.main')
@section('title','ABRIME - Início')

@section('content')

<main>
   <section>
    <div class="flex flex-col justify-center items-center ">
        <div class="flex justify-center p-5">
            <div class="">
                <img class="w-48 h-64 aspect-auto object-cover" src="https://images.pexels.com/photos/2467394/pexels-photo-2467394.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
            </div>
            <div class="w-3/6 p-5 flex flex-col justify-center bg-white gap-2.5">
                <div class="flex items-start gap-5">
                    <div class=" flex flex-col ">
                        <div class="flex items-center gap-2.5">
                            <h2>Amanda_nash</h2>
                            <img class="h-6" src="/img/check.png" alt="">
                        </div>
                        <div class="">
                            <span class="text-gray-400 text-sm">Amanda Nash</span>
                        </div>
                    </div>
                    <div >
                        <nav>
                            <ul class="flex gap-2.5 items-center">
                                <li class="p-3px-12px rounded-sm bg-gray-100 font-normal">LifeStyle</li>
                                <li class="p-3px-12px rounded-sm bg-gray-100 font-normal">Music</li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="flex gap-5 items-center">
                    <div class="flex items-center gap-1.5">
                        <h3>1,022</h3>
                        <span>Posts</span>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <h3>1,022</h3>
                        <span>Posts</span>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <h3>1,022</h3>
                        <span>Posts</span>
                    </div>
                </div>
                <div class="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro facilis officiis atque ea consequuntur id necessitatibus officia, totam iusto temporibus!</p>
                </div>
                <div class="">
                    <ul class="flex items-center gap-2.5 flex-wrap">
                        <li ><span class="p-3px-12px rounded-sm bg-blue-500 text-white">Home</span></li>
                        <li ><span class="p-3px-12px rounded-sm bg-blue-500 text-white">Home</span></li>
                        <li ><span class="p-3px-12px rounded-sm bg-blue-500 text-white">Home</span></li>
                        <li ><span class="p-3px-12px rounded-sm bg-blue-500 text-white">Home</span></li>
                        <li ><span class="p-3px-12px rounded-sm bg-blue-500 text-white">Home</span></li>
                        <li ><span class="p-3px-12px rounded-sm bg-blue-500 text-white">Home</span></li>
                        <li ><span class="p-3px-12px rounded-sm bg-blue-500 text-white">Home</span></li>
                        <li ><span class="p-3px-12px rounded-sm bg-blue-500 text-white">Home</span></li>
                        <li ><span class="p-3px-12px rounded-sm bg-blue-500 text-white">Home</span></li>
                    </ul>
                </div>
            </div>
            <div class="p-5 bg-white">
                <div class="flex gap-2.5 items-center">
                    <i class="bi bi-envelope rounded-full flex justify-center items-center h-10 w-10 bg-gray-200"></i>
                    <i class="bi bi-three-dots rounded-full flex justify-center items-center h-10 w-10 bg-gray-200"></i>
                </div>
            </div>
        </div>
    </div>
   </section>
</main>
    
@endsection