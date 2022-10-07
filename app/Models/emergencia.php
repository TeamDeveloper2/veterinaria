<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emergencia extends Model
{
    use HasFactory;
    protected $primaryKey ="codemergencia";
    protected $fillable = ['envenenamiento','fecha','fracturaHueso','paroCardiaco','parto',];

}
