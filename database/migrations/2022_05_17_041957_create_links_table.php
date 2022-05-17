<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->enum('carrer', ['all', 'Tecnologías de la Información', 'Administración', 'Contabilidad', 'Finanzas', 'Gastronomía']);
            $table->enum('category', ['all', 'Nuevo Ingreso', 'Servicio Social', 'Practicas Profesionales', 'Titulación', 'Talleres']);
            $table->string('img')->nullable();
            $table->string('excerpt');
            $table->string('body', '255')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links');
    }
};
