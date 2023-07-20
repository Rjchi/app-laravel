<?php

namespace App\Http\Controllers;

// Siempre debemos importar el modelo que vamos a utilizar:
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {

        /**
         * Para escribir SQL directamente utilizamos el metodo: raw en vez de table
         */

        /**
         * Esto nos devuelve al recorrerlo un objeto
         */
        // $posts = DB::table('posts')->get();

        /**
         * Uso de eloquent el ORM (utilizando un modelo):
         */

        $posts = Post::get();


        return view('posts/index', ['posts' => $posts]);
    }

    // Podemos especificar que la variable postId es de tipo Post asi:
    // Con esto nos ahorramos el Post::find($postId)
    public function show(Post $postId)
    {
        $post = $postId;

        return view('posts/show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts/create');
    }

    // Este seria el create
    public function store(Request $request)
    {
        // Validamos los datos del formulario
        $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ], [
            'title.required' => 'El campo :attribute es requerido.'
        ]);
        $post = new Post;

        // Con request() obtenemos todos los datos que fueron mandados del formulario o lo podemos

        // obtener directamente desde los parametros esta es la forma recomendada
        // return $request;

        // Si queremos acceder al valor de un campo en especifico podemos hacerlo asi:
        // return $request->input('title');

        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();

        // Mensajes de sesion:
        session()->flash('status', 'Post created!');

        // Redirigimos (la forma recendada de redirigir es la segunda)
        // return redirect() -> route('posts/index');
        return to_route('posts/index');
    }

    public function edit(Post $postId)
    {
        $post = $postId;

        return view('posts/edit', ['post' => $post]);
    }

    // Este tambien seria el edit
    public function update(Request $request, Post $postId)
    {
        // Validamos los datos del formulario
        $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ], [
            'title.required' => 'El campo :attribute es requerido.'
        ]);

        // Con request() obtenemos todos los datos que fueron mandados del formulario o lo podemos

        // obtener directamente desde los parametros esta es la forma recomendada
        // return $request;

        // Si queremos acceder al valor de un campo en especifico podemos hacerlo asi:
        // return $request->input('title');

        $postId->title = $request->input('title');
        $postId->body = $request->input('body');

        $postId->save();

        // Mensajes de sesion:
        session()->flash('status', 'Post updated!');

        // Redirigimos (la forma recendada de redirigir es la segunda)
        // return redirect() -> route('posts/index');
        return to_route('posts/show', $postId);
    }
}


/**
 * Para obtener todos los datos de un modelo:
 * Modelo::get()
 *
 * Para filtrar una fila utilizamos:
 * Modelo::find(id)
 *
 * En caso de que busquemos y no encontremos un dato utilizamos:
 * Modelo::findOrFail()
 * si existe lo muestra y si no nos da un 404
 *
 * Para cambiar y guardar el cambio de algun campo en especifico utilizamos:
 * $variable -> campo = "Nuevo valor"
 * Modelo->save()
 *
 * Para crear un nuevo Post utilizamos:
 * $variableNueva = new Modelo
 * $variableNueva -> propiedadModelo = "Nuevo valor"
 * asi con todas las propiedades
 * $variableNueva->save()
 *
 * Para eliminar utilizamos:
 * $variableNueva::find(id)
 * $variableNueva->delete()
 */
