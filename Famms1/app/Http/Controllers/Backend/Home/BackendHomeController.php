<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendHomeController extends Controller
{
    public function adminview()
    {
        return view("Backend.home.home");

    }
}
