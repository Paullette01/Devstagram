<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Post;


class PostController extends Controller
{
    //Constructor de la sesion
    public function __construct()
    {
        //Proteger el constructor con autenticacion, es decir antes de ejecutar el metodo index debemos pasar el parametro de autenticacion
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //Aplicamos un helper para revisar que el usuario esta autenciado
        //dd(auth()->user());

        $user = $request->user();

        $posts = $user->posts;
    
        return view('dashboard', compact('posts'));
    }

    public function create()
    {
        //Aplicamos un helper para revisar que el usuario esta autenciado
        //dd(auth()->user());
        return view('posts.create');
    }
    
    public function store(Request $request){
        $this->validate($request, [
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);
        
         // Crear una instancia del modelo Post
        $post = new Post();

        // Asignar los valores a las propiedades del modelo
        $post->titulo = $request->titulo;
        $post->descripcion = $request->descripcion;
        $post->imagen = $request->imagen;
        $post->user_id = auth()->user()->id; // Asignar el ID del usuario actual, si corresponde

        // Guardar el modelo en la base de datos
        $post->save();
        

        return redirect()->route('post.index', auth()->user()->username);
    }
}