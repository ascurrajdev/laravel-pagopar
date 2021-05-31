<?php
namespace Ascurrajdev\Pagopar\Classes;

use Ascurrajdev\Pagopar\Entity\Pedido;
use Ascurrajdev\Pagopar\Services\PedidoService;

class PagoparOrden{

    private $pedidoService;

    public function __construct(){
        $this->pedidoService = resolve(PedidoService::class);
    }

    public function create(Pedido $pedido){
        
    }
}