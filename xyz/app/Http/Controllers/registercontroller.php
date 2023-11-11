<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registercontroller extends Controller
{
    public function index()
    {
        return view("register");
    }

    public function register(Request $request)
    {
        $request->validate(
            ['username' =>'required',
            'email'=> 'required|email',
            'password'=> 'required',
            'confirm-password'=> 'required'],
            );
        dd($request);
    }
}
