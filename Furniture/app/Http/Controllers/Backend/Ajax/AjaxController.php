<?php

namespace App\Http\Controllers\Backend\Ajax;

use App\Http\Controllers\Controller;
use App\Models\students;
use Illuminate\Http\Request;

class AjaxController extends Controller
{

public function viewform()
{

    $data = students::all();

    return view('Backend.AJax.form', compact('data'));

    // dd($data);

}




    public function AddStudent(Request $request)
    {



        if($request->hasFile("image"))
        {

            $file = $request->file("image");
            //  dd($file);
             $ext = $file->getClientOriginalExtension(); // jpg hase je image type hase e automatic define thai jase
             $image = 'upload/ajax/';
             $source = $image. time(). '.'.$ext;
             $file->move($image,$source);
            // dd($image);
        }

        students::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "image"=> $source,

        ]);


        // $file = $request->file('file');
        // $filename = time().''.$file->getClientOriginalName();
        // $filepath = $file->storeAs('images',$filename,'upload/ajax');


        // students::create([
        //     "name"=> $request->name,
        //     "email"=> $request->email,
        //     "image"=> $filepath,

        //         ]);

       return response()->json(['res'=>'Get']);

       // return redirect('add-student')->with('Brand',"Brand added successfully");
    }

    public function getStudents()
    {
        $students = students::all();

        return response()->json(['students'=>$students]);

    }
}
