@extends('layouts.app')

@section('titulo')
DASHBOARD
@endsection

@section('contenido')
<div class="flex justify-center items-center">
    <div class=" w-1/3 h-96 rounded-full justify-center items-center flex font-bold">
    <img src="{{ asset('img/usuario.svg') }}" alt="Imagen de usuario" class="w-64">
    </div>
    <div class="w-1/3 h-96">
       <p> {{ $user->username }}</p>
       <p class="text-lg font-bold ">
        10
        <span class="font-normal  text-gray-600 ">Seguidores</span>
       </p>
       <p class="text-lg font-bold ">
        23
        <span class="font-normal  text-gray-600 ">Siguiendo</span>
       </p>
       <p class="text-lg font-bold ">
        1
        <span class="font-normal  text-gray-600 ">Publicación</span>
       </p>
    </div>
</div>
@endsection
