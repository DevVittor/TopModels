@extends('layouts.main')
@foreach($dados as $nameProfile)
@section('title',$nameProfile->nome)
@endforeach

@section('content')
    
    <main class="font-inter bg-dark">
        <section>
            <div class="flex justify-center items-center h-auto pb-5 pt-5 md:p-0 2xl:pt-5 2xl:pb-5">
                <div class="flex items-center flex-row md:flex-col  xl:flex-row 2xl:flex-row justify-between h-auto w-bannerPerfil md:rounded-none 2xl:rounded-xl p-10 gap-5 bg-divs">
                    <div class="h-64 w-64 rounded-full bg-white cursor-pointer">
                        <img class="h-full w-full object-cover rounded-full pointer-events-none" src="https://images.pexels.com/photos/733872/pexels-photo-733872.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                    </div>
                    <div class="flex flex-col 2xl:items-start md:items-center justify-start h-full w-3/5 text-white">
                        <div class="">
                            <h2 class="text-xl md:text-2xl 2xl:text-3xl text-white font-semibold capitalize">Rahul Bhosale, 24</h2>
                        </div>
                        <div class="flex items-center gap-3 pt-2 text-gray-300">
                            <h4 class="font-medium text-sm">Homem</h4>
                            <span class="">|</span>
                            <h4 class="font-medium text-sm"><i class="bi bi-geo-alt-fill pr-2 text-red-600"></i>Rio de janeiro, RJ</h4>
                        </div>
                        <div class="pt-5 md:text-center 2xl:text-left">
                            <p class="font-light text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae sequi assumenda dolore dicta ex beatae veritatis dolorum quae quisquam dolores nemo iste iure obcaecati ab doloribus, rem ducimus eos dolorem.</p>
                        </div>
                        <div class="w-full">
                            <nav>
                                <ul class="flex items-center md:justify-center 2xl:justify-start gap-3 pt-5 text-white text-xl hover:cursor-pointer">
                                    <li><a target="_blank" href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li><a target="_blank" href="#"><i class="bi bi-instagram"></i></a></li>
                                    <li><a target="_blank" href="#"><i class="bi bi-twitter"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row 2xl:flex-col gap-5 items-center justify-center">
                        <div class="w-full flex justify-center items-center bg-white rounded-full pr-10 pt-2 pb-2 pl-10">
                            <h2>Detalhes</h2>
                        </div>
                        <div class="w-full flex justify-center items-center bg-white rounded-full pr-10 pt-2 pb-2 pl-10">
                            <h2>Corpo</h2>
                        </div>
                        <div class="w-full flex justify-center items-center bg-white rounded-full pr-10 pt-2 pb-2 pl-10">
                            <h2>Menu</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="w-full m-auto bg-divs md:bg-dark 2xl:bg-divs columns-1 gap-3 2xl:columns-6 p-3 xl:columns-5 md:columns-4 sm:columns-3 ">
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img class="max-w-full rounded-xl" src="https://images.pexels.com/photos/2085247/pexels-photo-2085247.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img class="max-w-full rounded-xl" src="https://images.pexels.com/photos/3936894/pexels-photo-3936894.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img class="max-w-full rounded-xl" src="https://images.pexels.com/photos/1999503/pexels-photo-1999503.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img class="max-w-full rounded-xl" src="https://images.pexels.com/photos/2479146/pexels-photo-2479146.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img class="max-w-full rounded-xl" src="https://images.pexels.com/photos/2467393/pexels-photo-2467393.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img class="max-w-full rounded-xl" src="https://images.pexels.com/photos/3290405/pexels-photo-3290405.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
                <div class="mb-2.5 w-full break-inside-avoid">
                    <img class="max-w-full rounded-xl" src="https://images.pexels.com/photos/2946828/pexels-photo-2946828.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div>
            </div>
        </section>
    </main>

@endsection