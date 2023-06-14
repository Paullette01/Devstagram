<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //Constructor de la sesion
    public function __construct()
    {
        //Proteger el constructor con autenticacion, es decir antes de ejecutar el metodo index debemos pasar el parametro de autenticacion
        $this->middleware('auth');
    }

    public function index()
    {
        //Aplicamos un helper para revisar que el usuario esta autenciado
        //dd(auth()->user());
        $servicios = DB::table('services')->where('user_id',auth()->user()->id)->get();
        return view('dashboard')->with('servicios',$servicios);
    }

    //Crear metodo create para mostrar el formulario de carga de post de publicacion
    public function create()
    {
        return view('posts.create');
    }
}
