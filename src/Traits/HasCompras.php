<?php
namespace Ascurrajdev\Pagopar\Traits;

use Ascurrajdev\Pagopar\Models\Pedido;

trait HasCompras{
    public function compras(){
        $this->morphMany(Pedido::class,'cliente');
    }
}