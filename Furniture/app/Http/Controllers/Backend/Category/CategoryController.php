<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = category::all();

        return view('Backend.Category.index',compact('category'));
    }
    public function add()
    {
        return view('Backend.Category.add');
    }
    public function store(Request $request)
    {
        // dd($request);

        if($request->hasFile("image"))
        {

            $file = $request->file("image");
            //  dd($file);
             $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
             $image = 'upload/category/';
             $source = $image. time(). '.'.$ext;
             $file->move($image,$source);
            // dd($image);
        }

        Category::create([
            "name"=> $request->name,
            "description"=> $request->description,
            "visible"=> $request->visible,
            "image"=> $source,

        ]);
        return redirect('admin/category')->with('message',"Category added successfully");

    }
    public function update($id)
    {
        $edit = category::findOrFail($id); // a jena par click karso update button ena par id throuugh click thase

        return view('Backend.Category.edit',compact('edit'));
    }
    public function update_change(Request $request, $id)
    {
        $update = category::findOrFail($id); // a jena par click karso update button ena par id throuugh click thase

        // update ni query

        if($request->hasFile('image')) // a hasfile if ma etle nakhyu bcz kadach update pachi image change na karvi hoy to su update kariye pan image change na karvi hoy to
    {

        $file = $request->file("image");
        //  dd($file);
         $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
         $image = 'upload/category/';
         $source = $image. time(). '.'.$ext;
         $file->move($image,$source);

         $update->name = $request->name;
         $update->description = $request->description;
         $update->visible = $request->visible;
         $update->image = $source;
         $update->save();

    }
    $update->name = $request->name;
    $update->description = $request->description;
    $update->visible = $request->visible;
    // $update->image = $source;
    $update->save();

    return redirect('admin/category')->with('update',"Category update successfully");

    }
    public function destroy(Request $request, $id)
    {
       $data = Category::findOrFail($id);
       $data->delete();
    //    dd($data);
       return redirect('admin/category')->with('delete',"Category delete successfully");
    }


}
