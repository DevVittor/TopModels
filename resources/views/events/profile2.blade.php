@extends('layouts.main')
@foreach($dados as $nameProfile)
@section('title',$nameProfile->nome)
@endforeach

@section('content')
    
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
                    @foreach($dados as $imagem)
                    <img class="h-full w-full object-cover rounded-md shadow-lg" src="/img/profileImg/{{$imagem->imageProfile}}" alt="">
                    @endforeach
                </div>
                <div class="absolute h-96 w-64 flex justify-end items-end p-3 z-10">
                    <div class="bg-white flex justify-center items-center rounded-full h-5 w-5">
                        <i class="fa-solid text-2xl fa-circle-check text-blue-500"></i>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                        @foreach($dados as $nome)
                        <h2 class="text-xl font-medium capitalize">{{$nome->nome}},</h2>
                        @endforeach
                        <span class="text-lg font-light capitalize">25</span>
                    </div>
                    <div class="">
                        <span class="text-sm font-light"><i class="fa-solid fa-location-dot text-red-600 pr-2"></i>Rio de Janeiro,Rj</span>
                    </div>
                </div>
                <div class="w-64 ">
                    @foreach($dados as $desc)
                    <p class="text-black font-light text-sm">{{$desc->description}}</p>
                    @endforeach
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