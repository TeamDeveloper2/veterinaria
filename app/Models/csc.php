<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class csc extends Model
{
    use HasFactory;
    protected $primaryKey ="codcsc";
    protected $fillable = ['csc_codmascota', 'precio', 'globulosBlancos','globulosRojos','hemoglobina','plaquetas', 'fecha'];

}
