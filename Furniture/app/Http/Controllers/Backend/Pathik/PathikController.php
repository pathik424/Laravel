<?php

namespace App\Http\Controllers\Backend\Pathik;

use App\Http\Controllers\Controller;
use App\Models\pathik;
use Illuminate\Http\Request;

class PathikController extends Controller
{
    public function index()
    {
        $pat = pathik::all();

        return view('Backend.Pathik.index',compact('pat'));
    }
    public function add()
    {
        return view('Backend.Pathik.add');
    }
    public function store(Request $request)
    {
        // dd($request);

        if($request->hasFile("image"))
        {

            $file = $request->file("image");
            //  dd($file);
             $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
             $image = 'upload/pathik/';
             $source = $image. time(). '.'.$ext;
             $file->move($image,$source);
            // dd($image);
        }

        pathik::create([
            "name"=> $request->name,
            "price"=> $request->price,
            "description"=> $request->description,
            "visible"=> $request->visible,
            "image"=> $source,

        ]);
        return redirect('admin/pathik')->with('message',"Category added successfully");

    }
    // public function update($id)
    // {
    //     $edit = category::findOrFail($id); // a jena par click karso update button ena par id throuugh click thase

    //     return view('Backend.Category.edit',compact('edit'));
    // }
    // public function update_change(Request $request, $id)
    // {
    //     $update = category::findOrFail($id); // a jena par click karso update button ena par id throuugh click thase

    //     // update ni query

    //     if($request->hasFile('image')) // a hasfile if ma etle nakhyu bcz kadach update pachi image change na karvi hoy to su update kariye pan image change na karvi hoy to
    // {

    //     $file = $request->file("image");
    //     //  dd($file);
    //      $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
    //      $image = 'upload/category/';
    //      $source = $image. time(). '.'.$ext;
    //      $file->move($image,$source);

    //      $update->name = $request->name;
    //      $update->description = $request->description;
    //      $update->visible = $request->visible;
    //      $update->image = $source;
    //      $update->save();

    // }
    // $update->name = $request->name;
    // $update->description = $request->description;
    // $update->visible = $request->visible;
    // // $update->image = $source;
    // $update->save();

    // return redirect('admin/category')->with('update',"Category update successfully");

    // }
    // public function destroy(Request $request, $id)
    // {
    //    $data = Category::findOrFail($id);
    //    $data->delete();
    // //    dd($data);
    //    return redirect('admin/category')->with('delete',"Category delete successfully");
    // }






}