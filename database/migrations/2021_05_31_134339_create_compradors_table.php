<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compradores_pagopar', function (Blueprint $table) {
            $table->id();
            $table->string("email");
            $table->string("telefono");
            $table->string("ciudad");
            $table->string("ruc");
            $table->string("razon_social");
            $table->string("nombre");
            $table->string("documento");
            $table->string("tipo_documento");
            $table->string("direccion")->nullable(true)->default("");
            $table->string("direccion_referencia")->nullable(true)->default("");
            $table->poin("coordenadas")->nullable(true)->default([0,0]);
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
        Schema::dropIfExists('compradores_pagopar');
    }
}
