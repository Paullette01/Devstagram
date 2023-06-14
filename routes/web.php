<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterService;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostImagenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Ruta para pagina principal
Route::get('/', function () {
    return view('principal');
});

//Crear ruta para alumnos
Route::view('/alumnos','alumnos');

Route::view('/curriculum','curriculum');

//Ruta para registro de usuario
Route::get('/register',[RegisterController::class,'index'])->name("register");
//Ruta para enviar datos al servidor
Route::post('/register',[RegisterController::class,'store']);

//Ruta para vista del muro de perfil de usuario autentucado
Route::get('/muro',[PostController::class,'index'])->name('post.index');

//Ruta para el login
Route::get('/login',[LoginController::class,'index'])->name('login');

//Ruta para la validacion del login
Route::post('/login',[LoginController::class, 'store']);

//Ruta para logout
Route::get('/logout',[LogoutController::class,'store'])->name('logout');

//Ruta para registro de servicios
Route::get('/services',[RegisterService::class,'index'])->name("registerS");
Route::post('/services',[RegisterService::class,'store'])->name("serviceR");

//Rutaa para el formulario de post de publicacion
Route::get('/post/create',[PostController::class,'create'])->name('post.create');

//Ruta para cargar Imagen
Route::post('/imagenes',[ImagenController::class,'store'])->name('images.store');

//Ruta para hacer el post de la imagen
Route::get('/postIm',[PostImagenController::class,'index'])->name("postIm");