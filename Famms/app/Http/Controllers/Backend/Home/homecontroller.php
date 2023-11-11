<?php

namespace App\Http\Controllers\Backend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        return view("Backend.home.home");
    }
}
