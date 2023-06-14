<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ImagenController extends Controller
{
    //Metodo para almacenar IMAGES
    public function store(Request $request){
        //Identificar el archivo que se sube en dropzone
        $imagen = $request->file('file');
        //
        //return response()->json();
        //Generar un ID unico para cada imagen para cargarse al server
        $nombreImagen =Str::uuid().".".$imagen->extension();
        //Utilizaoms intervetion Image para cargarse al server
        $imagenServidor = Image::make($imagen);
        //Agregamos efectos a la imagen
        $imagenServidor->fit(1000,1000);
        //Movemos la imagen de memoria(contenedor Dropzone) a una ubicacion fisica del server
        $imagenPath = public_path('uploads') . "/".$nombreImagen;
        $imagenServidor->save($imagenPath);
        //Verificar que el npmbre de archivo sea unico
        return response()->json(['imagen'=>$nombreImagen])
    }
}
