<?php

namespace App\Http\Controllers;

use App\Models\Pendonor;
use Illuminate\Http\Request;

class PendonorController extends Controller
{
    public function index()
    {
        return view('v_dashboard.pendonor.index', [
            'dataPendonor' => Pendonor::all(),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Pendonor $pendonor)
    {
        //
    }

    public function edit(Pendonor $pendonor)
    {
        //
    }

    public function update(Request $request, Pendonor $pendonor)
    {
        //
    }

    public function destroy(Pendonor $pendonor)
    {
        //
    }
}
