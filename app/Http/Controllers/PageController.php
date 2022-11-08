<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class PageController extends Controller
{
    public function homePage(){
    
        return view('site.index')
            ->with('posts', Employee::orderBy('updated_at', 'DESC')->get());
    }

    /**
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
            return view('site.blog-detail')
            ->with('post', Employee::where('slug', $slug)->first());
    }

    public function article()
    {
        return view('site.blog')
            ->with('posts', Employee::orderBy('updated_at', 'DESC')->get());
    }
}
