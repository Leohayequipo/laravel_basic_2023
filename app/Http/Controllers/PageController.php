<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(Request $request){
        $search = $request->search;
        $posts = Post::where('title','LIKE',"%{$search}%")->latest()->paginate();
        return view('home',['posts'=>$posts]);
    }
   
    function post(Post $post){
       
        return view('post',['post'=>$post]);
        
    }
}
