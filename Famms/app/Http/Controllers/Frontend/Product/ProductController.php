<?php

namespace App\Http\Controllers\Frontend\Product;

use App\Http\Controllers\Controller;
use App\Models\eyeproduct;
use App\Models\neweyeproduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $product = eyeproduct::all();

        return view('Frontend.Product.Product',compact('product'));
    }

    public function indexnew()
    {

        $newproduct = neweyeproduct::all();

        return view('Frontend.Product.NewProduct',compact('newproduct'));
    }
}

