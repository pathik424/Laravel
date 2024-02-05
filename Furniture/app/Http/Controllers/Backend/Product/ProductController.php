<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use App\Models\Backend\Brand;
use App\Models\Backend\Category\Category;
use App\Models\Backend\Product\prodcut;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('Backend.Product.index');
    }

    public function add()
    {
        $cat = Category::all();
        $brand = Brand::all();

        return view('Backend.Product.add',compact('cat','brand'));

    }
    public function store(Request $request)
    {
        // dd($request);

        // if($request->hasFile("image"))
        // {

        //     $file = $request->file("image");
        //     //  dd($file);
        //      $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
        //      $image = 'upload/product/';
        //      $source = $image. time(). '.'.$ext;
        //      $file->move($image,$source);
        //     // dd($image);
        // }

        prodcut::create([
            "name"=> $request->name,
            "price"=> $request->price,
            "cat_id"=> $request->cat_id,
            "brand_id"=> $request->brand_id,
            "description"=> $request->description,
            "visible"=> $request->visible,
            "image"=> time(),
            // "image"=> $source,

        ]);
        return redirect('admin/product')->with('Brand',"Brand added successfully");

    }
}
