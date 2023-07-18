<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploDosController extends Controller
{
    public function index() {
        $posts = [
            ['title' => 'uno'],
            ['title' => 'dos'],
            ['title' => 'tres'],
            ['title' => 'cuatro'],
        ];

        return view('blog', ['posts' => $posts]);
    }
}
