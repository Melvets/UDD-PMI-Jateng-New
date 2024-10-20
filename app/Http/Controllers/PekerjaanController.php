<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    public function index()
    {
        // $query = Pekerjaan::orderBy('updated_at', 'DESC');
        // $dataPekerjaan = $query->paginate(5);

        // return view('v_dashboard.pendonor.pekerjaan.index', [
        //     'dataPekerjaan' => $dataPekerjaan
        // ]);

        $dataPekerjaan = Pekerjaan::all();
        return response()->json($dataPekerjaan);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
