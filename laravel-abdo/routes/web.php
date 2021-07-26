<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/post_login', [UserController::class, 'post_login'])->name('post_login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/post_register', [UserController::class, 'post_register'])->name('post_register');


Route::get('/blog/index', [BlogController::class, 'index'])->name('blog.index');

Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog_edit');


Route::post('/blog/edit/{id}', [BlogController::class, 'update'])->name('blog_update');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog_create');
Route::post('/store', [BlogController::class, 'store'])->name('blog.store');


Route::get('delete/{id}',[BlogController::class,'delete'])->name('blog.delete');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');