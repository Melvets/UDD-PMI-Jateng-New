<?php

namespace App\Http\Controllers;

use App\Models\AlamatUDD;
use Illuminate\Http\Request;
use App\Models\JadwalMU;
use App\Models\StokDarah;
use Illuminate\Support\Facades\DB;

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

        $query = StokDarah::query();
        $query->select('alamatudd_id',
                        DB::raw('SUM(golda_a) AS golda_a'),
                        DB::raw('SUM(golda_b) AS golda_b'),
                        DB::raw('SUM(golda_ab) AS golda_ab'),
                        DB::raw('SUM(golda_o) AS golda_o'),
                        DB::raw('MAX(updated_at) AS updated_at')
                    );
        $query->groupBy('alamatudd_id');

        $dataStokDarah = $query->get();
        // dd($dataStokDarah);

        $golda_a = StokDarah::sum('golda_a');
        $golda_b = StokDarah::sum('golda_b');
        $golda_ab = StokDarah::sum('golda_ab');
        $golda_o = StokDarah::sum('golda_o');

        return view('v_landing.stokdarah', [
            'dataStokDarah' => $dataStokDarah,
            'golda_a' => $golda_a,
            'golda_b' => $golda_b,
            'golda_ab' => $golda_ab,
            'golda_o' => $golda_o,
        ]);
    }

    public function alamatudd() {
        return view('v_landing.alamatudd', [
            'dataAlamatUDD' => AlamatUDD::all(),
        ]);
    }
}
