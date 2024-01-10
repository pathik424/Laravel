<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = product::all();
        return view("product.product",compact('product'));
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
    //    dd($file);
       $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
       $image = 'upload/product/'; //path
       $pathik = $image. time(). '.'.$ext;
       $file->move($image,$pathik);
    //   dd($image);
    //   dd($pathik);
    //   dd($ext);
     }



            $data = new product;
              $data->name = $request->name;
              $data->description = $request->description;
              $data->price = $request->price;
              $data->quantity = $request->quantity;
              $data->image = $pathik;
              $data->save();
        // dd($file);

        return redirect('/product')->with('message',"Product added successfully");
    }

    public function update($id)
    {

        $edit = product::findOrFail($id); // a jena par click karso update button ena par id throuugh click thase
        // dd($edit);

        return view ("product.editproduct",compact("edit"));
    }

    public function update_change(Request $request, $id)
    {
        $update = product::findOrFail($id); // a jena par click karso update button ena par id throuugh click thase

            // update ni query

            if($request->hasFile('image')) // a hasfile if ma etle nakhyu bcz kadach update pachi image change na karvi hoy to su update kariye pan image change na karvi hoy to
        {

            $file = $request->file("image");
            //  dd($file);
             $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
             $image = 'upload/product/';
             $source = $image. time(). '.'.$ext;
             $file->move($image,$source);

             $update->name = $request->name;
             $update->description = $request->description;
             $update->price = $request->price;
             $update->quantity = $request->quantity;
             $update->image = $source;
             $update->save();

        }
        $update->name = $request->name;
        $update->description = $request->description;
        $update->price = $request->price;
        $update->quantity = $request->quantity;
        // $update->image = $source;
        $update->save();


        return redirect('/product')->with('message',"Product update successfully");
    }

    public function destroy(request $request, $id)
    {
        $product = product::findOrFail($id);
        $product->delete();
        return redirect('/product')->with('message',"Product Delete successfully");
    }




}
