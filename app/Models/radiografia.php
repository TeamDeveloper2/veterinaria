<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class radiografia extends Model
{
    use HasFactory;
    protected $primaryKey ="codradiografia";
    protected $fillable = ['areacuerpo','fecha','precio',];

}
