<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventacliente extends Model
{
    use HasFactory;
    protected $primaryKey ="id_ventacliente";
    protected $fillable = ['nombre_cliente',
                            'nit',
                            'fecha_reserva',
                            'estado_cliente',
                            'cantidad_articulos'
                            ];
    /* $table->enum('estado',['reservado','confirmado']); */
}
