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

Route::get('/about',function(){
    return view('posts.about');
});

Route::resource('posts','PostController');

// Route::post('/edit',function($post){
//     return view('posts.edit')->with('id',$post);
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
