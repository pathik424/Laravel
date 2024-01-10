<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        // $users = User::all();
        // return response()->json([$users]);
        return view("Api.Registration");
    }



    // for API
    public function GetUsersData()
    {

        $users = User::all();
        // dd($users)
        // $products = product::all();
        // dd('$users');
        //  Run karane ke liye http://localhost:8000/api/users
        // routes ma jaine path banavo padse api ni file ma users no
        // return response()->json($users);
        return response()->json([$users]);

    }

}
