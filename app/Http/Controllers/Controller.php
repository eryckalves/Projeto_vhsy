<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Time;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index(Request $requests)
    {

        $search= $requests->search_data;

        if($search == null)
            $datas = DB::table('jogadors')
            ->join('times', 'jogadors.time_id', '=', 'times.id')
            ->select('*')
            ->paginate(5);
        else
            $datas = DB::table('jogadors')
            ->join('times', 'jogadors.time_id', '=', 'times.id')
            ->select('*')
            ->where('jogadors.nome_jogador', 'like', '%'.$search.'%')
            ->orWhere('times.nome', 'like', '%'.$search.'%')
            ->paginate(5);

        return view('homepage.index',compact('datas','search'));
    }
}