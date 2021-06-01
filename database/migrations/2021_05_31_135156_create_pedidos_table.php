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
            $table->string("token");
            $table->string("public_token");
            $table->double("monto_total");
            $table->string("tipo_pedido");
            $table->foreignId("comprador_id");
            $table->string("descripcion_resumen");
            $table->timestamp("fecha_maxima_pago");
            $table->enum("estado",["pendiente","pagado","cancelado"]);
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
