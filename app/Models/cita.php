<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    use HasFactory;
    protected $primaryKey ="codcita";
    protected $fillable = ['codcita', 'motivo', 'fecha', 'otro', 'telefono'];
}
