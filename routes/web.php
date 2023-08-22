<?php
use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Route;


//Route::get('/', [PageController::class,'home'])->name('home');
//Asi accedemos a el metodo home que esta en page controller


//Route::get('blog',[PageController::class,'blog'])->name('blog');
//Asi accedemos a el metodo  blog que esta en page controller

//Route::get('blog/{slug}',[PageController::class,'post'])->name('post');
//Asi accedemos a el metodo  post que esta en page controller

//creo un grupo
Route::controller(PageController::class)->group(function (){
    //eliminamos el acceso al controlador y solo nos quedamos con la ruta y el metodo
    
    Route::get('/', 'home')->name('home');
    Route::get('blog','blog')->name('blog');
    
    Route::get('blog/{post:slug}','post')->name('post');
            //slug es el nombre del campo de la tabla en donde va a buscar

});

