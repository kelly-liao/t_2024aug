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

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// line 24-31 is for testing how the route works 
// Route::get('/home',function(){
//     return "home";
// });

// Route::get('/about',function(){
//     return "about page";
// });

// Route::get('/about',[App\Http\Controllers\Testcontroller::class,'index']);
// Route::get('/about/{id}',[App\Http\Controllers\Testcontroller::class,'index']);
Route::get('/about-us',[App\Http\Controllers\Testcontroller::class,'index'])->name('about');

// way 1
Route::get('/account/register',[App\Http\Controllers\Testcontroller::class,'register']);
Route::get('/account/login',[App\Http\Controllers\Testcontroller::class,'login']);

// way 2
Route::group(['prefix'=>'account'],function(){
    Route::get('/register',[App\Http\Controllers\Testcontroller::class,'register']);
    Route::get('/login',[App\Http\Controllers\Testcontroller::class,'login']);
});

Route::get('/product',[App\Http\Controllers\Testcontroller::class,'product'])->name('product.index');

Route::get('/test/create',[App\Http\Controllers\Testcontroller::class,'create']);
Route::post('/test/store',[App\Http\Controllers\Testcontroller::class,'store'])->name('test.store');

//posts
Route::get('/posts/store',[App\Http\Controllers\PostController::class,'store']);
Route::get('/posts',[App\Http\Controllers\PostController::class,'index']);
Route::get('/post/{id}',[App\Http\Controllers\PostController::class,'show']);

Route::get('/post/update/{id}',[App\Http\Controllers\PostController::class,'update']);
Route::get('/post/delete/{id}',[App\Http\Controllers\PostController::class,'destory']);
Route::get('/show',[App\Http\Controllers\PostController::class,'getPost']);