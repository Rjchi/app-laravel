<?php

namespace App\Http\Controllers;

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
        $posts = DB::table('posts')->get();

        return view('blog', ['posts' => $posts]);
    }
}
