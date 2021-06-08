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
/* HOMEPAGE */
Route::get('/', function () {

    $fumetti= config("fumetti");
    return view('home', ["cards" => $fumetti]);
});

Route::get("/news.blade.php", function(){
    return view("news");
});
