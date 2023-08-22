<?php

namespace App\Http\Controllers;
//como necesito hacer una consulta imposto el modelo
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index',
        [
            'posts'=>Post::latest()->paginate()
        ]);
    }
}
