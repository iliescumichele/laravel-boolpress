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

//le torre vengono lette dall'alto al basso
Auth::routes();

//Route::middleware('auth') -> get('/admin', 'Admin\HomeController@index')->name('index');
Route::middleware('auth') 
    ->name('admin.')
    ->prefix('admin')
    ->namespace('admin')
    ->group( function(){
        //rotte protette
       Route::get('/', 'HomeController@index')->name('home');
       //rotte CRUD
       Route::resource('posts', 'PostController');
    })
;

Route::get('{any?}', function(){
    return view('guest.home');
}) ->where('any', '.*') ->name('home');