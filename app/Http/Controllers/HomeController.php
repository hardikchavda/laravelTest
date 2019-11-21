<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\addnewuserinforeq;
use App\Http\Requests\adduserrequest;
use App\User;
use Illuminate\Http\Request;
use App\userInfo;
use Illuminate\Support\Facades\URL;

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
        return view('home');
    }

    public function allusers()
    {
        $data = userInfo::all();
        return view('admin/allusers', compact('data', 'data'));
    }


    public function addusers()
    {
        return view('admin/addusers');
    }

    public function addusersinfo()
    {
        return view('admin/addusersinfo');
    }

    public function addnewuser(adduserrequest $req)
    {       
        $data = new User();
        $data->name = $req->fullname;
        $data->password = bcrypt($req->password);
        $data->email = $req->email;
        $data->remember_token = $req->_token;
        $data->save();
        //return redirect()->back()->withSuccess('It Works');
        //return view('admin/addnewuser');
    }
    public function addnewuserinfo(addnewuserinforeq $req)
    {             
        $data = new userInfo();
        $data->firstname = $req->firstname;
        $data->lastname = $req->lastname;
        $data->address = $req->address;
        $data->dob = $req->dob; 
        if($req->hasFile('prfileimg'))               
        {
            $file = $req->file('prfileimg');            
            $file->move(public_path().'/images/',$file->getClientOriginalName());
            $data->profilepic = $file->getClientOriginalName();
        }        
        $data->save();
        return redirect()->back()->withSuccess('It Works');
        //return view('admin/addnewuser');
    }
}
