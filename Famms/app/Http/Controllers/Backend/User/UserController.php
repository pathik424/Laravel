<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\Myuser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userview()
    {
        $users = User::all();
        return view('Backend.User.index',compact('users'));
        // dd($users);
    }


    public function adduser()
    {

        return view('Backend.User.add');
        // dd($users);
    }
    public function storeuser(request $request)
    {

      $users = new User;
      $users->name = $request->name;
    //   $users->username = $request->username;
      $users->email = $request->email;
    //   $users->city = $request->city;
    //   $users->age = $request->age;
      $users->password = $request->password;
      $users-> save();

      return redirect('admin/myuser')->with('users',"New User added successfully");
    }

    public function updateuser($id)
    {
        $edituser = User::findOrFail($id);
        return view('Backend.User.edit',compact('edituser'));
        // dd($users);
    }

    public function update_changeuserdata(request $request,$id)
    {
        $updateuser = User::findOrFail($id);

        $updateuser->name = $request->name;
        // $updateuser->username = $request->username;
        $updateuser->email = $request->email;
        // $updateuser->age = $request->age;
        // $updateuser->city = $request->city;
        $updateuser->password = $request->password;
        $updateuser->save();

        // dd($users);
        return redirect('admin/myuser')->with('updateusers',"Update User successfully");
    }

    public function delete_user($id)
    {
        $delete = User::findOrFail($id);
        $delete->delete();
        return redirect('admin/myuser')->with('deleteusers',"Users deleted successfully");
    }

    public function adminlogout()
    {
        Auth::logout();
        Session:flush();
        return redirect('/dashboard');
    }

}
