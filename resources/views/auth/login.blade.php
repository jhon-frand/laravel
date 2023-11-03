@extends('layouts.app')

@section('titulo')
INICIAR SESIÓN
@endsection

@section('contenido')
<div class="md:flex md:justify-center items-center">
        <div class="md:w-6/12 mr-10 flex justify-center items-center">
            <img src="{{ asset('img/agrovida.jpg') }}" alt="Imagen de registro" class="w-300">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl h-full">
            <form action="{{ route ('login')}}" method="post" novalidate>
                @csrf
                @if (session('mensaje'))
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje')}}</p>
                @endif
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                <input type="text" id="email" name="email" placeholder="Email" class="border p-3 w-full rounded-lg">
                @error('email')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">Error!! Must input your email</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                <input type="text" id="password" name="password" placeholder="Password" class="border p-3 w-full rounded-lg">
                @error('password')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">Error!! Must input your password</p>
                @enderror
            </div>
            <div class="mb-5">
                <input type="checkbox" name="remember">
                <label for="remember" class="text-gray-500 text-sm">Mantener sesión abierta</label>
            </div>
            <input type="submit" value="Iniciar Sesión" class="bg-green-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
        </div>
    </div>
@endsection
