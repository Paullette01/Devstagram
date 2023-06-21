@extends('layouts.app')

@section('titulo')
    Tu cuenta de Devstagram UPV
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-12 md:flex">
            <div class="md:w8/12 lg:w-6/12 px-5">
                <img src="{{asset('img/usuario.svg')}}" alt="Imagen de usuario"/>
            </div>
            <div class="md:w8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-10 md:py-10">
                
                
                <p class="text-gray-700 text-2xl">{{auth()->user()->username}}</p>
                
                <!--Agregando estructura base para dahasboard de publicaciones-->
                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    0
                    <spam class="font-normal">Seguidores</spam>
                </p>

                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <spam class="font-normal">Siguiendo</spam>
                </p>

                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <spam class="font-normal">Post</spam>
                </p>


            </div>
        </div>
    </div>
        <div class="flex flex-wrap mt-10 pb-10 ">
            @foreach ($posts as $post)
            {{-- ENVIAR EL ID DE LA PUBLICACION A LA RUTA POST DETAILS --}}
            {{-- ESTO SIRVE PARA SABER QUE PUBLICACION MOSTRAR --}}
                <a href="{{ route('postDetails.index', ['id' => $post->id]) }}"><img style="width: 20vw;" class="ml-10 rounded mt-5" src="{{ asset('uploads/' . $post->imagen) }}" alt="Imagen del post"> </a>
            @endforeach
        </div>

    <div class="flex items-center justify-center w-full text-white font-bold text-lg">
        <a class ="pr-2 pl-2 rounded bg-gray-800 cursor-pointer" href="{{route('post.index', ['accion' => 'retroceder','numeroPagina'=>$numeroPagina])}}">&#8592;</a>
        <p class="ml-5 text-gray-800">{{$numeroPagina}} </p>
        <a class ="pr-2 pl-2 ml-5 rounded bg-gray-800 cursor-pointer" href="{{route('post.index',['accion' => 'avanzar','numeroPagina'=>$numeroPagina])}}">&#8594;</a>
    </div>

@endsection