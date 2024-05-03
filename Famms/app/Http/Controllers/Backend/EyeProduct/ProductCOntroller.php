<?php

namespace App\Http\Controllers\Backend\EyeProduct;

use App\Http\Controllers\Controller;
use App\Models\eyeproduct;
use App\Models\neweyeproduct;
use Illuminate\Http\Request;

class ProductCOntroller extends Controller
{
    public function index()
    {
        $product = eyeproduct::all();

        // dd($product);

        return view("Backend.Eyeproduct.index",compact('product'));

    }

    public function add()
    {

            return view("Backend.Eyeproduct.add");
        // dd('inside else');
    }


    public function store(Request $request)
    {

        // for image handling

           if($request->hasFile("image"))
           {
             $file = $request->file("image");
            //  dd($file);
             $ext = $file->getClientOriginalExtension();
             $image = 'upload/eyeproduct/';
             $source = $image. time(). '.'.$ext;
             $file->move($image,$source);
            // dd($image);
           }



        eyeproduct::create([
            "eyeproductname"=> $request->eyeproductname,
            "price" => $request->price,
            "image" =>$source,
        ]);


    //     // dd($request);
        return redirect('admin/eyeproduct')->with('eyeproduct',"Product added successfully");
    }

    public function update($id)
    {

        $edit = eyeproduct::findOrFail($id);
        // dd($edit);
        return view ("Backend.Eyeproduct.edit",compact('edit'));
    }

    public function update_change(Request $request, $id)
    {
        $update = eyeproduct::findOrFail($id);

            // update ni query

            if($request->hasFile('image'))
        {

            $file = $request->file("image");
            //  dd($file);
             $ext = $file->getClientOriginalExtension();
             $image = 'upload/upeyeproduct/';
             $source = $image. time(). '.'.$ext;
             $file->move($image,$source);

             $update->eyeproductname = $request->eyeproductname;
             $update->price = $request->price;
             $update->image = $source;
             $update->save();

        }
        $update->eyeproductname = $request->eyeproductname;
        $update->price = $request->price;
        // $update->image = $source;
        $update->save();



    //     // $update::where('id',$id)->update([
    //     //     "name"=> $request->name,
    //     //     "description" => $request->description,
    //     //     "visible" => $request->visible,
    //     //     "image" => $request->image,


        return redirect('admin/eyeproduct')->with('updateeyeproduct',"Product update successfully");
    }

    public function destroy(Request $request,$id)
    {
        $data = eyeproduct::findOrFail($id);
        $data->delete();
        return redirect('admin/eyeproduct')->with('delete',"Product deleted successfully");

    }


    // New Arrivals Product

    public function newindex()
    {
        $product = neweyeproduct::all();
        return view('Backend.Eyeproductnew.index',compact('product'));
    }

    public function newadd()
    {
        return view('Backend.Eyeproductnew.add');

    }

    public function newstore(request $request)
    {
        // dd($request);

        if($request->hasFile("image"))
        {
            $file = $request->file("image");
            //  dd($file);
            $ext = $file->getClientOriginalExtension();
            $image = 'upload/neweyeproduct/';
            $source = $image. time(). '.'.$ext;
            $file->move($image,$source);
            // dd($image);
        }


        neweyeproduct::create([
            'eyeproductname'=> $request->eyeproductname,
            'price'=> $request->price,
            'image'=> $source,
        ]);

        return redirect('admin/neweyeproduct')->with('eyeproduct',"Product added successfully");
    }

    public function newupdate($id)
    {

        $edit = neweyeproduct::findOrFail($id);
        // dd($edit);
        return view('Backend.Eyeproductnew.edit',compact('edit'));
    }

    public function newupdate_change(request $request,$id)
    {
        $update = neweyeproduct::findOrFail($id);


        if($request->hasFile("image"))
        {
            $file = $request->file("image");
            //  dd($file);
            $ext = $file->getClientOriginalExtension();
            $image = 'upload/neweyeproduct/';
            $source = $image. time(). '.'.$ext;
            $file->move($image,$source);
            // dd($image);

            $update->eyeproductname = $request->eyeproductname;
            $update->price = $request->price;
            $update->image = $source;
            $update->save();
        }

        $update->eyeproductname = $request->eyeproductname;
        $update->price = $request->price;
        $update->save();

        return redirect('admin/neweyeproduct')->with('updateeyeproduct',"Product update successfully");


    }

    public function newdestroy(request $request,$id)
    {
        $destroy = neweyeproduct::findOrFail($id);
        $destroy->delete();

        return redirect('admin/neweyeproduct')->with('delete',"Product deleted successfully");

    }


}

