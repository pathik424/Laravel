<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class YourNameController extends Controller
{
    public function index(request $request)
    {

        $table = User::all();
        // dd($table);

        return view("welcome",compact('table'));
        // return view('welcome');
    }

    public function add()
    {
        return view("adduser");


    }

    public function store(request $request)
    {

        User::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=> $request->password,
        ]);

            // dd($request);
        return redirect('/users')->with('message',"Users added successfully");


    }


}
