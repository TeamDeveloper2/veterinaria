<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ecocorazon extends Model
{
    use HasFactory;
    protected $primaryKey ="codecoCorazon";
    protected $fillable = ['detalle','fecha',];

}

