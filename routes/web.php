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

Route::get('/','indexController@index');

// route::get('/test',function(){
//     return 'WELCOME';
// })->name('welcome');

// route::get('/test1/{id}',function($id){

//     return $id;
// })->name('id');

// route::get('/test2/{id?}',function(){
//     return 'welcome';
// })->name('id2');

// route::get('/landing',function(){
//     return view('Landing');
// });

// route::get('/index',function(){
//     return view('index');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
