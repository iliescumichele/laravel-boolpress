<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('prova', function(){

    $success = true;
    $user = [
        'name' => 'Ugo',
        'lastname' => 'De Ughi'
    ];

    return response() -> json( compact('user') );
});


route::namespace( 'Api' )
    ->prefix( 'posts' )
    ->group( function(){
        Route::get('/', 'PageController@index');
        Route::get('/{slug}', 'PageController@show');
        Route::get('/post-category/{slug}', 'PageController@getPostsByCategory');
        Route::get('/post-tag/{slug}', 'PageController@getPostsByTag');
    });
