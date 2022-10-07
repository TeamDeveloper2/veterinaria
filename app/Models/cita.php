<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cita extends Model
{
    use HasFactory;
    protected $primaryKey ="codcita";
    protected $fillable = ['consulta','curacion','ecografia','fecha','hemograma','otro','radiografia','registroMedico','spa' ];
}
/*
            $table->id('codcita');
            $table->boolean('consulta');
            $table->string('curacion',200);
            $table->boolean('ecografia');
            $table->date('fecha');
            $table->boolean('hemograma');
            $table->string('otro',200);
            $table->boolean('radiografia');
            $table->boolean('registroMedico');
            $table->boolean('spa');
            $table->timestamps();
*/
