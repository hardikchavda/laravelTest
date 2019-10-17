<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DateTime;
use App\userInfo;

use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    function welcome()
    {
        //Raw SQL Querys
        //$data = DB::select('select * from user_infos');                
        //$data = DB::insert("insert into user_infos(name,address,created_at,updated_at) values('moin','aa ryo','".\Date("m-d-y")."','".Date("m-d-y")."')");
        //$data = DB::update("update user_infos set address='rajkot' where id=2");
        //$data = DB::delete('delete from user_infos where id = 1');
        //$data = DB::statement('truncate table user_infos');   

        // Query Builder
        //CRUD 
        //
        // Create
        // $data = DB::table('user_infos')
        //     ->insert([
        //         [
        //             'name' => 'vrunda',
        //             'address' => 'rajkot',
        //             'created_at' => new DateTime(),
        //             'updated_at' => new DateTime(),
        //         ],
        //         [
        //             'name' => 'mitali',
        //             'address' => 'rajkot',
        //             'created_at' => new DateTime(),
        //             'updated_at' => new DateTime(),
        //         ],
        //     ]);
        //Read 
        // $data = DB::table('user_infos')
        //             ->orderby('created_at','desc')
        //             //->where('name','vrunda')
        //             ->get();
        //Update
        // $data = DB::table('user_infos')            
        //     ->where('id', '4')
        //     ->update([
        //         'name' => 'purvi',
        //         'address' => 'rajkot',
        //         'created_at' => new DateTime(),
        //         'updated_at' => new DateTime(),
        //     ]);        
        // Delete
        // $data = DB::table('user_infos')            
        //     ->where('id', '7')
        //     ->delete();

        //->get();

        //Eloquent ORM
        //Read
        $data = userInfo::all();
        
        //Create
        // $data = new userInfo;
        // $data->name = 'kishorsinh';
        // $data->address = 'rajkot';
        // $data->save();

        //Update
        // $data = userInfo::find(25);
        // $data->name = 'sds' ;
        // $data->address = 'sdsdsds' ;
        // $data->save();

        //delete
        // $data = userInfo::where('name','');
        // $data->delete();

        //destroy
        //userInfo::destroy(1);

        //dd($data);

        $name = [
            'Dhaval', 'Akshay', 'Mitali', 'Moin', 'Jeegar', 'Vrunda', 'Keyur', 'Ashvin'
        ];
        $view1 = 'View';
        //return view('welcome', ['name' => $name, 'view1' => $view1]);
        //return view('welcome', compact('name','view1'));
        return view('welcome')
            ->with('name', $data)
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
