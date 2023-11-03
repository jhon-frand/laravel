@extends('layouts.app')

@section('titulo')
CREAR PUBLICACIÓN
@endsection

@section('contenido')
<div class="md:flex md:justify-center">
    <div class="md:w-6/12 px-10">
        <form action="" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center itemns-center" >

        </form>
    </div>
         <div class="md:w-6/12 mr-10 flex justify-center items-center">
         IMagen Aquí
         </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('register')}}" method="post" novalidate>
                @csrf
                <div>
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" placeholder="Nombre" class="border p-3 w-full rounded-lg
                    @error('name') border-red-500 @enderror " value="{{ old('name')}}">
                    @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                <label for="titulo">Título</label>
                    <input type="text" id="titulo" name="titulo" placeholder="titulo" class="border p-3 w-full rounded-lg
                    @error('titulo') border-red-500 @enderror " value="{{ old('titulo')}}">
                    @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                <label for="descripcion">descripción</label>
                    <input type="text" id="descripcion" name="descripcion" placeholder="descripcion" class="border p-3 w-full rounded-lg
                    @error('descripcion') border-red-500 @enderror " value="{{ old('descripcion')}}">
                    @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="Publicar" class="bg-red-500 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 rounded-lg">
            </form>
        </div>
    </div>
@endsection
