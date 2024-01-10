<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\ApiRegistration;
use Illuminate\Http\Request;

class ApiRegistrationController extends Controller
{
    public function index()
    {
        // $users = User::all();
        // return response()->json([$users]);
        return view("Api.Registration");
    }

    public function store(Request $request)
    {

        // dd($request);

        ApiRegistration::create([
            "name"=> $request->name,
            "username" => $request->username,
            "email" => $request->email,

        ]);
        return redirect('api/registration');
    }

    public function apidata(ApiRegistration $apiRegistration)
    {

        $reg = ApiRegistration::all('id','name','email','username');
             return $reg;


        // $products = product::all();
        // dd($reg);
        //  Run karane ke liye http://localhost:8000/api/users
        // routes ma jaine path banavo padse api ni file ma users no
        // return response()->json($users);

        // function getalltodo(Todo $todo){
            //     $data = $todo->all();
            //     return $data;
            // return response()->json([$reg]);
    }
}
