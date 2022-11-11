<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    use HasFactory;
    protected $primaryKey ="ci";
    protected $fillable = ['ci','nombre_proveedor', 'apePaterno' , 'apeMaterno', 'genero', 'nombre_empresa', 'direccion_empresa', 'telefono'];
}
