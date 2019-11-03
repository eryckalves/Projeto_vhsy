<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ExportFile;
use Maatwebsite\Excel\Facades\Excel;
use App\Events\FileQueueEvent;


class ExportFileController extends Controller
{
    function export(Request $requests)
    { 
        $search= $requests->search_data;
        $resultado = Excel::download(new ExportFile($search), 'export.csv');
        //(new ExportFile($search))->queue('export.csv');
        //return back()->withSuccess('Export started!');
        return $resultado;
    }
}
