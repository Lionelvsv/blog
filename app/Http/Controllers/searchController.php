<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class searchController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function liveSearch(Request $request)
    { 
        $search = $request->id;

        if (is_null($search))
        {
           return view('layouts.livesearch');		   
        }
        else
        {
            $posts = Post::where('title','LIKE',"%{$search}%")
                           ->get();

            return view('layouts.livesearchajax')->withPosts($posts);
        }
    }
}
