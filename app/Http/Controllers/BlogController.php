<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
     //Controller for create route
    public function create()
    {
        $categories = Category::latest()->get();
        return view('admin.blogs.create', compact('categories'));
    }


     //Controller for store route
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $blogs = Blog::create([
            'photo' => $request->photo->store('blogs', 'public'),//store is a keyword, ('blogs' , 'public')=location
            'title' => $request->title,
            'short_description' => $request->s_desc,
            'description' => $request->desc,
            'category_id' => $request->cate_id,
            'status' => 1,
        ]);
        return redirect()->route('blog.create');
    }

    //Controller for List route
    public function list()
    {
        //Show with latest data
        $blogs = Blog::latest()->get();
        return view('admin.blogs.list' , compact('blogs'));
    }

     //Controller for status route
    public function status(Blog $blog)
    {
        if($blog->status == 0)
        {
            $status = 1;
        }else {
            $status = 0;
        }
        //$blog_status and $status variable relation with database status
        $blog->update([
            'status' => $status,
        ]);
        return back();
    }

     //Controller for delete route
     public function delete($id)
     {
        //Frist confrim that blog is listed in database otherwise the function wiil die
        $blog = Blog::findOrFail($id);

        // the picture needs to delete from the public folder
        if($blog->photo && Storage::disk('public')->exists($blog->photo))
        {
            Storage::disk('public')->delete($blog->photo);
        }

        //then delete the blog
        $blog->delete();
        return redirect()->back()->with('success','Deleted');
     }
}
