<?php

namespace App\Http\Controllers;

use App\Models\AlamatUDD;
use Illuminate\Http\Request;

class AlamatUDDController extends Controller
{
    public function index()
    {
        if(auth()->user()->isAdmin) {
            $dataAlamatUDD = AlamatUDD::all();
        } else {
            $dataAlamatUDD = AlamatUDD::where('id', auth()->user()->alamatudd_id)->get();
        }

        return view('v_dashboard.alamatudd.index', [
            'dataAlamatUDD' => $dataAlamatUDD
        ]);
    }

    public function create()
    {
        if(!auth()->user()->isAdmin) {
            return redirect('/dashboard/alamatudd');
        }
        // $this->authorize('admin');

        return view('v_dashboard.alamatudd.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'udd_kabkot' => 'required|unique:alamatudd',
            'alamat' => 'required',
            'telp' => 'required',
            'email' => 'required|email:dns'
        ]);

        AlamatUDD::create($validatedData);

        return redirect('/dashboard/alamatudd')->with('success', 'Data berhasil dibuat!');
    }

    public function show(AlamatUDD $alamatUDD)
    {
        //
    }

    public function edit(AlamatUDD $alamatUDD, $id)
    {
        // dd($alamatUDD, AlamatUDD::find($id));

        return view('v_dashboard.alamatudd.edit', [
            'dataAlamatUDD' => AlamatUDD::find($id),
        ]);
    }

    public function update(Request $request, AlamatUDD $alamatUDD, $id)
    {
        $alamatUDD = AlamatUDD::find($id);

        $validatedData = $request->validate([
            'udd_kabkot' => 'required|unique:alamatudd',
            'alamat' => 'required',
            'telp' => 'required',
            'email' => 'required|email:dns'
        ]);

        // dd($validatedData);

        AlamatUDD::where('id', $alamatUDD->id)->update($validatedData);

        return redirect('/dashboard/alamatudd')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy(AlamatUDD $alamatUDD, $id)
    {
        if(!auth()->user()->isAdmin) {
            return redirect('/dashboard/alamatudd');
        }

        $alamatUDD = AlamatUDD::find($id);

        AlamatUDD::destroy($alamatUDD->id);

        return redirect('/dashboard/alamatudd')->with('success', 'Data berhasil dihapus!');
    }
}
