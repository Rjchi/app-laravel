<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Esto hace parte de la asignacion masiva
     * solo toma los campos que le indicamos y ignora el resto
     */
    // protected $fillable = [
    //     'title', 'body'
    // ];
    /**
     * Con esto prevenimos la asignacion masiva y dejamos pasar todos los campos
     * a la base de datos incluyendo los que no estan en el fillable
     * Para utilizar nunca debemos pasar el metodo all() por el create ni el update()
     */
    protected $guarded = [];
}
