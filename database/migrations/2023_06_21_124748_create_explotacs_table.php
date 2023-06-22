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
        Schema::create('explotacs', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->integer('descuento')->nullable()->comment('guardar el valor de descuento de la cantidad');
            $table->unsignedBigInteger('tipomine_id')->comment('ID del tipo de mineral');
            $table->unsignedBigInteger('estado_id')->comment('ID del estado');
            $table->unsignedBigInteger('user_id')->comment('ID del user');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->comment('Relación con la tabla "users"');
           
            $table->foreign('estado_id')->references('id')->on('estados')->comment('Relación con la tabla "estados"');
            $table->foreign('tipomine_id')->references('id')->on('tipomines')->comment('Relación con la tabla "tipomines"');
      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('explotacs');
    }
};
