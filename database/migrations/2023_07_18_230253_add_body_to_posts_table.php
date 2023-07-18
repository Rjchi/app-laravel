<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Trabajamos con una tabla existente gracias a php artisan make:migration add_body_to_posts_table

    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // Agregamos una columna despues de la columna title:
            $table -> longText('body')->after('title');
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table -> dropColumn('body');
        });
    }

    // Al finalizar debemos ejecutar php artisan migrate
};
