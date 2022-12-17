<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spa extends Model
{
    use HasFactory;
    protected $primaryKey ="codspa";
    protected $fillable = ['codspa_codmascota','codspa_codcliente','motivo','otro','precio', 'fecha'];
}

