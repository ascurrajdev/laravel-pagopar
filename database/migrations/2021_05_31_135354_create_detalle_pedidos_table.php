<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",100)->comment("El nombre de tu producto");
            $table->string("descripcion",100)->comment("La descripcion del producto a vender");
            $table->double("precio_total",15)->comment("Aqui debe ir el precio total del producto (precio_unitario_producto * cantidad)");
            $table->string("ciudad",30)->comment("Aqui debe ir la ciudad donde pertenece el vendedor");
            $table->string("public_key")->comment("Aqui debe ir la misma clave que se crea para la orden");
            $table->double("cantidad",8,2)->comment("Aqui va a ir la cantidad de este producto");
            $table->string("url_imagen")->nullable(true)->comment("Las imagenes del producto");
            $table->foreignId("producto_id")->nullable(true)->comment("El id del producto");
            $table->string("vendedor_telefono",20)->nullable(true)->comment("El telefono del vendedor");
            $table->foreignId("categoria")->comment("Aqui va a ir la categoria del producto que tengas registrado en tu base de datos");
            $table->string("vendedor_direccion",100)->nullable(true)->comment("La direccion del vendedor");
            $table->string("vendedor_direccion_referencia",100)->nullable(true)->comment("Las referencias para llegar a dicha direccion");
            $table->point("vendedor_direccion_coordenadas")->nullable(true)->comment("Las coordenadas de la ubicacion del local");
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
        Schema::dropIfExists('detalle_pedidos');
    }
}
