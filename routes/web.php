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

/*
Route::get('/about/{user}/{id}', function($user,$id){
    return 'this is user '.$user.' with id '.$id;
});

*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/service', 'PagesController@services');
Route::get('/home', 'PagesController@home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
