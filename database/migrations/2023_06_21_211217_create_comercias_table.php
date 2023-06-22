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
        Schema::create('comercias', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->unsignedBigInteger('tipomine_id')->comment('ID del tipo de mineral');
            $table->unsignedBigInteger('estado_id')->comment('ID del estado');
            $table->unsignedBigInteger('tipoapro_id')->comment('ID del tipo de aprobacion');
            $table->unsignedBigInteger('user_id')->comment('ID del user');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->comment('Relación con la tabla "users"');
            $table->foreign('estado_id')->references('id')->on('estados')->comment('Relación con la tabla "estados"');
            $table->foreign('tipoapro_id')->references('id')->on('estados')->comment('Relación con la tabla "estados"');
            $table->foreign('tipomine_id')->references('id')->on('tipomines')->comment('Relación con la tabla "tipomines"');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comercias');
    }
};
