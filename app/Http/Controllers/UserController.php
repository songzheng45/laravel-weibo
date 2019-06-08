<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['create', 'store']
        ]);
    }

    public function create(Request $request)
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $credential = $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        if (Auth::attempt($credential)) {
            return redirect()->route("login");
        } else {
            return redirect()->back()->withInput();
        }
    }

    public function show(User $user)
    { }

    public function edit(User $user)
    { }

    public function update(User $user)
    { }

    public function destroy(User $user)
    { }
}
