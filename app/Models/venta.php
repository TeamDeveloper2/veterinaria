<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;
    protected $primaryKey ="id_venta";
    protected $fillable = ['idcliente_idventa','cod_producto','cantidad_articulo', 'cantidad_kilo', 'fecha_venta', 'estado_venta'];
}
