<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hemograma extends Model
{
    use HasFactory;
    protected $primaryKey ="codhemograma";
    protected $fillable = ['fecha','codcsc1','codpmb1','codenfCard1',];

}
