<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){
        return view('home');
    }
    function blog(){
        //traeme los post (eloquent)
        //$posts = Post::get();
        $posts = Post::oldest()->paginate();
        
        return view('blog',['posts'=>$posts]);
    
    }
    function post(Post $post){
       
        return view('post',['post'=>$post]);
        
    }
}
