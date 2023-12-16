<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class Categorycontroller extends Controller
{
    public function index()
    {
        // seletct ni query che a

        $category = category::all();

        return view("Backend.category.category",compact('category'));

    }

    public function add()
    {
        return view("Backend.category.addcategory");
    }

    public function store(Request $request)
    {

        // for image handling

           if($request->hasFile("image")) // image che ke nai e check karse hasfile
           {
             $file = $request->file("image");
            //  dd($file);
             $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
             $image = 'upload/category/';
             $source = $image. time(). '.'.$ext;
             $file->move($image,$source);
            // dd($image);
           }


        // 1st Technuiques for data connection to database Create ni quesry che

        category::create([
            "name"=> $request->name,
            "description" => $request->description,
            "visible" => $request->visible,
            "image" =>$source,
        ]);

        // 2nd Technuiques for data connection to database

               // $data = new CategoryA;
              // $data->name = $request->name;
              // $data->description = $request->description;
              // $data->visible = $request->visible;
              // $data->image = time();
              // $data->save();

         // 3rd Technuiques for data connection to database

             // $category->name = $request->name;
             // $category->description = $request->description;
             // $category->visible = $request->visible;
             // $category->image = time();
             // $category->save();

         // 4th Technuiques for data connection to database

             // $category->create([
             //     'name'=>$request->name,
             //     'description'=>$request->description,
             //     'visible'=>$request->visible,
             //     'image'=>time(),
             // ]);

        // dd($request);
        return redirect('admin/category')->with('message',"Category added successfully");
    }

    public function update($id)
    {

        $edit = category::findOrFail($id); // a jena par click karso update button ena par id throuugh click thase
        // dd($edit);
        return view ("Backend.category.editcategory",compact("edit"));
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



        // $update::where('id',$id)->update([
        //     "name"=> $request->name,
        //     "description" => $request->description,
        //     "visible" => $request->visible,
        //     "image" => $request->image,


        return redirect('admin/category')->with('message',"Category update successfully");
    }

    public function destroy(Request $request,$id)
    {
        $data = category::findOrFail($id); //findor fail function e id ne sodhase e id che ke nai?
        $data->delete();
        return redirect('admin/category')->with('message',"Category deleted successfully");

    }
}
