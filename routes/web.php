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

//Route::get('/', function () {
  //  return view('layouts.master');
//});
Route::get('/', function () {
   return view('welcome');
});
Route::get('/header', function () {
   return view('header');
});
Route::get('/donate', function () {
   return view('donate');
});
route::get('master','PagesController@master');
route::get('welcome','PagesController@index');
route::get('who_help','PagesController@help');
route::get('our_campaign','PagesController@campaign');
route::get('how','PagesController@how_to_help');
route::get('feedback','PagesController@feedback');
route::get('login','PagesController@login');
route::post('create','FeedbackController@create');
//route::resource('views','PagesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
