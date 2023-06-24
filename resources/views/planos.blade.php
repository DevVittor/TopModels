@extends('layouts.main')
@section('title','ABRIME - Planos')

@section('content')
    
    <main>
        <section>
            <div class="flex justify-center items-center flex-col w-full gap-10 h-alturamax">
                <div class="">
                    <h2 class="text-white font-semibold text-4xl">Escolha um Plano</h2>
                </div>
                <div class="flex itesm-center justify-center flex-wrap gap-5 p-5">
                    <div class="bg-white border-4 border-blue-500 h-96 w-64 rounded-lg hover:cursor-pointer"></div>
                    <div class="bg-white border-4 border-rosa h-96 w-64 rounded-lg hover:cursor-pointer"></div>
                    <div class="bg-white border-4 border-yellow-300 h-96 w-64 rounded-lg hover:cursor-pointer"></div>
                </div>
                <div class="">
                    <a class="text-white font-light hover:font-medium hover:underline text-base" href="/acompanhantes">Continue sem plano</a>
                </div>
            </div>
        </section>
    </main>

@endsection