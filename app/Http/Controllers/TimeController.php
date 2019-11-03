<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Time;
class TimeController extends Controller
{
    public function create()
    {
        return view('time.create');
    }


    public function store()
    {
        $data = Request()->validate([
            'nome' => 'required',
            'estado' => 'required',
            'serie' => 'required'
        ],
        [   
            'nome.required' => 'Informe o nome',
            'estado.required' => 'Infome o estado',
            'serie.required' => 'Informe a serie'
        ]);

        time::create($data);

        return redirect()->route('time.create');
    }
}
