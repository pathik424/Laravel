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
        // $users = DB::table('users')->get();


// 2. Where Condition
        // $users = DB::table('users')->where('id',2)->get();

// 3. compulsory for above line ($users = DB::table('users')->get();)
        // return $users;

// 4. jo amathi get kadhine dump karso to tamne selct where ne method dekhase
        // $users = DB::table('users');

// 5. for dd
        //dd($users); // badha users jova mate
        // dump($users); // badha users jova mate

// 6.  koi column nu list jovu hoy to
        // foreach ($users as $user)
        //  echo $user->email . "<br>";

// 7. Find Method Array Format ma all details Jovi Hoy to Badha j column avi jase specific users ni details malse
        // $users = DB::table('users')->find(4);
        // return $users;

//8. Select Method (specific Column Show Karva mate)
        // $users = DB::table('users')
        //              ->select('name')

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

//10. Multiple Where

        // $users = DB::table('users')
                //  ->where('state','Goa') // Name Serch Karva Mate
                 // ->where('age','=','28') // age match karva mate
                 // ->where('age','>','28') // age less than
                //  ->where('name','like','%r') // % ni pachal r hase to last word search karse
                //  ->where('name','like','p%') // Name na First Character thi seacrh karvu hoy to
                 // ->where('age','<','28')  // age greater than
                    // ->get();
        // return view ('query/allusers',['data'=> $users]);
        // return $users;

// 11. Many Times Where Na Lakhvu hoy to
        // $users = DB::table('users')
            //          ->where([

            //          ['state','=','Goa'],
            //          ['age','<','28'],
            //          ['name','like','pathik patel']
            //          ])
            //          ->get();

            //  return view ('query/allusers',['data'=> $users]);

//12.  onWhere (jetli pan condition hase e badhi match karse ane badhano data batavse)

            // $users = DB::table('users')
            //          ->where('state','=','Goa') // Name Serch Karva Mate
            //          ->orWhere('age','<=','23') // age less than
            //           ->get();
        // return view ('query/allusers',['data'=> $users]);

//13.  whereBetween/whereNotBetween (a Numbers batavse ke tamaare 2 to 10 sudhina badha j id batavo)

        // $users = DB::table('users')
        //           ->whereBetween('id',[2,10]) //koi specific numbers between joi e to ena mate 2 thi laine 10 id sudhi no data batavse
        //           ->whereBetween('age',[23,100])
        //            ->whereNotBetween('age',[23,99]) //koi specific numbers between na hovi joi e to ena mate je number lakhso e banne ni vachche numbers nai batave

        //             ->get();
        // return view ('query/allusers',['data'=> $users]);

//14.  whereIn/whereNotIn (Specific Multiple value joiti hoy to)

        // $users = DB::table('users')
        //            ->whereIn('id',[1,4,8]) // Specific Amount ooiti hoy to For ID
        //            ->whereIn('state',['lali','kanij']) // Specific Amount ooiti hoy to For ID
        //            ->whereNotIn('state',['lali','kanij']) // Specific Amount na joiti hoy to For lali kanij sivay badha j dekhadse
        //            ->get();

        // return view ('query/allusers',['data'=> $users]);


//14.  whereNull/whereNotNull (Null Value Joiti hoy to)

        // $users = DB::table('users')
        //               ->whereNull('email') // email ma je null value hase eni j detail batavse
        //               ->whereNotNull('email') // email ma je null value hase eni j detail batavse
        //                ->get();

        // return view ('query/allusers',['data'=> $users]);


//15.  whereDate/whwreMonth/year/time
        // $users = DB::table('users')
        //                 ->whereDate('created_at','2023-10-31') // Date Side Filter
        //                 ->whereMonth('created_at','02') // Month Wise Filter
        //                 ->whereYear('created_at','2024') // Year Wise Filter
        //                 ->whereTime('created_at','06:06:38') // time Wise Filter
        //                 ->get();

        // return view ('query/allusers',['data'=> $users]);

//16.  orderby (a to z je pan column karvi hase e thai jase)

        // $users = DB::table('users')
        //   ->orderBy('age')
        //   ->orderBy('age','asc') // A to Z Filter
        //   ->orderBy('age', 'desc') // Z to A Filter
        //    ->get();

        // return view ('query/allusers',['data'=> $users]);

//17.  first (first hase e show thase)

        // $users = DB::table('users')
        // ->latest() // latest entry thai hase e batavse
        // ->inRandomOrder() // a darek navi value automatic laine avse
        // ->oldest() // juni entry thai hase e batavse
        // ->first();
        //  ->get();

        // return $users;

//18.  take/skip (take means table ketla numbers id joi e chiye)

        // $users = DB::table('users')
        // ->take(4) // je number lakhisu etla list batavse // 'limit' pan use karay 'take' ni jagya e
        // ->skip(2) // je number lakhisu ena pachi no data batavse // 'skip' ni jagya e 'offset' pan use karay
        // ->get();

        // ->count();
        // return $users; // ketla users che e number avse

        // return view ('query/allusers',['data'=> $users]);

// 19. max/min/avg/sum

        $users = DB::table('users')
        // ->min('age');
        // ->max('age');
        // ->avg('age');
        ->sum('age');
        return $users; // ketla users che e number avse


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
