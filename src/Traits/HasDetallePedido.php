<?php
namespace Ascurrajdev\Pagopar\Traits;

use Ascurrajdev\Pagopar\Models\DetallePedido;

trait HasDetallePedido{

    public function detallePedido(){
        $this->morphMany(DetallePedido::class,'producto');
    }
}