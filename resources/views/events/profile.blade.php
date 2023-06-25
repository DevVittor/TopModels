@extends('layouts.main')

@section('title',$profile->nome)

@section('content')

    <!--<main class="font-inter ">
        <section>
            <div class="flex justify-center h-profile  items-center flex-row p-5">
                <div class=" h-full 1/5">
                    <img class="h-full w-full object-cover pointer-events-none" src="/img/profileImg/{{$profile->imageProfile}}" alt="">
                </div>
                <div class=" h-full  bg-white border-r-2 border-b-2 border-t-2 rounded-r-md rounded-t-md rounded-l-none p-5 w-2/5">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-2.5">
                            <h2 class="text-2xl font-semibold">{{$profile->nome}}</h2>
                            @if($profile->verificada == false)
                            <h4 class="font-light text-base ">(Não Verificada)</h4>
                            @else
                            <img class="h-7 w-7" src="/img/check.png" alt="">
                            @endif
                        </div>
                        <div class="">
                            <button class="text-white bg-red-600 p-10px-25px rounded-md shadow-card font-semibold text-base"><i class="pr-2 fa-solid fa-triangle-exclamation"></i>Denunciar</button>
                        </div>
                    </div>
                    <div class="mt-2.5">
                        <nav>
                            <ul class="flex items-center gap-2.5">
                                <li><span class="p-3px-12px border-2 border-gray-100 text-black font-normal rounded-sm"><i class="fa-solid fa-location-dot pr-2 text-red-600"></i>{{$profile->city}}</span></li>
                                <li><span class="p-3px-12px border-2 border-gray-100 text-black font-normal rounded-sm"><i class="fa-solid fa-venus pr-2"></i>Mulher</span></li>
                                <li><span class="p-3px-12px border-2 border-gray-100 text-black font-normal rounded-sm"><i class="fa-solid fa-cake-candles pr-2"></i>25 Anos</span></li>
                                
                            </ul>
                        </nav>
                    </div>
                    <div class="mt-6">
                        <p class="text-base font-light">{{$profile->description}}</p>
                    </div>
                    <div class="flex items-center justify-between mt-8">
                        <div class="">
                            <nav>
                                <ul class="flex items-center gap-2.5 text-2xl ">
                                    <li><span class="cursor-pointer"><i class="fa-brands fa-square-facebook"></i></span></li>
                                    <li><span class="cursor-pointer"><i class="fa-brands fa-square-twitter"></i></span></li>
                                    <li><span class="cursor-pointer"><i class="fa-brands fa-square-instagram"></i></span></li>
                                    <li><span class="cursor-pointer"><i class="fa-brands fa-telegram"></i></span></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="">
                            <a target="_blank" class="bg-green-500 pt-2.5 pb-2.5 pr-5 pl-5 text-white text-xl rounded-sm shadow-card" href="#"><i class="pr-2 fa-brands fa-square-whatsapp"></i>Entrar em Contato</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section >
            <div class="flex justify-center items-center">
                <div class="p-3 grid grid-cols-6 gap-2.5 w-4/5">
                    <div class="bg-pink p-3 rounded-md shadow-card gap-16 flex flex-col justify-between">
                        <h2 class=" font-semibold text-white text-2xl">Ohos</h2>
                        <h4 class=" font-normal text-white text-base">Castanhos</h4>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class=" flex justify-center items-center">
                <div class="p-3 grid grid-cols-6 gap-2.5 w-4/5">
                    <div class="bg-blue-500 p-3 rounded-md shadow-card gap-16 flex flex-col justify-between">
                        <h2 class=" font-semibold text-white text-2xl">Ohos</h2>
                        <h4 class=" font-normal text-white text-base">Castanhos</h4>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="flex justify-center items-center flex-col pt-10 gap-8">
                <div class="">
                    <h2 class="text-3xl text-black font-extrabold underline"><i class="fa-solid fa-camera-retro pr-2"></i>Galeria</h2>
                </div>
                <div class="w-full max-w-5xl p-5 pb-10 mx-auto mb-10 gap-3 columns-3 space-y-3">
                    <img class="hover:border-4 border-4 border-transparent delay-150 transition-all hover:delay-200 hover:border-rosa rounded-md hover:cursor-pointer" src="https://images.pexels.com/photos/2737021/pexels-photo-2737021.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                </div> 
            </div>
        </section>
        <section>
            <div class="flex justify-center items-center flex-col pb-10 pt-10">
                <div class="flex items-center justify=center gap-3 mb-10">
                    <div class="">
                        <img class="h-14" src="/img/local.png" alt="">
                    </div>
                    <div class="flex justify-center items-center text-black flex-col">
                        <h2 class="text-3xl font-extrabold underline">Local de Encontro</h2>
                        <span class="mt-2 text-sm font-normal">Rua Brasilia de alburque - Tanque</span>
                    </div>
                </div>
                <iframe class="w-3/4 h-banner rounded-md shadow-card" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.3318797001425!2d-43.36743762385366!3d-22.938001479233186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd854cf082cef%3A0x69de85aa6f716032!2sR.%20Paulo%20Moreira%20da%20Silva%2C%20290%20-%20Taquara%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2022770-210!5e0!3m2!1spt-BR!2sbr!4v1686890258880!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    
    </main>-->

    <main class="font-inter">
    <section>
        <div class="flex justify-between items-center h-auto flex-col bg-white p-5">
            <div class="flex items-center justify-between w-full">
                <div class="">
                    <a href="/acompanhantes"><i class="fa-solid fa-arrow-left-long text-2xl"></i></a>
                </div>
                <div class="">
                    <i class="fa-solid hover:cursor-pointer fa-triangle-exclamation text-2xl text-white pt-1 pb-1 pr-8 pl-8 rounded-sm shadow-md bg-red-600 "></i>
                </div>
            </div>
            <div class="flex flex-col p-5 gap-3 h-auto">
                <div class="border-2 border-gray-100 h-96 max-h-96 max-w-maxCardImg rounded-md shadow-lg">
                    <img class="h-full w-full object-cover rounded-md shadow-lg" src="/img/profileImg/{{$profile->imageProfile}}" alt="">
                </div>
                <div class="absolute h-96 w-64 flex justify-end items-end p-3 z-10">
                    <div class="bg-white flex justify-center items-center rounded-full h-5 w-5">
                        <i class="fa-solid text-2xl fa-circle-check text-blue-500"></i>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                        <h2 class="text-xl font-medium capitalize">Vittor,</h2>
                        <span class="text-lg font-light capitalize">25</span>
                    </div>
                    <div class="">
                        <span class="text-sm font-light"><i class="fa-solid fa-location-dot text-red-600 pr-2"></i>Rio de Janeiro,Rj</span>
                    </div>
                </div>
                <div class="w-64 ">
                    <p class="text-black font-light text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam cumque vel possimus quae iste voluptatum nesciunt nisi expedita voluptas a.</p>
                </div>
                <div class="flex flex-col w-64 gap-3">
                    <h2 class="text-xl font-medium capitalize">Serviços:</h2>
                    <nav>
                        <ul class="flex flex-wrap items-center gap-1.5">
                            <li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li>
                            <li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li>
                            <li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li>
                            <li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li>
                            <li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li>
                            <li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li>
                            <li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li>
                            <li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li>
                            <li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li>
                            <li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li>
                            <li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li>
                            <li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li>
                            <li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li><li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li>
                            <li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li>
                            <li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li><li class="pt-1 pb-1 pr-4 pl-4 rounded-sm border-2 border-gray-100"><span class="font-light text-sm">Teste</span></li>
                        </ul>
                    </nav>
                </div>
                <div class="w-64 h-auto flex flex-col gap-3">
                    <h2 class="text-xl font-medium capitalize">Corpo:</h2>
                    <div class="flex flex-col  flex-wrap w-64 gap-3">
                        <div class="flex justify-between items-center  p-3 rounded-md bg-gray text-black">
                            <h2>Casal</h2>
                            <span>Não</span>
                        </div>
                        <div class="flex justify-between items-center  p-3 rounded-md bg-gray text-black">
                            <h2>Casal</h2>
                            <span>Não</span>
                        </div>
                        <div class="flex justify-between items-center  p-3 rounded-md bg-gray text-black">
                            <h2>Casal</h2>
                            <span>Não</span>
                        </div>
                        <div class="flex justify-between items-center  p-3 rounded-md bg-gray text-black">
                            <h2>Casal</h2>
                            <span>Não</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-5 p-5 justify-center items-center w-full h-auto sticky bottom-0 border-t-2 bg-black">
            <div class="flex flex-col items-center gap-3">
                <h2 class="text-2xl text-white font-medium capitalize">Segue Lá</h2>
                <ul class="flex items-center gap-3 text-white text-xl">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                </ul>
            </div>
            <div class="flex items-center gap-5">
                <span class="pr-5 pl-5 pt-1.5 pb-1.5 rounded-sm text-white font-semibold bg-red-600 border-2 border-red-600">R$ 234/H</span>
                <a class="pr-5 pl-5 pt-1.5 pb-1.5 rounded-sm text-black font-semibold bg-white border-2 border-white" href="#" target="_blank"><i class="fa-brands fa-whatsapp pr-2"></i>Conversar</a>
            </div>
        </div>
    </section>
    </main>

@endsection