@extends('layouts.main')
@section('title','ABRIME - Início')

@section('content')


    <main>
        <section>
            <div class="flex min-h-full h-auto items-center p-10 justify-center ">
                <div class="grid  gap-2.5  grid-cols-7 bg-blue-500 ">
                    @foreach($profile as $items)
                    <div class="h-96 w-64 bg-black">
                        <h2 class="text-white">{{$items->title}}</h2>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>


@endsection
