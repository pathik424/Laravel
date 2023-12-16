<?php

namespace App\Http\Controllers\Backend\pathik;

use App\Http\Controllers\Controller;
use App\Models\pathik;
use Illuminate\Http\Request;

class pathikcontroller extends Controller
{
    public function index()
    {

        $pat = pathik::all();

        return view("Backend.pathik.pathik",compact('pat'));
    }
    public function add()
    {

        // dd($cat);

        // $category = categoryStorage::name(filePath);();

        return view("Backend.pathik.addpathik");
    }

    public function store(Request $request, pathik $pathik)
    {


        // for image handling

        if($request->hasFile("image")) // image che ke nai e check karse hasfile
        {
          $file = $request->file("image");
         //  dd($file);
          $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
          $image = 'upload/pathik/';
          $source = $image. time(). '.'.$ext;
          $file->move($image,$source);
        //  dd($image);
        }

        // dd($request);

            pathik::create([
            "description" => $request->description,
            "price" => $request->price,
            "image" =>$source,
        ]);



        return redirect('admin/pathik')->with('message',"Product added successfully");
    }


}
