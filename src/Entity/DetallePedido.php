<?php
namespace Ascurrajdev\Pagopar\Entity;

use Illuminate\Database\Eloquent\Model;

class DetallePedido{
    private $nombre;
    private $descripcion;
    private $precio;
    private $cantidad;
    private $producto;

    public function __construct(string $nombre,string $descripcion,float $precio,Model $producto,float $cantidad = 1){
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->producto = $producto;
    }

    public function setNombre(string $nombre):void{
        $this->nombre = $nombre;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function setDescripcion(string $descripcion):void{
        $this->descripcion = $descripcion;
    }

    public function getDescripcion():string{
        return $this->descripcion;
    }

    public function setPrecio(float $precio){
        $this->precio = $precio;        
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setCantidad(float $cantidad){
        $this->cantidad = $cantidad;
    }

    public function getCantidad(){
        return $this->cantidad;
    }

    public function setProducto(Model $producto){
        $this->producto = $producto;
    }

    public function getProducto(){
        return $this->producto;
    }
}