<?php

/**
 * Para ver el lote en el que nos encontramos debemos revisar la columna batch
 * de la tabla migrations de la base de datos:
 *
 * Para ejecutar el metodo UP en todas las migraciones debemos ingresar
 * php artisan migrate
 *
 * para ejecutar el metodo down en todas las migraciones del ultimo lote debemos ingresar
 * php artisan migrate:rollback
 *
 * para eliminar todas las tablas que se crearon y volver a ejecutar las migraciones desde cero
 * php artisan migrate:fresh
 * este comando elimina todos los datos que tenemos tambien
 *
 * para crear una migracion para una tabla en especifico(en este caso crear la tabla post)
 * php artisan make:migration create_posts_table
 */

 /**
  * Si queremos modificar la estructura de una tabla que ya tiene datos, debemos crear una nueva
  * migracion asi al crearce la migracion se va a trabajar con la tabla existente
  * pero si estamos en desarrollo basta con modificar la migracion y ejecutar el fresh
  * php artisan make:migration add_body_to_posts_table
  */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Clase anonima (No tiene nombre)
return new class extends Migration
{
    /**
     * Este es para crear o modificar
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Este es para Eliminar o deshacer
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
