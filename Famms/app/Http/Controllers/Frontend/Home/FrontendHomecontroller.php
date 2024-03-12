<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Models\eyeproduct;
use App\Models\testimonial;
use Illuminate\Http\Request;

class FrontendHomecontroller extends Controller
{
       public function index()
       {

        $product = eyeproduct::all();
        $test = testimonial::all();
        // dd($test);

        return view('Frontend.Home.Home',compact('product','test'));

       }

       public function contact()
       {
           return view('Frontend.Contact.Contact');
       }

       public function contactstore(request $request)
       {
        //    dd($request);

        contact::create([
            "fullname"=> $request->fullname,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,

        ]);
        return redirect('/contact');
       }


}
