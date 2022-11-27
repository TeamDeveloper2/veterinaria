<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    use HasFactory;
    protected $primaryKey ="coditem";
    protected $fillable = [
        'codigoProducto',
        'nombreItem',
        'precio',
        'detalle',
        'fecha',
        'cantidadAnterior',
        'cantidadActual',
        'cantidadSalida',
        'cantidadTotal',
        'fecha_vencimiento',
        'img',
        'codUser',
        'codProvedor'
    ];

}
