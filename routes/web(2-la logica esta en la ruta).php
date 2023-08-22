<?php
use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
   
})->name('home');


Route::get('blog',function(){
  
})->name('blog');

Route::get('blog/{slug}',function($slug){
    $post = $slug;
    return view('post',['post'=>$post]);
})->name('post');

