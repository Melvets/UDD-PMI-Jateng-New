<?php

namespace App\Exports;

use App\Models\Pendonor;
use Maatwebsite\Excel\Concerns\FromCollection;

class PendonorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pendonor::all();
    }
}
