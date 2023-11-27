<?php

namespace App\Http\Controllers;

use App\Models\AlamatUDD;
use Illuminate\Http\Request;

class AlamatUDDController extends Controller
{
    public function index()
    {
        return view('v_dashboard.alamatudd.index', [
            'dataAlamatUDD' => AlamatUDD::where('id', auth()->user()->alamatudd_id)->get()
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

    public function show(AlamatUDD $alamatUDD)
    {
        //
    }

    public function edit(AlamatUDD $alamatUDD)
    {
        return view('v_dashboard.alamatudd.edit', [
            'dataAlamatUDD' => $alamatUDD,
            
        ]);
    }

    public function update(Request $request, AlamatUDD $alamatUDD)
    {
        //
    }

    public function destroy(AlamatUDD $alamatUDD)
    {
        //
    }
}
