<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class userController extends Controller
{
    function welcome()
    {
        $name = [
            'Dhaval', 'Akshay', 'Mitali', 'Moin', 'Jeegar', 'Vrunda', 'Keyur', 'Ashvin'
        ];
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
