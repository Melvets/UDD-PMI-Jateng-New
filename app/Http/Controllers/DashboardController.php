<?php

namespace App\Http\Controllers;

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

        return view('v_dashboard.index', [
            'waktu' => $waktu,
        ]);
    }
}
