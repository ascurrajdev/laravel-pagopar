<?php
namespace Ascurrajdev\Pagopar\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model{

    protected $table = 'pedidos_pagopar';

    protected $fillable = [
        'token',
        'public_token',
        'monto_total',
        'tipo_pedido',
        'comprador_id',
        'descripcion_resumen',
        'fecha_maxima_pago',
        'estado'
    ];

    protected $hidden = [
        'token',
        'public_token'
    ];

    public function comprador(){
        return $this->belongsTo(Comprador::class);
    }

    public function cliente(){
        return $this->morphTo();
    }

    public function detalle(){
        return $this->hasMany(DetallePedido::class);
    }
}