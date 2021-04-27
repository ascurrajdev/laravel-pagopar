<?php
namespace Ascurrajdev\Pagopar\Models;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model{

    protected $fillable = [
        'pedido_id',
        'nombre_producto',
        'descripcion_producto',
        'precio_total_producto',
        'cantidad_total_producto',
        'url_imagen_producto',
        'public_key_pagopar',
        'producto_id',
        'vendedor_telefono',
        'categoria_productor_id',
        'vendedor_direccion',
        'vendedor_direccion_referencia',
        'vendedor_direccion_coordenadas'
    ];

    protected $hidden = [
        'public_key_pagopar'
    ];

    protected $table = 'detalle_pedidos_pagopar';

    public function pedido(){
        return $this->belongsTo(Pedido::class);
    }

}