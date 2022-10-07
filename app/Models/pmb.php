<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pmb extends Model
{
    use HasFactory;
    protected $primaryKey ="codpmb";
    protected $fillable = ['calcio','electrocitos','glucosa',];

}
$table->id(',');
$table->float();
$table->float();
$table->float();
$table->timestamps();
