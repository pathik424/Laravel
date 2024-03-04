<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\cart;
use App\Models\pathik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $pat = pathik::all();

        return view("Frontend.home.home",compact('pat'));
    }

    // public function addcart(Request $request ,$id)
    // {
    //    if(Auth::id())
    //    {
    //     $user = auth()->user();
    //     $product=pathik::find($id);

    //     $cart = new cart;

    //     $cart->description = $product->description;
    //     $cart->price = $product->price;
    //     $cart->quantity = $request->price;
    //     $cart->image = time();
    //     $cart->save();




    //      return redirect()->back();
    //    }

    //    else
    //    {
    //     return redirect('/login')->back();
    //    }
    }

