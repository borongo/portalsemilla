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
    return view('welcome');
});

Auth::routes();
Route::resource('posts',"PostController");
Route::resource('comments',"CommentsController");
Route::match(['POST','PATCH'],'like','PostController@like')->middleware(['auth']);
Route::match(['POST','PATCH'],'pin','PostController@pin')->middleware(['auth']);
Route::resource('desafio','DesafioController')->middleware(['auth']);
Route::resource('muro',"MuroController")->middleware(['auth']);
Route::get('/home', 'HomeController@index')->name('home');

