@extends('layouts.main')
@section('title','ABRIME - Início')

@section('content')

    <main class="font-inter">
        <section>
            <div class="h-96 bg-blue-500 flex justify-center items-center">
                <div class="">
                    <h2 class="font-semibold text-3xl pb-2">Busque</h2>
                    <input class="outline-none rounded-sm p-2.5" type="search" name="" id="">
                </div>
            </div>
        </section>
        <section>
            <div class="container-card">
                <div class="box-card
                box-card-sm
                box-card-md
                box-card-lg
                box-card-xl
                box-card-2xl">
                    @foreach($profile as $items)
                    <div class="card
                    card-sm 
                    card-md 
                    card-lg 
                    card-2xl">
                        <h2 class="text-white">{{$items->title}}</h2>
                        <a href="/events/{{$items->id}}">Acessar</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

@endsection
