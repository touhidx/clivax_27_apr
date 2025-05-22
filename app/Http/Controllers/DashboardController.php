<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        $blogs = Blog::all();
        $categories = Category::all();

        return view('userview.home' , compact('blogs','categories'));
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
