<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {

        // return view mate banavyu

        // For Tiitle

        $data['header_title'] = 'Dashboard';

        if(Auth::user()->role_as == 1) // admin
       {
           return view('admin.dashboard', $data);

       }
       else if(Auth::user()->role_as == 2) // teacher
       {

        return view('teacher.dashboard', $data);

    }
    else if(Auth::user()->role_as == 3) // Student
    {
        return view('student.dashboard', $data);

    }
    else if(Auth::user()->role_as == 4) // Parent
    {
           return view('parent.dashboard', $data);

       }
    }
}
