<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use App\Exports\ExportFile;
use Maatwebsite\Excel\Facades\Excel;

class FileQueueListener
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $resultado = new ExportFile($event->search);
        //$resultado = Excel::store(new ExportFile($event->search), 'export.csv');
       return $resultado;
    }
}
