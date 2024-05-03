<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function list()
    {
        // please check user model
        $data['getRecord'] = User::getadmin();

        // For Header
        $data['header_title'] = "Admin List";
        // For Header

        // dd($data);


        return view('admin.admin.list',$data);
    }

    public function add()
    {
        // For Header
        $data['header_title'] = "Add new Admin";
        // For Header

        return view('admin.admin.add',$data);
    }

    public function store(request $request)
    {
        // dd($request->all());
         //  Validate see the file add in admin table {{$errors->first('email')}}
        request()->validate([
            'email' => 'required|email|unique:users'
        ]);

        $user = new User;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->role_as = 1;
        $user->save();

        return redirect('admin/list')->with('adminadd','Admin Added Successfully');

    }

    public function edit($id)
    {
        // go to user model
        $data['getRecord'] = User::getsingle($id);

        if(!empty($data['getRecord']))
        {
            $data['header_title'] = "Edit List";

            return view('admin.admin.edit',$data);

        }
        else
        {
            abort(404);
        }
    }

    public function update($id,request $request)
    {
        $user = User::getSingle($id);
        $user->name = trim($request->name);
        $user->email = trim($request->email);

        if(!empty($request->passwprd))// jo password change na karvo hoy to if condition
        {
            $user->password = Hash::make($request->password);
        }
        $user->role_as = 1;
        $user->save();

        return redirect('admin/list')->with('adminupdate','Admin Updated Successfully');
    }

    public function delete($id, request $request)
    {
        $user = User::findOrFail($id); //findor fail function e id ne sodhase e id che ke nai?
        $user->delete();
        return redirect('admin/list')->with('admindelete',"Admin deleted successfully");
        // dd($request);

    }
}
