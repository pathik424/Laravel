<?php

namespace App\Http\Controllers\backend\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bhommecontroller extends Controller
{
    public function index()
    {
        return view("backend.home.home");
    }
}
