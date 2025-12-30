<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends BaseController
{
    //
    public function blogs(){
        $blogs=Blog::orderBy('id', 'DESC')->get();
        return view('blogs',compact('blogs'));
    }
    public function blogDetails($slug){
        $blog=Blog::where('slug',$slug)->first();
        $notthisblogs=Blog::where('slug','<>',$slug)->latest()->take(3)->get();
        return view('blog_details',compact('blog','notthisblogs'));
    }
}
