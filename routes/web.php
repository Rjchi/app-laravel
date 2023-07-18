<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
Route::get('/blog', [PostController::class, 'index'])->name('blog');

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
