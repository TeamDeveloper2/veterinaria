<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enfermedad extends Model
{
    use HasFactory;
    protected $primaryKey ="codenfermedad";
    protected $fillable = ['fecha','nombreEnfermedad','descripcion',];

}

