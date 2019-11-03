<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Time;
Use App\Jogador;

class JogadorController extends Controller
{
    public function create()
    {
        $datas = Time::all();
        return view('jogador.create' , compact('datas'));
    }

    public function store()
    {

        $data = Request()->validate([
            'nome_jogador' => 'required',
            'time_id' => 'required',
            'posicao' => 'required'
        ],
        [   
            'nome_jogador.required' => 'Informe o nome',
            'time_id.required' => 'Infome o time',
            'posicao.required' => 'Informe a posicao'
        ]);
        
        Jogador::create($data);

        return redirect()->route('jogador.create');

    }
}
