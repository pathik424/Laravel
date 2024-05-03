<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    public function list()
    {



        // join query use kari bcz created_by admin lavva mate other wise users nu id avtu hatu
        $data = DB::table('users')
        ->join('student_classes','users.id','=','student_classes.created_by')
        ->select('student_classes.*','users.name as created_by_name')
        ->get();

        // dd($data);


        return view('admin.class.list',compact('data'));
    }


    public function add()
    {
        // For Header
        $data['header_title'] = "Add new Class";
        // For Header

        return view('admin.class.add',$data);
    }

    public function store(request $request)
    {
        // dd($request->all());


        $save = new StudentClass;
        $save->name = $request->name;
        $save->active = $request->active;
        $save->created_by = Auth::user()->id;
        $save->save();

        return redirect('admin/class/list')->with('adminadd','Class Added Successfully');

    }

    public function edit($id)
    {
        $edit = StudentClass::findOrFail($id);
        // dd($edit);
        return view ("admin.class.edit",compact('edit'));

    }

    public function update(request $request,$id)
    {
        $update = StudentClass::findOrFail($id);

        $update->name = $request->name;
        $update->active = $request->active;
        $update->save();

        return redirect('/admin/class/list')->with('adminupdate',"Class Updated Successfully");
    }

    public function delete(request $request,$id)
    {

        $class = StudentClass::findOrFail($id); //findor fail function e id ne sodhase e id che ke nai?
        $class->delete();
        return redirect('admin/class/list')->with('admindelete',"Admin deleted successfully");
        // dd($request);
    }



}
