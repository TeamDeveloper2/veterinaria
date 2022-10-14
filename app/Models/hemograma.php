<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hemograma extends Model
{
    use HasFactory;
    protected $primaryKey ="codhemograma";
    protected $fillable = ['fecha','hemograma_csc','hemograma_pmb','hemograma_enfer_cardiaca',];

}
