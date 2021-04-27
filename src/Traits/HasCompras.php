<?php
namespace Ascurrajdev\Pagopar\Traits;

use Ascurrajdev\Pagopar\Models\Comprador;

trait HasCompras{
    public function compras(){
        $this->morphMany(Comprador::class,'user');
    }
}