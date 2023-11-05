<?php

namespace App\Http\Controllers;

use App\Models\AlamatUDD;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('v_registrasi.index', [
            'title' => 'Register',
            'dataAlamatUDD' => AlamatUDD::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:15|unique:users',
            'email' => 'required|email:dns|unique:users',
            'alamatudd_id' => 'required',
            'password' => 'required|min:5|max:15'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login');

    }
}
