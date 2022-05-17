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
            $table->text('body')->nullable();
            $table->timestamps();
        });
    }


    /*


        "default": "all",
        "options": {
            "all": "Todas",
            "Tecnologías de la Información": "Tecnologías de la Información",
            "Administración": "Administración",
            "Contabilidad": "Contabilidad",
            "Finanzas": "Finanzas",
            "Gastronomía": "Gastronomía"
        }


        "default": "all",
        "options": {
            "all": "Todas",
            "Nuevo Ingreso": "Nuevo Ingreso",
            "Administración": "Administración",
            "Servicio Social": "Servicio Social",
            "Practicas Profesionales": "Practicas Profesionales",
            "Titulación": "Gastronomía",
            "Talleres": "Talleres"
        }

    */


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
