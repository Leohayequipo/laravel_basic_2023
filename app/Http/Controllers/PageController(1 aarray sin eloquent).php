<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){
        return view('home');
    }
    function blog(){
        $posts=[
            ['id'=> 1,'title'=> 'PHP','slug'=> 'php'],
            ['id'=> 2,'title'=> 'Laravel','slug'=> 'laravel'],
        ];
        return view('blog',['posts'=>$posts]);
    
    }
    function post($slug){
        $post = $slug;
        return view('post',['post'=>$post]);
        
    }
}
