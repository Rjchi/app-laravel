<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EjemploModelo extends Model
{
    // Para revisar las funcionalidades basicas de los modelos del ORM utilizamos:
    // php artisan tinker
    // el cual nos permitira utilizar sintaxis php podemos escribir sentencias del ORM
    // y ver el resultado ej: Post::get()

    // En caso de que queramos utilizar un nombre distinto al plural del modelo
    // podemos sobreescribir la propiedad table asi:

    // protected $table = 'articles';

    // Ese ve a ser el nombre de la tabla al que el ORM intentara conectarse.

    use HasFactory;
}

/**
 * Debemos utilizar pascalCase para crear modelos asi:
 *
 * Para  crear un modelo debemos ejecutar
 * php artisan make:model NombreDelModeloSingular
 *
 * Siempre que creemos un modelo va a necesitar una migracion
 * un atajo para crear el modelo y la migracion mas rapidamente es este:
 * php artisan make:model NombreModelo -m
 *
 */
