<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cirugia extends Model
{
    use HasFactory;
    protected $primaryKey ="codcirugia";
    protected $fillable = ['codcirugia_codcliente','codcirugia_codmascota','tipo_cirugia','precio','fecha'];
}

