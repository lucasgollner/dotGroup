<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarefa extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'tarefas_titulo', 
        'tarefas_texto', 
        'tarefas_usuario',
    ];

    protected $hidden = [
        'deleted_at'
    ];
}
