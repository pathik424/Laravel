<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
     {
        return view('Frontend.Register.Register');
     }

     public function store(request $request)
     {
        // dd($request);

        $user = new User;
        $user->username = $request->username;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect("/home")->with("success","Signup Succesfully");

     }

     public function login()
     {
         return view('Frontend.login.login');
     }

     public function login_validation(request $request)
     {
            // dd($request);
        $request->validate(['username'=>'required','password'=>'required']); //ana thi backand ma upadte thase compulsary field thase

        $credential =$request->only('username','password'); // only email ane password e adjust karvu hoy to 2 j field rakhavi hoy to request
        // dd($credential);

        if(Auth::attempt($credential))

        {
            // dd(Auth::user()); user thi single user no data avse role as pan mali jase ani biji badhi details pan mali jase
            if(Auth::user()->role_as == 1) // role as as set karyu login karyu to
            {
                return redirect('/admin/dashboard')->with('message','Login Success'); // with thi message show thase success or failed

            }
            else if(Auth::user()->role_as == 0) //  role as as set karyu login karyu to
            {
                return redirect('/home')->with('message','Login Success'); // with thi message show thase success or failed

            }
            else //  role as as set karyu login karyu to
            {
                return redirect('/home')->with('message','Login Success'); // with thi message show thase success or failed

            }
            // dd('Login Success');
        }
        else
        {
            return redirect('/login')->with('message','Login Failed'); // with thi message show thase success or failed
            // dd('Login Failed');
        }
     }

     public function logout()

     {
        Auth::logout();
        session:flush();
        return redirect('/home');
     }

}
