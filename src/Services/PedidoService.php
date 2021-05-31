<?php
namespace Ascurrajdev\Pagopar\Services;

use Ascurrajdev\Pagopar\Repositories\Pedido\PedidoRepository;

class PedidoService{

    private $pedidoRepository;
    public function __construct(){
        $this->pedidoRepository = resolve(PedidoRepository::class);
    }
}