<?php
namespace Ascurrajdev\Pagopar\Providers;

use Illuminate\Support\ServiceProvider;
use Ascurrajdev\Pagopar\Classes\PagoparOrden;

class AppServiceProvider extends ServiceProvider{

    public function register(){
        $this->app->bind('pagopar-orden',function($app){
            return new PagoparOrden();
        });
    }

    public function handle(){

    }
}