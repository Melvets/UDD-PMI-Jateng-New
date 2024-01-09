<?php

namespace App\Http\Controllers;

use App\Models\StokDarah;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $rt = date('H:i');
        if ($rt >= '03:00' && $rt <= '10:00') {
            $waktu = 'Pagi';
        } else if ($rt >= '10:00' && $rt <= '15:00') {
            $waktu = 'Siang';
        } else if ($rt >= '15:00' && $rt <= '18:00') {
            $waktu = 'Sore';
        } else {
            $waktu = 'Malam';
        }

        $golda_a = StokDarah::where('alamat_id', auth()->user()->alamatudd_id)->sum('golda_a');
        $golda_b = StokDarah::where('alamat_id', auth()->user()->alamatudd_id)->sum('golda_b');
        $golda_ab = StokDarah::where('alamat_id', auth()->user()->alamatudd_id)->sum('golda_ab');
        $golda_o = StokDarah::where('alamat_id', auth()->user()->alamatudd_id)->sum('golda_o');

        return view('v_dashboard.index', [
            'waktu' => $waktu,
            'golda_a' => $golda_a,
            'golda_b' => $golda_b,
            'golda_ab' => $golda_ab,
            'golda_o' => $golda_o,
        ]);
    }
}
