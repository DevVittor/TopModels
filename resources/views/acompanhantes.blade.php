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
            <div class="flex flex-col gap-2 p-5">
                <h2 class="text-white text-2xl font-semibold">Buscando por: {{$search}}</h2>
                <span class="text-white text-lg font-light">Resultados: {{count($profile)}}</span>
            </div>
        </section>
        <section>
            <div class=" w-full p-3 columns-1 space-y-3 mx-auto gap-3  
            sm:columns-2
            md:columns-3
            lg:columns-4
            2xl:columns-5">
                @foreach($profile as $items)
                    <div class="flex flex-col justify-end items-center rounded-lg">
                        <a class="rounded-lg cursor-pointer" href="/events/{{$items->id}}">
                            <img class="rounded-lg" src="img/profileImg/{{$items->imageProfile}}" alt="">
                        </a>
                        <h2 class="absolute backdrop-blur-lg mb-2 w-auto text-center p-3 text-lg text-white font-semibold rounded-sm">{{$items->nome}}</h2>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

@endsection
