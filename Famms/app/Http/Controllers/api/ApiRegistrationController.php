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

    public function store(ApiRegistration $apiRegistration ,Request $request)
    {


            $data = new ApiRegistration;
              $data->name = $request->name;
              $data->username = $request->username;
              $data->email = $request->email;
              $data->save();
        return redirect('api/registration')->with('message',"Add User Sucessfully");;
    }

    function update($id,ApiRegistration $apiRegistration,Request $request){
        $Res = $apiRegistration::find($id);
        return $Res;
    }

    function delete($id,ApiRegistration $apiRegistration,Request $request){
        $Reso = $apiRegistration::find($id);
        $Res = $Reso->delete();
        return $Reso;
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
