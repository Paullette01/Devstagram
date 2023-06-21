""extends('layouts.app')
@section ('titulo')
    {($post->titulo)}
@endsection

@section('contenido')

<div class = "container ex-autp md:flex">

    <img scr = "{(asset ('uploads'), '/'. $post->imagen)}" alt = "imagen de muestra"></img>

     <div class = "p-3">
        
    <p> 0 likes </p>

    </div>

</div>

<p class ="text-sm text-gray-500">

    {($post->created_at->diffForHumans())}

</p>

<p class  = "mt-5">
        
{($post->descripcion)}

</p>

    <textarea
    id = "comentario"
    name = "comentario"
    placeholder = "Agrgar un comentario"
    class = "border p-3 w-full rounded-lg"
        @error('comentario')
            border-red-500
        @enderror >
    </texttarea>

    @error('comentario')
    <div class = "bg-red-500 text-white my-2 rounded-sm p-2"> 

    {($post->created_at->diffForHumans())}     
    
    </div>