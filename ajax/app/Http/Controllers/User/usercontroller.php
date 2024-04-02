<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Contracts\DataTable;
use Datatables;

class usercontroller extends Controller
{

    public function index(Request $request)
    {
        // if ($request->ajax()) {
        //     $data = User::latest()->get();
        //     return Datatables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('action', function($row){
        //             $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
        //             return $actionBtn;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        //      }
}

    public function create()
    {
        return view('User.create');
    }



    public function store(request $request)
    {
        // return $request->all();

        $request->validate([
            'name' => 'required|min:2|max:15', // anathi e thase ke atleast 2 charcter type compulsory
            'email' => 'required',
            // 'type' => 'required',
        ]);
        // return 'success';

        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,

        ]);
        return response()->json([
            'success' => 'User added successfully'
        ], 201);


    }
}
