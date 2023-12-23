<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalMU;

class LandingController extends Controller
{
    public function home() {

        $dataJadwalMU = JadwalMU::where('tanggal', date('Y-m-d'))->get();

        return view ('v_landing.index', [
            'dataJadwalMU' => $dataJadwalMU
        ]);
    }

    public function jadwalmu() {

        $dataJadwalMU = JadwalMU::where('tanggal', date('Y-m-d'))->get();

        return view ('v_landing.jadwalmu', [
            'dataJadwalMU' => $dataJadwalMU
        ]);
    }
}

// $data['created_at'] = date('Y-m-d H:i:s');