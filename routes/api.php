<?php

use Illuminate\Http\Request;

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


Route::group(['prefix' => 'v1', 'middleware' => 'cors'], function(){
	Route::get('categories', 'Api\BlogControllerApi@getCategories');
	Route::get('categorie/{id}', 'Api\BlogControllerApi@getCategorie');

	Route::get('posts', 'Api\BlogControllerApi@getAllPosts');
	Route::get('post/{id}', 'Api\BlogControllerApi@getPost');

	Route::get('blog/highlighted', 'Api\BlogControllerApi@getHighlightedPosts');
});