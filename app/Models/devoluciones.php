<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class devoluciones extends Model
{
    use HasFactory;
    protected $primaryKey ="id_devoluciones";
    protected $fillable = ['iddevoluciones_idventa',
                            'iddevoluciones_idcliente',
                            'cantidad_articulo',
                            'cod_producto',
                            'fecha_devolucion',
                        ];
}
