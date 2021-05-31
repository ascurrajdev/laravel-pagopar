<?php
namespace Ascurrajdev\Pagopar\Providers;

use Illuminate\Support\ServiceProvider;
use Ascurrajdev\Pagopar\Classes\PagoparOrden;
use Ascurrajdev\Pagopar\Repositories\Pedido\{PedidoRepository,PedidoRepositoryImp};

class AppServiceProvider extends ServiceProvider{

    public function register(){
        $this->app->bind('pagopar-orden',function($app){
            return new PagoparOrden();
        });
        $this->app->bind(
            PedidoRepository::class,
            PedidoRepositoryImp::class
        );
        $this->mergeConfigFrom(__DIR__.'/../../config/config.php','pagoparConfig');
    }

    public function handle(){
        if($this->app->runningInConsole()){
            $this->publishes([
                __DIR__.'/../../config/config.php' => config_path('pagopar.php')
            ],'laravel-pagopar-config');
        }
    }
}