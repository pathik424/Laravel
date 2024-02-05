<?php

namespace App\Http\Controllers;

use App\Models\pathik;
use Illuminate\Http\Request;

class ApiRegistrationController extends Controller
{
    public function index()
    {
             $users = pathik::all();
        return response()->json([$users]);
    }
}
