<?php

namespace App\Http\Controllers;
//como necesito hacer una consulta imposto el modelo
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //metodo    
    public function index(){
        return view('posts.index',
        [
            'posts'=>Post::latest()->paginate()
        ]);
    }
    //las rutas apuntan a los metodos
    public function destroy(Post $post){
        $post->delete();
        return back();
    }
    //metodo    
    public function create(){
        return view('posts.create');
       
    }
     //metodo    
    public function edit(Post $post){
        return view('posts.edit',
        [
            'post'=>$post
        ]);
    }
}
