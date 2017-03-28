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
    return view('Blog.BlogTest', ['post_name' => 'a normal post']);
});


//post module

//show add post page
Route::get('/article', function(){
   return view('Blog.add');
});
//add a post
Route::post('/article', 'BlogController@add');

//update a post

Route::put('/article/{id}', 'BlogController@update');

Route::get('/article/update/{id}', function($id){
   return view('Blog.update', ['id' => $id]);
});
Route::get('/article/delete/{id}', function($id){
    return view('Blog.delete', ['id' => $id]);
});
//delete a post
Route::delete('/article/{id}', 'BlogController@delete');

//get a post
Route::get('/article/{id}', ['uses'=> 'BlogController@get', 'as'=> 'getPost']);
Auth::routes();

Route::get('/home', 'HomeController@index');
