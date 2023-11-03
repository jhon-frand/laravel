@extends('layouts.app')

@section('titulo')
REGISTRARSE
@endsection

@section('contenido')
<div class="md:flex md:justify-center">
        <div class="md:w-6/12 mr-10 flex justify-center items-center">
            <img src="{{ asset('img/agrovida.jpg') }}" alt="Imagen de registro" class="w-300">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="" method="post">
                @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                <input type="text" id="name" name="name" placeholder="Nombre" class="border p-3 w-full rounded-lg">
                @error('name')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">Error!! Must input your name</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">UserName</label>
                <input type="text" id="username" name="username" placeholder="UserName" class="border p-3 w-full rounded-lg">
                @error('username')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">Error!! Must input your username</p>
                @enderror
            </div>
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
                <label for="passwordconfirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir Password</label>
                <input type="text" id="passwordconfirmation" name="passwordconfirmation" placeholder="Password-confirmation" class="border p-3 w-full rounded-lg">
                @error('passwordconfirmation')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center ">Error!! Must input your password</p>
                @enderror
            </div>
            <input type="submit" value="Crear Cuenta" class="bg-green-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
        </div>
    </div>
@endsection
