<?php
use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class,'home'])->name('home');
//Asi accedemos a el metodo home que esta en page controller


Route::get('blog',[PageController::class,'blog'])->name('blog');
//Asi accedemos a el metodo  blog que esta en page controller

Route::get('blog/{slug}',[PageController::class,'post'])->name('post');
//Asi accedemos a el metodo  post que esta en page controller
