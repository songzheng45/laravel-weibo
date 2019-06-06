<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'except' => ['create', 'store']
        ]);
    }

    public function create()
    { }

    public function store(Request $request)
    { }
}
