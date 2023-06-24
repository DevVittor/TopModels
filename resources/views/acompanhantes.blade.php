@extends('layouts.main')
@section('title','ABRIME - Acompanhantes')

@section('content')

    <main class="font-inter bg-fundoBlack">
        <section>
            <div class="h-96 bg-blue-500 flex justify-center items-center">
                <div class="">
                    <h2 class="font-semibold text-3xl pb-2">Busque</h2>
                    <form action="/acompanhantes" method="GET">
                        <input class="outline-none rounded-sm p-2.5" type="search" name="search" id="">
                    </form>
                </div>
            </div>
        </section>
        <section>
            <div class="flex items-center justify-between pt-5 pb-5 pr-10 pl-10">
                <div class="flex flex-col gap-2">
                    <h2 class="text-white text-2xl font-semibold">Buscando por: {{$search}}</h2>
                    <span class="text-white text-lg font-light">Resultados: {{count($profile)}}</span>
                </div>
                <div class="">
                    <h2 class="text-white font-bold text-xl"><i class="bi bi-filter pr-2"></i>Filtrar</h2>
                </div>
            </div>
        </section>
        <!--<section>
            <div class=" w-full p-3 columns-1 bg-red-500 space-y-3 mx-auto gap-3
            sm:columns-2
            md:columns-3
            lg:columns-4
            xl:columns-5
            2xl:columns-5">
                @foreach($profile as $items)
                    <div class="flex flex-col justify-end items-center">
                        <a class="rounded-lg cursor-pointer" href="/events/{{$items->id}}">
                            <img src="img/profileImg/{{$items->imageProfile}}" alt="">
                        </a>
                        <h2 class="absolute backdrop-blur-lg mb-2 w-auto text-center p-3 text-lg text-white font-semibold rounded-sm">{{$items->nome}}</h2>
                    </div>
                @endforeach
            </div>
        </section>-->
        <section>
            <div class="grid 2xl:grid-cols-7 xl:grid-cols-6 lg:grid-cols-5 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 p-3 gap-3">
                @foreach($profile as $items)    
                <a href="/events/{{$items->id}}">
                    <div class="flex flex-col justify-end items-center ">
                        <div class="">
                            <img class="h-96 w-64 object-cover " src="img/profileImg/{{$items->imageProfile}}" alt="">
                        </div>
                        <div class="p-3 backdrop-blur-xl text-center absolute">
                            <h2 class="text-white font-bold text-base">{{$items->nome}}</h2>
                            <span class="text-white font-light text-sm"><i class="bi bi-geo-alt-fill pr-2 text-red-600"></i>{{$items->Estado}}</span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </section>
    </main>

@endsection
