<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\pathik;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $prod = pathik::all();

        return view("Frontend.home",compact('prod'));

    }

}
