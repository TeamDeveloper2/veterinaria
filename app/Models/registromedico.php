<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registromedico extends Model
{
    use HasFactory;
    protected $primaryKey ="codregistroMedico";
    protected $fillable = ['codenferm','codtab','codmasc','codeme'];

}
