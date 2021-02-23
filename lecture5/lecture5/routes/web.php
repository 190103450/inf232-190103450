<?php

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
    return redirect("/example");
});



Route::get('/user/{name}/{age}', function ($name,$age) {
    return view("/test",compact('name','age'));
});


Route::get('/hello', function () {
    return view('zhuldyz');
})->name('hello');
Route::get('/name/{name?}', function ($name="Zhuldyz") {
    return "Hello, ".$name."! Nice to meet you!";
})->name('hello');
Route::get('/hello', function () {
    return view('zhuldyz');
})->name('hello');

