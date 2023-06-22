<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nombre del usuario');
            $table->string('email')->unique()->comment('Correo electrónico del usuario');
            $table->string('document')->unique()->comment('Documento del usuario');
            $table->unsignedBigInteger('tipodocu_id')->comment('ID del tipo de documento');
            $table->unsignedBigInteger('departam_id')->comment('ID del departamento');
            $table->unsignedBigInteger('municipi_id')->comment('ID del municipio');
            $table->unsignedBigInteger('estado_id')->comment('estado del registro');
            $table->unsignedBigInteger('user_edita_id')->comment('usuario que crea el registro')->default(1);
            $table->unsignedBigInteger('user_crea_id')->comment('usuario que edita el registro')->default(1);
         
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            // Comentarios de las relaciones con otras tablas
            $table->foreign('tipodocu_id')->references('id')->on('tipodocus')->comment('Relación con la tabla "tipodocus"');
            $table->foreign('departam_id')->references('id')->on('departams')->comment('Relación con la tabla "departams"');
            $table->foreign('municipi_id')->references('id')->on('municipis')->comment('Relación con la tabla "municipis"');
            $table->foreign('estado_id')->references('id')->on('estados')->comment('Relación con la tabla "estados"');
        });

        // Comentario de la tabla "users"
        DB::statement('ALTER TABLE users COMMENT = "Tabla para almacenar información de los usuarios"');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
