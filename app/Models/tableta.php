<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tableta extends Model
{
    use HasFactory;
    protected $primaryKey ="codtableta";
    protected $fillable = ['dosisporDia','fecha','nombreMedicamentos','precio',];

}

