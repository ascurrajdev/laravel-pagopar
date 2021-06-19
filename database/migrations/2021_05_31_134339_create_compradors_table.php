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
            $table->string("email")->comment("El correo del comprador");
            $table->string("telefono")->comment("El telefono del comprador");
            $table->string("ciudad")->comment("La ciudad del comprador");
            $table->string("ruc")->comment("El ruc del comprador");
            $table->string("razon_social")->comment("La razon social de la orden");
            $table->string("nombre")->comment("El nombre del comprador");
            $table->string("documento")->comment("El numero de documento ya sea nro de cedula, pasaporte, etc...");
            $table->string("tipo_documento")->comment("El tipo de documento ya sea Cedula, Pasaporte, etc...");
            $table->string("direccion")->nullable(true)->default("")->comment("La direccion del comprador");
            $table->string("direccion_referencia")->nullable(true)->default("")->comment("Referencias de la direccion del comprador");
            $table->point("coordenadas")->nullable(true)->default([0,0])->comment("La ubicacion de la direccion del comprador");
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
