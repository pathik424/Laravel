<?php

namespace App\Http\Controllers\backend\post;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class postcontroller extends Controller
{
    public function postview()
    {
        $post = post::all();
        return view("backend.post.postview",compact("post"));
    }

    public function postform()
    {
        return view("backend.post.postform");
    }

    public function postform_save(Request $request)
    {
        // dd($request);

        if($request->hasFile("image")) // image che ke nai e check karse hasfile
           {
             $file = $request->file("image");
            //  dd($file);
             $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
             $image = 'upload/category/';
             $source = $image. time(). '.'.$ext;
             $file->move($image,$source);
            }

        post::create([
            "image"=> $source,
            "name"=> $request->name,
            "title"=> $request->title,
            "postedby"=> $request->postedby,
            "body"=> $request->body,
            "description"=> $request->description,

        ]);
        return redirect('admin/post')->with("message","post added successfully");
    }

    public function postupdate($id)
    {
        $update = post::findorfail($id);
        // dd($update);

        return view("backend.post.postupdate",compact("update"));
    }
    public function postupdate_change(request $request, $id)
    {
        $update = post::findorfail($id);

        // dd($update);
        if($request->hasFile('image')) // a hasfile if ma etle nakhyu bcz kadach update pachi image change na karvi hoy to su update kariye pan image change na karvi hoy to
        {

            $file = $request->file("image");
            //  dd($file);
             $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
             $image = 'upload/category/';
             $source = $image. time(). '.'.$ext;
             $file->move($image,$source);

             $update->name = $request->name;
             $update->title = $request->title;
             $update->postedby = $request->postedby;
             $update->body = $request->body;
             $update->description = $request->description;
             $update->image = $source;
             $update->save();

        }

        $update->name = $request->name;
        $update->title = $request->title;
        $update->postedby = $request->postedby;
        $update->body = $request->body;
        $update->description = $request->description;
        // $update->image = $source;
        $update->save();

        return redirect('admin/post')->with('success','Update Susceessfully');
    }

    public function destroy(request $request,$id)
    {
        $del = post::findorfail($id);
        $del->delete();
        // dd($request);
        return redirect('admin/post')->with('delete','delete successfully');
    }
}
