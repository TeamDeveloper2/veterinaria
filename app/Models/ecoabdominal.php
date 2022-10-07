<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ecoabdominal extends Model
{
    use HasFactory;
    protected $primaryKey ="codecoAbdominal";
    protected $fillable = ['detalle','fecha',];

}

