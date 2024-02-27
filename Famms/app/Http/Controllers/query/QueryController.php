<?php

namespace App\Http\Controllers\query;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function showUser()
    {
        // 1. Show For All Details
        $users = DB::table('users')->get();


        // 2. Where Condition
        // $users = DB::table('users')->where('id',2)->get();

        // 3. compulsory for above line ($users = DB::table('users')->get();)
        // return $users;

        // 4. jo amathi get kadhine dump karso to tamne selct where ne method dekhase
        // $users = DB::table('users');

        // 5. for dd
        // dd($users); // badha users jova mate
        // dump($users); // badha users jova mate

        // 6.  koi column nu list jovu hoy to
        // foreach ($users as $user)
        //  echo $user->email . "<br>";

        // 7. Find Method Array Format ma all details Jovi Hoy to Badha j column avi jase
        // $users = DB::table('users')->find(3);
        // return $users;

        //8. Select Method (specific Column Show Karva mate)
        // $users = DB::table('users')
        //              ->select('name')
        //
        //              ->get();
        // return $users;

        //9. Distinct Method (Unique Value same value kadhi nakhase)
        // $users = DB::table('users')
        //              ->select('name')
        //              ->distinct() // jetla pan list hase emathi unique value kadhi ne apse same vastu jatu rehse
        //              ->get();
        // return $users;

        //9. pluck Method (badhan name only show thse je value pass karso e details)
        // $users = DB::table('users')
        //              ->pluck('username');
        // return $users;

        //9. Multiple Where

        $users = DB::table('users')
                 // ->where('state','Goa') // Name Serch Karva Mate
                 // ->where('age','=','28') //
                 // ->where('age','>','28')
                 // ->where('age','<','28')
        ->get();
        return view ('query/allusers',['data'=> $users]);
        // return $users;

        // Json ma data Joito hoy to return $user karvu


        // data je che e Compact Karayu
        // return view ('query/allusers',['data'=> $users]);



    }

    public function singleuser(string $id)
    {

        $users = DB::table('users')->where('id',$id)->get();
        // return $users;

        // Jena Par Click Karsu view Ena Par full open thase
        return view ('query/users',['data'=> $users]);


    }
}
