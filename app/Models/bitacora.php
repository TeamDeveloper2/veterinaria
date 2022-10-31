<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
    protected $fillable =[
        'name',
        'causer_id',
        'long_name',
        'descripcion',
        'subject_id'
    ];
    use HasFactory;
}
