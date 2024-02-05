<?php

namespace App\Http\Controllers\Backend\Brand;

use App\Http\Controllers\Controller;
use App\Models\Backend\Brand;
use App\Models\Backend\Category\Category;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brand = Brand::with('category')->get();

        return view('Backend.Brand.index',compact('brand'));
    }
    public function add()
    {

        $cat = Category::all();

        return view('Backend.Brand.add',compact('cat'));
    }
    public function store(Request $request)
    {
        // dd($request);

        if($request->hasFile("image"))
        {

            $file = $request->file("image");
            //  dd($file);
             $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
             $image = 'upload/brand/';
             $source = $image. time(). '.'.$ext;
             $file->move($image,$source);
            // dd($image);
        }

        Brand::create([
            "name"=> $request->name,
            "cat_id"=> $request->cat_id,
            "description"=> $request->description,
            "visible"=> $request->visible,
            "image"=> $source,

        ]);
        return redirect('admin/brand')->with('Brand',"Brand added successfully");

    }
    public function update($id)
    {

        $categories = category::all();


        $edit = Brand::findOrFail($id); // a jena par click karso update button ena par id throuugh click thase

        return view('Backend.Brand.edit',compact('edit','categories'));
    }
    public function update_change(Request $request, $id)
    {
        $update = Brand::findOrFail($id); // a jena par click karso update button ena par id throuugh click thase

        // update ni query

        if($request->hasFile('image')) // a hasfile if ma etle nakhyu bcz kadach update pachi image change na karvi hoy to su update kariye pan image change na karvi hoy to
    {

        $file = $request->file("image");
        //  dd($file);
         $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
         $image = 'upload/brand/';
         $source = $image. time(). '.'.$ext;
         $file->move($image,$source);

         $update->name = $request->name;
         $update->cat_id = $request->cat_id;
         $update->description = $request->description;
         $update->visible = $request->visible;
         $update->image = $source;
         $update->save();

    }
    $update->name = $request->name;
    $update->cat_id = $request->cat_id;
    $update->description = $request->description;
    $update->visible = $request->visible;
    // $update->image = $source;
    $update->save();

    return redirect('admin/brand')->with('update',"Category update successfully");

    }
    public function destroy(Request $request, $id)
    {
       $data = Brand::findOrFail($id);
       $data->delete();
    //    dd($data);
       return redirect('admin/brand')->with('delete',"Category delete successfully");
    }
}
