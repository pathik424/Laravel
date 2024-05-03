<?php

namespace App\Http\Controllers;

use App\Models\StudentSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function list()
    {

        // join query use kari bcz created_by admin lavva mate other wise users nu id avtu hatu
        $data = DB::table('users')
        ->join('student_subjects','users.id','=','student_subjects.created_by')
        ->select('student_subjects.*','users.name as created_by_name')
        ->get();

        // dd($data);


        return view('admin.subject.list',compact('data'));
    }


    public function add()
    {
        // For Header
        $data['header_title'] = "Add new Class";
        // For Header

        return view('admin.subject.add',$data);
    }

    public function store(request $request)
    {
        // dd($request->all());


        $save = new StudentSubject;
        $save->name = $request->name;
        $save->type = $request->type;
        $save->status = $request->status;
        $save->created_by = Auth::user()->id;
        $save->save();

        return redirect('admin/subject/list')->with('adminadd','Class Added Successfully');

    }

    public function edit($id)
    {
        $edit = StudentSubject::findOrFail($id);
        // dd($edit);
        return view ("admin.subject.edit",compact('edit'));

    }

    public function update(request $request,$id)
    {
        $update = StudentSubject::findOrFail($id);

        $update->name = $request->name;
        $update->type = $request->type;
        $update->status = $request->status;
        $update->save();

        return redirect('/admin/subject/list')->with('adminupdate',"Class Updated Successfully");
    }

    public function delete(request $request,$id)
    {

        $class = StudentSubject::findOrFail($id); //findor fail function e id ne sodhase e id che ke nai?
        $class->delete();
        return redirect('admin/subject/list')->with('admindelete',"Admin deleted successfully");
        // dd($request);
    }
}
