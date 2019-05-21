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
    $works = DB::table('works')->get();

    return view('home_grid', ['works' => $works]);
});

Route::get('/works', function () {
    return view('works');
});

Route::get('/tools', function () {
    return view('tools');
});

Route::get('/lab', function () {
    return view('lab');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/contact', function () {
    return view('contact');
});
