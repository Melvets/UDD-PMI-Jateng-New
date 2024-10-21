<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PendonorExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class PendonorExportController extends Controller
{
    public function export() 
    {
        return Excel::download(new PendonorExport, 'pendonor-'.Carbon::now()->timestamp.'.xlsx');
    }
}
