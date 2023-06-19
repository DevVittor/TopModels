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
        <section></section>
        <section>
            <div class=" w-full bg-red-600 p-3 columns-1 space-y-3 mx-auto gap-3  
            sm:columns-2
            md:columns-3
            lg:columns-4
            2xl:columns-5">
                @foreach($profile as $items)
                    <div class="flex flex-col justify-end items-center rounded-lg">
                        <a class="rounded-lg cursor-pointer" href="/events/{{$items->id}}">
                            <img class="rounded-lg" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                        </a>
                        <h2 class="absolute backdrop-blur-lg mb-2 sm:w-52 md:w-48 w-4/5 text-center p-3 text-lg font-semibold rounded-sm">Larissa Gomes</h2>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

@endsection
