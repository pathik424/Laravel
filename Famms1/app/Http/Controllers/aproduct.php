<?php

namespace App\Http\Controllers;

use App\Models\aproduct as ModelsAproduct;
use Illuminate\Http\Request;

class aproduct extends Controller
{
    public function index()
    {
        // $brand = brand::with('category')->get(); // like a compact thai jase category
        // // $brands = brand::all();
        // // dd($brands);
        // // foreach ($brands as $brand) {
        // //     dd($brand->cat_id->category);
        //    }
        // return view("Backend.brand.brand",compact("brand"));
        return view("Backend.aproduct.aproduct");
    }

    public function add()
    {

        // $cat = category::all();
        // dd($cat);

        // $category = categoryStorage::name(filePath);();

        return view("Backend.aproduct.addaproduct");
    }

    public function store(Request $request)
    {

        // for image handling

        if($request->hasFile("image")) // image che ke nai e check karse hasfile
        {
          $file = $request->file("image");
         //  dd($file);
          $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
          $image = 'upload/aproduct/';
          $source = $image. time(). '.'.$ext;
          $file->move($image,$source);
        //  dd($image);
        }


        // dd($request);




        //     // aproduct::create([
        //     "description" => $request->description,
        //     "price" => $request->price,
        //     "image" =>$source,
        // ]);
        return redirect('admin/aproduct')->with('message',"Product added successfully");
    }

    // public function update($id)
    // {
    //     $categories = category::all();

    //     // $update = brand::with('category')->get(); // like a compact thai jase category

    //     $brand = brand::findOrFail($id); // a jena par click karso update button ena par id throuugh click thase
    //     // $update1 = category::findOrFail($id); // a jena par click karso update button ena par id throuugh click thase
    //     // dd($update);
    //     return view ("Backend.brand.editbrand",compact("brand","categories"));
    // }

    // public function update_change(Request $request, $id)
    // {
    //     $update = brand::findOrFail($id);

    //     if($request->hasFile('image')) // a hasfile if ma etle nakhyu bcz kadach update pachi image change na karvi hoy to su update kariye pan image change na karvi hoy to
    //     {

    //         $file = $request->file("image");
    //         //  dd($file);
    //          $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
    //          $image = 'upload/brand/';
    //          $source = $image. time(). '.'.$ext;
    //          $file->move($image,$source);

    //          $update->cat_id = $request->cat_id;
    //          $update->name = $request->name;
    //          $update->description = $request->description;
    //          $update->visible = $request->visible;
    //          $update->image = $source;
    //          $update->save();

    //     }
    //     $update->cat_id = $request->cat_id;
    //     $update->name = $request->name;
    //     $update->description = $request->description;
    //     $update->visible = $request->visible;
    //     // $update->image = $source;
    //     $update->save();
    //     // dd($update);

    //     return redirect('admin/brand/')->with('message',"Brand update successfully");



    // }

    // public function destroy(Request $request,$id)
    // {
    //     $data = brand::findOrFail($id); //findor fail function e id ne sodhase e id che ke nai?
    //     $data->delete();
    //     return redirect('admin/brand')->with('message',"Category deleted successfully");
    //     // dd($request);

    // }

}


