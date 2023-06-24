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
        <section>
            <div class="w-full m-auto columns-1 gap-3 2xl:columns-6 p-3 xl:columns-5 md:columns-4 sm:columns-3 ">
                @foreach($profile as $items)
                    <img class="max-w-full rounded-xl" src="/img/profileImg/{{$items->imageProfile}}" alt="">
                </div>
                @endforeach
            </div>
        </section>
    </main>

@endsection
