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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//journalist
Route::get('journalist','JournalistController@index');
Route::get('journalist/{id}','JournalistController@show');
//article
Route::get('article','ArticleController@index');
Route::get('article/{id}','ArticleController@show');
Route::post('article','ArticleController@store');

