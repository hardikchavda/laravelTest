<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\addnewuser;
use App\User;
use Dotenv\Validator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data  = User::all();
        return view('home', compact('data'));
    }
    public function adduser()        
    {
        
        return view('admin/adduser');
    }
    public function addnewuser(addnewuser $req)
    {       
        //dd($req->all());
        $data = new User;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = $req->password;
        $data->remember_token = $req->_token;
        $data->save();
        return redirect()->back()->withSuccess('it works');
    }
}
