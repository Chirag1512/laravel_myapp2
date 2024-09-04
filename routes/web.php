<?php

use App\Http\Controllers\DBcontroller;
use App\Http\Controllers\Postdata;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\SubjectCheck;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// use App\Http\Middleware\GlobalExample;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/about', function () {
//     return view('/about');
// });

// Route::get('/contact',function(){
//     return view('/contact');
// });

// Route::get('/dashbord',function(){
//     return view('/dashbord');
// });


// Route::get("/Voter/{age}/{subject}", function () {
//     return view("voter");
// })->middleware('group1');



// Route::middleware([AgeCheck::class,SubjectCheck::class])->group(function () {
 
//     Route::get('/about/{age}/{subject}', function () {
//         return view('/about');
//     });
    
//     Route::get('/contact/{age}',function(){
//         return view('/contact');
//     })->withoutMiddleware([AgeCheck::class]);
    
// });


Route::get('/user',[UserController::class,'index']);
Route::get('/user/{id}/{name}',[UserController::class,'userid']);

Route::get('/users',[DBcontroller::class,'showUser']);

Route::get('/insert',[DBcontroller::class,'insertUser']);

Route::get('/data',[DBcontroller::class,'showUser']);

Route::view('/postdata','newdata');
Route::post('/postdata',[Postdata::class,'insert']);

Route::view('/login','login');
Route::post('/logincheck',[Postdata::class,'check']);

Route::post('/users', [Postdata::class, 'search']);
Route::get('/update', [Postdata::class, 'updateUser']);
Route::post('/update', [Postdata::class, 'updatedUser']);


