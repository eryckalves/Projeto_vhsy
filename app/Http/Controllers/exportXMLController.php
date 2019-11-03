<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
class exportXMLController extends Controller
{
    public function exportXML(Request $request)
    { 
        if(request()->ajax())
        {
            Storage::disk('public')->makeDirectory('ArquivosTemp');
            Storage::disk('public')->put('ArquivosTemp/file.txt', 'teste123');
           // Storage::putFileAs('photos', new File('/path/to/photo'), 'Arquivo.txt');
            return 'foi arquivo';
        }
    }
}
