<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    use HasFactory;
    protected $primaryKey ="codcita";
    protected $fillable = ['codcita', 'consulta','curacion','ecografia','fecha','hemograma','otro','radiografia', 'spa', 'telefono'];
}
