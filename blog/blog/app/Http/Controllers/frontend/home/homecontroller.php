<?php

namespace App\Http\Controllers\frontend\home;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        $post = post::all();
        //  dd($post);
        return view("frontend.home.home", compact("post"));
    }
}
