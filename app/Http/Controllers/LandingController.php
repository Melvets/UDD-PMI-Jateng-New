<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalMU;
use App\Models\StokDarah;

class LandingController extends Controller
{
    public function home() {

        $query = JadwalMU::where('tanggal', date('Y-m-d'));

        $dataJadwalMU = $query->orderBy('jam_mulai', 'ASC')->get();

        return view ('v_landing.index', [
            'dataJadwalMU' => $dataJadwalMU
        ]);
    }

    public function jadwalmu() {
        
        $dataJadwalMU = JadwalMU::where('tanggal', date('Y-m-d'))->orderBy('jam_mulai', 'ASC')->get();

        if(request('search')) {
            $query = JadwalMU::where('tempat', 'like', '%' . request('search') . '%')
                    ->orWhere('alamat', 'like', '%' . request('search') . '%')
                    ->orWhere('kabkot', 'like', '%' . request('search') . '%')
                    ->orWhere('peruntukan', 'like', '%' . request('search') . '%');
                    
            $dataJadwalMU = $query->where('tanggal', date('Y-m-d'))->orderBy('jam_mulai', 'ASC')->get();
        }

        return view ('v_landing.jadwalmu', [
            'dataJadwalMU' => $dataJadwalMU
        ]);
    }

    public function stokdarah() {
        return view('v_landing.stokdarah', [
            'dataStokDarah' => StokDarah::all(),
        ]);
    }
}