<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalMU;

class LandingController extends Controller
{
    public function home() {
        return view ('v_landing.index', [
            'dataJadwalMU' => JadwalMU::all()
        ]);
    }

    public function jadwalmu() {
        return view ('v_landing.jadwalmu', [
            'dataJadwalMU' => JadwalMU::all()
        ]);
    }
}
