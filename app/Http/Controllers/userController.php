<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\userInfo;
use DateTime;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    function welcome()
    {
        //$name = DB::insert("insert into user_infos (firstname,lastname,address,dob) values('hardik','chavda','rajkot','12-02-1989')");
        // $name = DB::table('user_infos')
        //         ->where('created_at','2019-09-27 16:56:47')
        //         ->orWhere('firstname','hardik')
        //         ->orderBy('firstname')
        //         ->get();
        $name = DB::table('user_infos')
                    ->update([
                        'firstname'=>'don',
                        'lastname'=>'janardan',
                        'updated_at'=> new DateTime()
                    ])
                    ->where('id',2);
                    
        dd($name);
        //$name = App\userInfo::all();        
        // $name = [
        //     'Dhaval', 'Akshay', 'Mitali', 'Moin', 'Jeegar', 'Vrunda', 'Keyur', 'Ashvin'
        // ];
        $view1 = 'View';
        //return view('welcome', ['name' => $name, 'view1' => $view1]);
        //return view('welcome', compact('name','view1'));
        return view('welcome')
            ->with('name', $name)
            ->with('view1', $view1);
        // return view('welcome')
        //     ->withName($name)
        //     ->withView1($view1);
    }
    function test()
    {
        return view('test');
    }
}
