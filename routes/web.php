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

  return view('home', ['works' => $works]);
});


//WorksController
Route::get('/works', 'WorkController@index');
Route::get('/work/{id}', 'WorkController@show');


//ToolsController
Route::get('/tools', 'ToolController@index');


Route::get('/labs', 'LabController@index');


Route::get('/posts', 'PostController@index');


Route::get('/contact', 'ContactController@show');
