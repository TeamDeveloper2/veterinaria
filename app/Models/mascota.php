<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mascota extends Model
{
    use HasFactory;
    protected $primaryKey ="codmascota";
    protected $fillable = ['color','especie','fechaNacimiento','genero','nombre','peso','raza','codCliente1'];

}

