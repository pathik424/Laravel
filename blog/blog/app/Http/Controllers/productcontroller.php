<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function index()
    {
        return view("product.product");
    }

    public function add()
    {
        return view("product.addproduct");
    }

    public function store(Request $request, product $product)
    {
        if($request->hasFile("image")) // image che ke nai e check karse hasfile
        {
          $file = $request->file("image");
         //  dd($file);
          $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
          $image = 'upload/product/';
          $source = $image. time(). '.'.$ext;
          $file->move($image,$source);
         }


            // // dd($request->all());
            // $file = $request->file('image');
            // // dd($file);
            // if ($file) {
            //     $fileNameEx = $file->getClientOriginalExtension();
            //     $fileName = "project".date("dmyhis").".".$fileNameEx;
            //     // dd($fileNameEx);
            //     $file->move(public_path('uploads'), $fileName);
            //     # code...
            // }else{
            //     // dd("inside else");
            //     // $fileName = "default.png";
            // }

     $product::create([
         "image"=> $source,
         "name"=> $request->name,
         "description"=> $request->description,
         "price"=> $request->price,
         "quantity"=> $request->quantity,


     ]);
     return redirect('/product')->with("message","post added successfully");


        }
}
