<?php
namespace Ascurrajdev\Pagopar\Facades;

use Illuminate\Support\Facades\Facade;

class PagoparOrden extends Facade{

    protected static function getFacadeAccessor(){
        return "pagopar-orden";
    }
}