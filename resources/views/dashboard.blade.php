@extends('layouts.app')
@section('titulo')
    Dashboard de Servicios
@endsection
@section('contenido')

    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <img src="{{asset('Imagenes/Materiales DevStagram-UPV/Materiales DevStagram-UPV/usuario.svg')}}" alt="Imagen de usuario">
            </div>
                <div class="md:w-8/12 lg:w-6/12 px-5">
                    <p class="text-gray-700 text-2xl">
                        {{auth()->user()->username}}
                    </p>
                    <!-- Añadir mas contenido-->
                    <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                        0
                        <spam class="font-normal">Seguidores</spam>
                    </p>
                    <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                        0
                        <spam class="font-normal">Siguiendo</spam>
                    </p>
                    <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                        0
                        <spam class="font-normal">Post</spam>
                    </p>
                </div>
        </div>
        
    </div>
    <div class = "w-full pb-16 flex flex-wrap  mt-6">
        @foreach ($posts as $post)
         <img class= "rounded ml-10 mt-10" style="min-width:300px; max-width: 300px; "src="{{ asset('uploads/' . $post->imagen) }}" alt="Imagen">
        @endforeach
        
    </div>
@endsection