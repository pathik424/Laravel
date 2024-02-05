<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view("Backend.Home.home");
    }
    public function user(request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            //Where
            $user = User::where('username', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->get(); // For Search Option

            // $user = User::where('username', '=', "%$search%")->orwhere('email', '=', "%$search%")->get(); // CHange Only "=" chee ema khali same search karvu pade "LIKE" ma ena jevu hot to search thai jase
        } else {

            $user = User::all();
        }

        // $user = User::paginate(3); // For Pagination // go to  users index file

        return view("Backend.User.index",compact('user','search',));
    }

    public function add_user()
    {
        return view("Backend.User.adduser");
    }

    public function store_user(request $request)
    {
            // dd($request);

            User::create([
                "username"=> $request->username,
                "firstname"=> $request->firstname,
                "lastname"=> $request->lastname,
                "email"=> $request->email,
                "password"=> $request->password,

            ]);
            return redirect("/admin/users")->with('adduser',"user added sucessfully");
    }

    Public Function update_user($id)
    {
        $edituser = User::findOrFail($id);

        return view("Backend.User.edituser",compact('edituser'));

    }

public function update_userchange(request $request, $id)

{
    $updateuser = User::findOrFail($id);

    $updateuser->username = $request->username;
    $updateuser->firstname = $request->firstname;
    $updateuser->lastname = $request->lastname;
    $updateuser->email = $request->email;
    $updateuser->password = $request->password;
    $updateuser->save();

    return redirect('admin/users')->with('update',"User update successfully");
}

public function delete_user(request $request, $id)
{
    $del = user::findOrFail($id);
    $del->delete();
    return redirect('admin/users')->with('delete',"User Delete successfully");

}

}
