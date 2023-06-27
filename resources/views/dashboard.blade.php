@extends('layouts.main')

@section('title', 'Painel')

@section('content')
    @if($ids == null)
        <h1>O usuario logado não tem um perfil criado </h1>
        <a href="/events/create">Criar Perfil</a>
    @else
        @foreach($ids as $event)
            <h1>{{ $event->id }}</h1>
            @if($user_id == $event->id)
            <h1>O usuario logado tem um perfil criado</h1>
            @else
            <h1>O usuario logado não tem um perfil criado </h1>
            <a href="/events/create">Criar Perfil</a>
            @endif

            <form action="/events/{{$event->id}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir Perfil</button>
            </form>

        @endforeach
    @endif

    

@endsection
