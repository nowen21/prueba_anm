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
        Schema::create('h_users', function (Blueprint $table) {
            $table->id(); // Columna de ID autoincremental
            $table->integer('id_old');
            $table->string('name')->comment('Nombre del usuario');
            $table->string('email')->comment('Correo electrónico del usuario');
            $table->string('document')->comment('Documento del usuario');
            $table->unsignedBigInteger('tipodocu_id')->comment('ID del tipo de documento');
            $table->unsignedBigInteger('departam_id')->comment('ID del departamento');
            $table->unsignedBigInteger('municipi_id')->comment('ID del municipio');
            $table->unsignedBigInteger('estado_id')->comment('estado del registro');
            $table->unsignedBigInteger('user_edita_id')->comment('usuario que crea el registro');
            $table->unsignedBigInteger('user_crea_id')->comment('usuario que edita el registro');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('metodoxx');
            
            $table->string('rutaxxxx');
            $table->string('ipxxxxxx');



            // Comentarios de las relaciones con otras tablas
            $table->foreign('tipodocu_id')->references('id')->on('tipodocus')->comment('Relación con la tabla "tipodocus"');
            $table->foreign('departam_id')->references('id')->on('departams')->comment('Relación con la tabla "departams"');
            $table->foreign('municipi_id')->references('id')->on('municipis')->comment('Relación con la tabla "municipis"');
            $table->foreign('estado_id')->references('id')->on('estados')->comment('Relación con la tabla "estados"');
            $table->foreign('user_edita_id')->references('id')->on('users')->comment('Relación con la tabla "estados"');
            $table->foreign('user_crea_id')->references('id')->on('users')->comment('Relación con la tabla "estados"');
     
            $table->timestamps(); // Columnas para la fecha de creación y actualización
        });

        // Agregar comentario a la tabla utilizando DB::comment
        DB::statement('ALTER TABLE h_users COMMENT = "Tabla para almacenar el historial de los usuarios"');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('h_users');
    }
};
