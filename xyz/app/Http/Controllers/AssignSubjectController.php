<?php

namespace App\Http\Controllers;

use App\Models\AssignSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AssignSubjectController extends Controller
{
    public function list()
    {

        // // join query use kari bcz created_by admin lavva mate other wise users nu id avtu hatu
        $data = DB::table('assign_subjects')
        ->join('student_subjects','student_subjects.id','=','assign_subjects.subject_id')
        ->join('student_classes','student_classes.id','=','assign_subjects.class_id')
        ->join('users','users.id','=','assign_subjects.created_by')
        ->select('student_classes.name as class_name','student_subjects.name as subject_name','users.name as created_by_name','assign_subjects.id','assign_subjects.status','assign_subjects.created_at')
        ->get();


        // dd($data);

        return view('admin.assign.list',compact('data'));
    }

    public function add()
    {
        $studentclass = DB::table('student_classes')
        ->where('student_classes.active','=', 1)
        ->get();

        $studentsubject = DB::table('student_subjects')
        ->where('student_subjects.status','=', 1)
        ->get();

        return view('admin.assign.add',compact('studentclass','studentsubject'));
    }

    public function store(request $request)
    {
        // dd($request->all());


        $save = new AssignSubject;
        $save->class_id = $request->class_id;
        $save->subject_id = $request->subject_id;
        $save->status = $request->status;
        $save->created_by = Auth::user()->id;
        $save->save();

        return redirect('admin/assign/list')->with('adminadd','Class Added Successfully');

    }

    public function edit($id)
    {
        $edit = AssignSubject::findOrFail($id);
        // dd($edit);
        return view ("admin.assign.edit",compact('edit'));

    }



}
