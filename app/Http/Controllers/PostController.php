<?php

namespace App\Http\Controllers;
//como necesito hacer una consulta imposto el modelo
use App\Models\Post;

use Illuminate\Http\Request;
use illuminate\Support\Str;

class PostController extends Controller
{
    //metodo    
    public function index(){
        return view('posts.index',
        [
            'posts'=>Post::latest()->paginate()
        ]);
    }
  
    //metodo    
    public function create(Post $post){
        return view('posts.create',  
        [
            'post'=>$post
        ]);
       
    }

    //metodo    
    public function store(Request $request){
                        //user  //metodo  //crear el registro
         //hay que ir la modelo user y crear metodo post
         /* public function posts(){
            return $this->hasMany(Post::class);
            }*/     
            
        //capa validacion
        //'slug'=> 'required|unique:posts,slug', el campo slug unico en la tabla
        $request->validate([
            'title'=> 'required',
            'slug'=> 'required|unique:posts,slug',
            'body'=> 'required',
        ]);
        $post = $request->user()->posts()->create([
            'title'=> $request->title,
            'slug'=>  $request->slug,
            'body'=> $request->body,

        ]);
        //primero salva y luego redirige
        //que exista una redireccion
        //redigir a la ruta de edicion
        return redirect()->route('posts.edit',$post);
       
    }
     //metodo    
    public function edit(Post $post){
        return view('posts.edit',
        [
            'post'=>$post
        ]);
    }

     //metodo    
                                //necesito recuperar al registro
     public function update(Request $request, Post $post){
        //capa validacion
        //revisa todos pero ignora este 
        //'slug'=> 'required|unique:posts,slug' . $post->id,

        $request->validate([
            'title'=> 'required',
            'slug'=> 'required|unique:posts,slug' . $post->id,
            'body'=> 'required',
        ]);
        $post -> update([
            'title'=> $request->title,
            'slug'=>  $request->slug,
            'body'=> $request->body,

        ]);
        return redirect()->route('posts.edit',$post);

    }
      //las rutas apuntan a los metodos
    public function destroy(Post $post){
        $post->delete();
        return back();
    }
}
