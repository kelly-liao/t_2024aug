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
// route::get('/home',function(){
//     return "home";
// });

// route::get('/about',function(){
//     return "about page";
// });

// route::get('/about',[App\Http\Controllers\Testcontroller::class,'index']);
// route::get('/about/{id}',[App\Http\Controllers\Testcontroller::class,'index']);
route::get('/about-us',[App\Http\Controllers\Testcontroller::class,'index'])->name('about');

// way 1
route::get('/account/register',[App\Http\Controllers\Testcontroller::class,'register']);
route::get('/account/login',[App\Http\Controllers\Testcontroller::class,'login']);

// way 2
route::group(['prefix'=>'account'],function(){
    route::get('/register',[App\Http\Controllers\Testcontroller::class,'register']);
    route::get('/login',[App\Http\Controllers\Testcontroller::class,'login']);
    
});