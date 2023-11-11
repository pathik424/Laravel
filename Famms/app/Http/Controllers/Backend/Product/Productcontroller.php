<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\category;
use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    public function index()
    {
        $category = category::all();
        $brand = brand::all();

        return view("Backend.product.product", compact("category","brand"));

    }

    public function add()
    {
        $cat = category::all();
        $brand = brand::all();

        return view("Backend.product.addproduct",compact("cat","brand"));
    }

    public function store(Request $request)
    {

        // for image handling

        if($request->hasFile("image")) // image che ke nai e check karse hasfile
        {
          $file = $request->file("image");
         //  dd($file);
          $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
          $image = 'upload/brand/';
          $source = $image. time(). '.'.$ext;
          $file->move($image,$source);
        //  dd($image);
        }


        // dd($request);


        brand::create([

            "cat_id"=> $request->cat_id,
            "brand_id"=> $request->brand_id,
            "name"=> $request->name,
            "description" => $request->description,
            "visible" => $request->visible,
            "image" =>$source,
        ]);
        return redirect('admin/product')->with('message',"Brand added successfully");
    }
}
