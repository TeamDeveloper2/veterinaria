<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pmb extends Model
{
    use HasFactory;
    protected $primaryKey ="codpmb";
    protected $fillable = ['pmb_codmascota','calcio','electrocitos','glucosa', 'fecha'];

}
