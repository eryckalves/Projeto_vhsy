<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    protected $fillable = [
        'nome_jogador', 'time_id', 'posicao'
    ];
}
