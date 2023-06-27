@extends('layouts.main')

@section('title', 'Painel')

@section('content')
    
    @if(count($ids)>0)

        <h1>Você tem um perfil criado</h1>
        <a href="/events/edit/{{$user_id}}">Editar Perfil</a>
        <a href="/events/{{$user_id}}">Ver Perfil</a>
    @else

        <h1>Você não tem um perfil criado</h1>
        <a href="/events/create">Criar um perfil</a>

    @endif

@endsection
