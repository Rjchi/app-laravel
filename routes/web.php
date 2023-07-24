<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/**
 * Para ver las rutas que tenemos en nuestra aplicacion utilizamos:
 * php artisan route:list
 *
 * Las rutas que reciben parametros variables deben ir al final de todas las demas rutas
 * para evitar que nos genere un 404
 */

/*

$posts = [
     ['title' => 'uno'],
     ['title' => 'dos'],
     ['title' => 'tres'],
     ['title' => 'cuatro'],
 ];

*/

Route::view('/', 'welcome')->name('home');
// El segundo parametro es un controlador de un solo metodo
// Route::get('/blog', PostController::class) -> name('blog');


// Para controladores de mas de un metodo esta es la sintaxis:
// 1ero el controlador 2do el metodo del controlador
Route::get('/blog', [PostController::class, 'index'])->name('posts/index');

// Create es para mostrar el formulario
Route::get('/blog/create-post', [PostController::class, 'create'])->name('posts/create');

// Store es para almacenar los datos del formulario
Route::post('/blog', [PostController::class, 'store'])->name('posts/store');

Route::patch('/blog/{postId}', [PostController::class, 'update'])->name('posts/update');
Route::delete('/blog/{postId}', [PostController::class, 'destroy'])->name('posts/destroy');

// Ruta login para probar la proteccion de las rutas:
// Route::get('/login', function () {
//     return 'Login page';
// })->name('login');

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

/**
 * Uso de parametros de rutas
 * el postId lo recibimos como parametro del metodo show
 * y uso del middleware para proteccion de rutas
 */
// Route::get('/blog/{postId}', [PostController::class, 'show'])->name('posts/show')->middleware('auth');
Route::get('/blog/{postId}', [PostController::class, 'show'])->name('posts/show');
Route::get('/blog/{postId}/edit', [PostController::class, 'edit'])->name('posts/edit');

// Para pasar datos a una vista podemos hacer uso del tercer parametro de view

// Route::view('/blog', 'blog', ['posts' => $posts]) -> name('blog');

// o

/*

 Route::get('/blog', function(){
     $posts = [
         ['title' => 'uno'],
         ['title' => 'dos'],
         ['title' => 'tres'],
         ['title' => 'cuatro'],
     ];
       // 1ero Nombre de la vista, 2do datos
     return view('blog', ['posts' => $posts]);
 }) -> name('blog');

 */

/**
 * verificar hasta que sea correctas las rutas con:
 *php artisan route:list --path=blog
 * PARA AHORRARNOS TODO LO ANTERIOR PODEMOS HACER ESTO:
 * Route::resource('blog', PostController::class, [
 *'names'=> 'posts',
 *'parameters'=> ['blog' => 'post']
 *]);
 * Esto responde a todas las rutas anteriormente creadas
 */
