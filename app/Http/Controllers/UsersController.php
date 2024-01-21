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

    public function edit(User $user)
    {
        return view('v_dashboard.users.edit', [
            'dataUsers' => $user,
            'dataAlamatUDD' => AlamatUDD::all(),
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validateData = $request->validate([
            'first_name' => 'required',
            'last_name' => '',
            'alamatudd_id' => 'required',
            'isAdmin' => 'required',
            // 'password' => 'required|confirmed|min:8',
        ]);

        // RUSAK! ==============
        if($request->username != $user->username || $request->email != $user->email) {
            $validateData['username'] = 'required|unique:users|min:5|lowercase';
            $validateData['email'] = 'required|unique:users|email:dns';
        }

        if(isset($request->password)){
            $validateData['password'] = 'required|confirmed|min:8';
            if($request->password_confirmation == $validateData['password']) {
                $validateData['password'] = Hash::make($validateData['password']);
            }
        }

        // =====================

        User::where('id', $user->id)->update($validateData);
        return redirect('/dashboard/users')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy(User $user)
    {
        //
    }
}
