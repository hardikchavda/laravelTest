<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class adminController extends Controller
{
   public function  dashboard()
    {
        return view('admin/dashboard');
    }
    
    public function  login()
    {
        return view('admin/login');
    }

    public function  chpass()
    {
        return view('admin/forgetpass');
    }

   
}
