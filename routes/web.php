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
    //return view('welcome');
    return view('index');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/career-view', function () {
    return view('career-view');
});
Route::post('/career-view', function () {
    return view('career-view');
});
