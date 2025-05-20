<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('userview.home');
    }
    public function blogdetails()
    {
        
        return view('userview.blogdetails');
    }
    public function blogcontact()
    {
        return view('userview.blogcontact');
    }

}
