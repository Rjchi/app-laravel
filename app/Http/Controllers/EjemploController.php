<?php
// La logica tambien puede ir en el archivo web.php pero generalmente
// debemos utilizar controladores invocables

namespace App\Http\Controllers;

class EjemploController {
    // Con esto hacemos que el metodo pueda ser invocable
    // public function __invoke()
    public function index()
    {
        $posts = [
            ['title' => 'uno'],
            ['title' => 'dos'],
            ['title' => 'tres'],
            ['title' => 'cuatro'],
        ];

        // Nombre de la vista:
        // return view('blog', ['posts' => $posts]);
    }
}


// Para crear un controlador invocable utilizamos:
// php artisan make:controller NombreController -i

// Para crear un controlador con los 7 metodos rest utilizamos:
// php artisan make:controller NombreController -r

// Para crear un controlador con 5 metodos rest utilizamos:
// php artisan make:controller NombreController --api

// Para crear un controlador vacio utilizamos:
// php artisan make:controller NombreController
?>

