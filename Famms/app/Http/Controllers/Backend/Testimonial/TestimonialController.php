<?php

namespace App\Http\Controllers\Backend\Testimonial;

use App\Http\Controllers\Controller;
use App\Models\testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $test = testimonial::all();
        return view('Backend.Testimonial.index',compact('test'));
    }
    public function add()
    {
        return view('Backend.Testimonial.add');
    }

    public function store(request $request)
    {
        if($request->hasFile("profilepic"))
        {
          $file = $request->file("profilepic");
         //  dd($file);
          $ext = $file->getClientOriginalExtension();
          $image = 'upload/testimonial/';
          $source = $image. time(). '.'.$ext;
          $file->move($image,$source);
         // dd($image);
        }



     testimonial::create([
         "cusname"=> $request->cusname,
         "description" => $request->description,
         "profilepic" =>$source,
     ]);


    //  dd($request);
     return redirect('admin/testimonial')->with('testimonial',"Testimonial added successfully");
    }

    public function update($id)
    {
        $edit = testimonial::findOrFail($id);

        return view ("Backend.Testimonial.edit",compact('edit'));

    }
    public function update_change(request $request,$id)
    {
        $update = testimonial::findOrFail($id);

        if($request->hasFile("profilepic"))
        {
          $file = $request->file("profilepic");
         //  dd($file);
          $ext = $file->getClientOriginalExtension();
          $image = 'upload/testimonial/';
          $source = $image. time(). '.'.$ext;
          $file->move($image,$source);
        //  dd($image);

         $update->cusname = $request->cusname;
         $update->description = $request->description;
         $update->profilepic = $source;
         $update->save();
        }

        $update->cusname = $request->cusname;
        $update->description = $request->description;
        // $update->profilepic = $source;
        $update->save();

        return redirect('admin/testimonial')->with('updatetestimonial',"Testimonial update successfully");

    }

    public function destroy($id,request $request)
    {
        $data = testimonial::findOrFail($id);
        $data->delete();
        return redirect('admin/testimonial')->with('delete',"Testimonial Deleted successfully");


    }
}
