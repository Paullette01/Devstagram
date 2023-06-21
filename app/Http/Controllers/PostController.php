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
        $numeroPagina = $request -> numeroPagina;

        $accion = $request -> accion;
    

        $user = auth()->user();

            if($numeroPagina == null){
                $numeroPagina = 1;
            }
            
            if($accion == null){
    
            }
                else{

                    if($accion == 'retroceder'){
                        $numeroPagina -=1;
                    }

                        else{
                            $numeroPagina+=1;
                        }
                }
            $inicio = ($numeroPagina-1)*7;
            $fin = $inicio+6;

            if($numeroPagina < 1){
                $numeroPagina = 1;
            }

            $post = Post::where('user_id', $user->id)
            ->offset($inicio)
            ->limit($fin - $inicio + 1)
            ->get();
        
        if($post->count() == 0){
            $numeroPagina -=1;
            $inicio = ($numeroPagina-1)*7;
            $fin = $inicio+6;
        } 

        return view('dashboard', ['posts' => $post, 'numeroPagina'=> $numeroPagina]);
    }

    public function create(){
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