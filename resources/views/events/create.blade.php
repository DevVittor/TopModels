@extends('layouts.main')

@section('title','Criar Perfil');

@section('content')

    <div class="">
        <h1>Crie seu Perfil</h1>
        <form action="/events" method="post">
            @csrf
            <input type="text" name="title" id="" placeholder="title">
            <input type="text" name="description" id="" placeholder="description">
            <input type="text" name="city" id="" placeholder="city">
            <select name="tatuagem" id="">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
            <input type="submit" value="Publicar" >
        </form>
    </div>
    
@endsection