<?php

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

Route::get('/', function () {
    return view('welcome');
});
//مش غلط
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/save-post',[\App\Http\Controllers\PostController::class,'store'])->name('save-post');
Route::get('/posts',[\App\Http\Controllers\PostController::class,'index'])->name('allposts');
Route::post('/comment/save/{post_id}', [App\Http\Controllers\PostController::class, 'storeComment'])->name('save-comment');
Route::get('/post/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('show-post');
Route::post('/comment/store/{post_id}', [App\Http\Controllers\PostController::class, 'storeComment'])->name('save-comment');