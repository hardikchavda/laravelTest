<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;
use Redirect;

class adminController extends Controller
{
    public function  dashboard()
    {
        return view('admin/dashboard');
    }

    public function  login()
    {
        if (Auth::guest())
            return view('admin/login');
        else
            return Redirect::to('admin/dashboard');
    }

    public function  logout()
    {
        Auth::logout();
        return Redirect::to('admin/login');
    }


    public function  logincheck(Request $req)
    {

        $nm = $req->name;
        $pwd = $req->password;
        //dd(Auth::attempt(['name' => $nm, \'password' => $pwd]));
        if (Auth::attempt(['name' => $nm, 'password' => $pwd]))
            return Redirect::to('admin/dashboard');
        else
            return Redirect::to('admin/login');
    }

    public function  chpass()
    {
        return view('admin/forgetpass');
    }


    public function  register()
    {
        return view('admin/register');
    }

    public function  registernew(Request $req)
    {
        $data = new User();
        $data->name = $req->name;
        $data->password = bcrypt($req->password);
        $data->email = $req->email;
        $data->remember_token = $req->_token;
        $data->save();
        //$data::create($req->all());
        return  Redirect::to('admin/login');
    }
}
