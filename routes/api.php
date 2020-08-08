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

Route::get('categories', 'Api\CategoryController@index');
Route::get('categories/{id}/posts', 'Api\CategoryController@posts');

Route::get('posts', 'Api\PostController@index');
Route::get('post/{id}', 'Api\PostController@show');

Route::get('authors', 'Api\UserController@index');
Route::get('author/{id}/posts', 'Api\UserController@posts');

Route::get('tags', 'Api\TagController@index');
Route::get('tags/{id}/posts','Api\TagController@posts');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
