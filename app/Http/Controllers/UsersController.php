<?php

namespace App\Http\Controllers;

use App\Models\AlamatUDD;
use App\Models\User;
use Illuminate\Http\Request;

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
            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email:dns',
            'alamatudd_id' => 'required',
            'isAdmin' => 'required'
        ]);
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
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
