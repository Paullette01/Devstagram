<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterService extends Controller
{
    //
    public function index ()
    {
        //Retorna la vista servicesS que se encuetra en la carpeta auth
        return view('auth.serviceS');
    }

    public function store(Request $request){
        
        $request->request->add(['nombre'=>Str::slug($request->nombre)]);

        //Validacion de los campos
        $this->validate($request,[
            'codigo' => 'required|unique:services|min:4|max:20',
            'nombre' => 'required|unique:services|min:10|max:20',
            'descCorta' => 'required|min:20|max:40',
            'descLarga' => 'required|min:40|max:80',
            'precioS' => 'required',
            'fechaIn' => 'required',
            'caractS' => 'required|min:10|max:50',
        ]);
        
        Service::create([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'descripcion_Corta' => $request->descCorta,
            'descripcion_Larga' => $request->descLarga,
            'precio_Servicio' => $request->precioS,
            'fecha_Ingreso' => $request->fechaIn,
            'caracteristica_Servicio' => $request->caractS,
            //Se utiliza el helper para obtener id del usuario
            'user_id'=>auth()->user()->id
        ]);
        //redireccionar
        return redirect()->route('post.index');
    }
}
