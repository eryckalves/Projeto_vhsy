<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class ExportFile implements FromQuery , ShouldQueue , WithHeadings , WithCustomCsvSettings
{
    use Exportable;

    public function __construct($search)
    {
        $this->search = $search;
    }

    public function headings(): array
    {
        return [
            'Nome Time',
            'Serie',
            'Nome Jogador',
            'Posicao',
            'Estado time',
        ];
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';',
            'enclosure' => '',
        ];
    }

    public function query()
    {
        return DB::table('jogadors')
        ->join('times', 'jogadors.time_id', '=', 'times.id')
        ->select('times.nome','times.serie','jogadors.nome_jogador','jogadors.posicao','times.estado')
        ->where('jogadors.nome_jogador', 'like', '%'.$this->search.'%')
        ->orWhere('times.nome', 'like', '%'.$this->search.'%')
        ->orderBy('times.nome');
    }
}
