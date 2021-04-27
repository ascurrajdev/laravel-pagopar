<?php
namespace Ascurrajdev\Pagopar\Models;

use Illuminate\Database\Eloquent\Model;

class Comprador extends Model{
    protected $fillable = [
        ''
    ];

    protected $table = "compradores_pagopar";

    public function user(){
        return $this->morphTo();
    }
}