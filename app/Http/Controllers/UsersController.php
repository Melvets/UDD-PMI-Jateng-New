<?php

namespace App\Http\Controllers;

use App\Models\AlamatUDD;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        return view('v_dashboard.users.index', [
            'dataUsers' => User::all(),
        ]);
    }

    public function create()
    {
        return view('v_dashboard.users.create', [
            'dataAlamatUDD' => AlamatUDD::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'first_name' => 'required',
            'last_name' => '',
            'username' => 'required|unique:users|min:5|lowercase',
            'email' => 'required|unique:users|email:dns',
            'alamatudd_id' => 'required',
            'isAdmin' => 'required',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required|same:password'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        return redirect('/dashboard/users')->with('success', 'Data berhasil ditambahkan!');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user, $id)
    {
        $user = User::find($id);

        return view('v_dashboard.users.edit', [
            'dataUsers' => $user,
            'dataAlamatUDD' => AlamatUDD::all(),
        ]);
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
