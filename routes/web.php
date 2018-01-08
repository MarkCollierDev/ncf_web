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
    return view('welcome');
});

Route::get('/believe', function () {
    return view('we_believe');
});

Route::get('/activities', function () {
    return view('we_do');
});

Route::get('/whosWho', function () {
    return view('whos_who');
});

Route::get('/upComming', function () {
    return view('up_coming');
});

Route::get('/findUs', function () {
    return view('find_us');
});
