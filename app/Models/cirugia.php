<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cirugia extends Model
{
    use HasFactory;
    protected $primaryKey ="codcirugia";
    protected $fillable = [
        'castracion',
        'catarata',
        'cola',
        'oreja',
        'traumotalogia',
    ];
}

