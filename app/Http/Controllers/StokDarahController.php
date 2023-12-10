<?php

namespace App\Http\Controllers;

use App\Models\AlamatUDD;
use App\Models\StokDarah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StokDarahController extends Controller
{
    public function index()
    {
        return view('v_dashboard.stokdarah.index', [
            'dataStokDarah' => StokDarah::where('id', auth()->user()->alamatudd_id)->get()
            // 'dataStokDarah' => StokDarah::all()
        ]);
    }

    public function create()
    {
        if(!auth()->user()->isAdmin) {
            return redirect('/dashboard/stokdarah');
        }

        return view('v_dashboard.stokdarah.create', [
            'dataAlamatUDD' => AlamatUDD::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'alamat_id' => 'required|unique:stokdarah',
            'golda_a' => 'required|numeric',
            'golda_b' => 'required|numeric',
            'golda_ab' => 'required|numeric',
            'golda_o' => 'required|numeric'
        ]);

        StokDarah::create($validateData);

        return redirect('/dashboard/stokdarah')->with('success', 'Data berhasil dibuat!');
    }

    public function show(StokDarah $stokDarah)
    {
        //
    }

    public function edit(StokDarah $stokDarah, $id)
    {
        return view('v_dashboard.stokdarah.edit', [
            'dataAlamatUDD' => AlamatUDD::all(),
            'dataStokDarah' => StokDarah::find($id)
        ]);
    }

    public function update(Request $request, StokDarah $stokDarah, $id)
    {
        $stokDarah = StokDarah::find($id);

        $validateData = $request->validate([
            'alamat_id' => 'required',
            'golda_a' => 'required|numeric',
            'golda_b' => 'required|numeric',
            'golda_ab' => 'required|numeric',
            'golda_o' => 'required|numeric'
        ]);

        StokDarah::where('id', $stokDarah->id)->update($validateData);

        return redirect('/dashboard/stokdarah')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy(StokDarah $stokDarah, $id)
    {
        if(!auth()->user()->isAdmin) {
            return redirect('/dashboard/stokdarah');
        }

        $stokDarah = StokDarah::find($id);
        StokDarah::destroy($stokDarah->id);

        return redirect('/dashboard/stokdarah')->with('success', 'Data berhasil dihapus!');
    }
}
