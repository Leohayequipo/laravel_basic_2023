<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function (){
    //eliminamos el acceso al controlador y solo nos quedamos con la ruta y el metodo
    
    Route::get('/', 'home')->name('home');
   // Route::get('blog','blog')->name('blog');
    Route::get('blog/{post:slug}','post')->name('post');
            //slug es el nombre del campo de la tabla en donde va a buscar

});


Route::redirect('dashboard', 'posts')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('posts',PostController::Class)->middleware(['auth', 'verified'])->except(['show']);

require __DIR__.'/auth.php';
