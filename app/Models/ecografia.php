<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ecografia extends Model
{
    use HasFactory;
    protected $primaryKey ="codecografia";
    protected $fillable = ['codecografia_mascota', 'area', 'observaciones', 'telefono', 'fecha', 'img_ecografia'];

}

