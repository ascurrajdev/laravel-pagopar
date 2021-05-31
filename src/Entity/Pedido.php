<?php
namespace Ascurrajdev\Pagopar\Entity;

use Illuminate\Support\Collection;

class Pedido{

    private $tipoPedido;
    private $descripcion;
    private $comprador;
    private $detalle;

    public function __construct(Comprador $comprador,$detalle,string $tipoPedido = "Venta-Comercio",string $descripcion = ""){
        $this->tipoPedido = $tipoPedido;
        $this->descripcion = $descripcion;
        if(is_array($detalle)){
            $this->detalle = collect($detalle);
        }
        $this->comprador = $comprador;
    }

    public function setTipoPedido(string $tipoPedido):void{
        $this->tipoPedido = $tipoPedido;
    }

    public function getTipoPedido():string{
        return $this->tipoPedido;
    }

    public function setDescripcion(string $descripcion):void{
        $this->descripcion = $descripcion;
    }

    public function getDescripcion():string{
        return $this->descripcion;
    }

    public function setDetalle($detalle):void{
        if(is_array($detalle)){
            $detalle = collect($detalle);
        }
        $this->detalle = $detalle;
    }

    public function getDetalle(){
        return $this->detalle;
    }

    public function setComprador(Comprador $comprador):void{
        $this->comprador = $comprador;
    }

    public function getComprador():Comprador{
        return $this->comprador;
    }
}