<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Str;

class AuthController extends Controller
{
    public function login()
    {
        // // dd(Hash::make("admin@123"));
        // if(!empty(Auth::check()))
        // {
        //     return redirect('admin/dashboard');
        // }
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');

    }

    public function store(request $request)
    {
    //    dd($request);

       $user = new User;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = $request->password;
       $user->save();

       return redirect("/admin/login")->with("success","Signup Succesfully");

    }

    public function Authlogin(request $request)
    {

   $request->validate(['email'=>'required','password'=>'required']);

   $credential =$request->only('email','password');
   // dd($credential);


   if(Auth::attempt($credential))

   {
       if(Auth::user()->role_as == 1) // role as as set karyu login karyu to
       {
           return redirect('/admin/dashboard')->with('message','Login Success'); // with thi message show thase success or failed

       }
       else if(Auth::user()->role_as == 2) //  role as as set karyu login karyu to
       {
           return redirect('/teacher/dashboard')->with('message','Login Success'); // with thi message show thase success or failed

       }
       else if(Auth::user()->role_as == 3) //  role as as set karyu login karyu to
       {
           return redirect('/student/dashboard')->with('message','Login Success'); // with thi message show thase success or failed

       }
       else if(Auth::user()->role_as == 4) //  role as as set karyu login karyu to
       {
           return redirect('/parent/dashboard')->with('message','Login Success'); // with thi message show thase success or failed

       }

       else //  role as as set karyu login karyu to
       {
           return redirect('admin/dashboard')->with('message','Login Success'); // with thi message show thase success or failed

       }
       // dd('Login Success');
   }
   else
   {
       return redirect('/admin/login')->with('failed','Please Valid Email or Password'); // with thi message show thase success or failed
       // dd('Login Failed');
   }
    }

    // public function forgotpassword()
    // {
    //     return view('auth.forgot');
    // }
    // public function postforgotpassword(request $request)
    // {
    //     // dd($request->all());

    //      // Please Check also User Model Some Data Attached
    //     $getEmailSingle = User::getEmailSingle($request->email);
    //     // dd($getEmailSingle); a dd karvso ane user model ma data attached karso etle email no badho data batavse

    //     if(!empty($user))
    //     {
    //     //   $user->remember_token = \Str::random(30);
    //       $user->remember_token = \Str::random(30);
    //       $user->save();

    //       Mail::to($user->email->send(new ForgotPassEmail($user)));

    //       return redirect()->back()->with('success','Please Check your email & reset your Password');
    //     }
    //     else
    //     {
    //         return redirect()->back()->with('error','email not found in the system');
    //     }


    // }


    public function logout()
    {
        Auth::logout();
        return redirect(url('/admin/login'));

    }
}
