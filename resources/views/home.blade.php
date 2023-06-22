@extends('layouts.main')
@section('title','ABRIME - Página Inicial')

@section('content')

    <main class="font-inter bg-fundoBlack">
        <section class="grid grid-cols-1 w-full">
            <div class="flex justify-center items-center w-full p-5">
                <div class="w-full bg-white h-64 rounded-br-3xl"></div>
            </div>
        </section>
        <section class="flex justify-center items-center gap-5 p-5">
            <div class="grid grid-cols-5 gap-3">
                <div class="bg-white h-20 w-20 rounded-lg"></div>
                <div class="bg-white h-20 w-20 rounded-lg"></div>
                <div class="bg-white h-20 w-20 rounded-lg"></div>
                <div class="bg-white h-20 w-20 rounded-lg"></div>
                <div class="bg-white h-20 w-20 rounded-lg"></div>
            </div>
        </section>
        <section class="grid grid-cols-1">
            <div class="h-auto w-full flex items-start p-5 gap-5">
                <div class="h-96 w-full bg-white rounded-lg"></div>
                <div class="flex flex-col gap-3 h-96 w-full ">
                    <div class="h-2/4 bg-white rounded-lg"></div>
                    <div class="h-2/4 bg-white rounded-lg"></div>
                </div>
            </div>
        </section>
        <section>
            <div class="flex justify-center items-center  w-full p-5">
                <div class="flex justify-center w-full h-96 gap-3 items-center flex-col">
                    <div class="h-2/4 w-full bg-white rounded-lg"></div>
                    <div class="h-2/4 w-full bg-white rounded-lg"></div>
                </div>
            </div>
        </section>
        <section class="grid grid-cols-1">
            <div class="h-auto w-full flex items-start p-5 gap-5">
                <div class="flex flex-col gap-3 h-96 w-full ">
                    <div class="h-2/4 bg-white rounded-lg"></div>
                    <div class="h-2/4 bg-white rounded-lg"></div>
                </div>
                <div class="h-96 w-full bg-white rounded-lg"></div>
            </div>
        </section>
        <section>
            <div class="flex justify-center items-center p-5 ">
                <div class="w-full bg-white h-48 rounded-lg"></div>
            </div>
        </section>
        <section>
            <div class="h-auto w-full flex justify-center p-5 gap-5">
                <div class=" h-96 w-full bg-white rounded-lg"></div>
                <div class="h-96 w-full bg-white rounded-lg"></div>
            </div>
        </section>
        <section class="p-5">
            <div class="bg-white rounded-lg h-32 w-full flex justify-center items-center">
                <div class="bg-blue-500 h-12 w-3/4"></div>
            </div>
        </section>
    </main>

@endsection
