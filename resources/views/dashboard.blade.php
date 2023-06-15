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
    <table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>User ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->titulo }}</td>
                <td>{{ $post->descripcion }}</td>
                <td><img style="max-width:100px;"src="{{ asset('uploads/' . $post->imagen) }}" alt="Imagen"></td>
                <td>{{ $post->user_id }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection