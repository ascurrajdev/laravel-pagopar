<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos_pagopar', function (Blueprint $table) {
            $table->id();
            $table->string("token")->comment("El token publico de tu cuenta de pagopar");
            $table->string("public_token")->comment("Token generado para la orden (token_privado + id_pedido + monto_total_pedido)");
            $table->double("monto_total")->comment("El monto total del pedido");
            $table->string("tipo_pedido")->comment("Tipo de venta. Ej: VENTA-COMERCIO, VENTA-ENTRADAS, etc...");
            $table->foreignId("comprador_id")->comment("El comprador de los articulos");
            $table->string("descripcion_resumen")->nullable(true)->comment("La descripcion de la venta");
            $table->timestamp("fecha_maxima_pago")->comment("La fecha maxima del pago");
            $table->enum("estado",["pendiente","pagado","cancelado"])->comment("El estado del pedido");
            $table->morphs("cliente");
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
        Schema::dropIfExists('pedidos_pagopar');
    }
}
