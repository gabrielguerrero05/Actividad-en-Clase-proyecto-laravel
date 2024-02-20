<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email', 191); // Ajusta la longitud según tus necesidades
            $table->string('token');
            $table->timestamp('created_at')->nullable();

            // Definir la clave primaria con la longitud especificada
            $table->primary(['email'], 'password_reset_tokens_primary');

            // Otra opción: definir la clave primaria sin nombre específico
            // $table->primary(['email']);

            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

};
