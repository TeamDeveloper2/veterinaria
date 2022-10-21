<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enfermedadescardiacas extends Model
{
    use HasFactory;
    protected $primaryKey ="codenfercardiacas";
    protected $fillable = ['enfercard_codmascota' ,'colesterolTotal','nivelHDL','nivelLDL','niveltrigiceridos', 'fecha'];

}

