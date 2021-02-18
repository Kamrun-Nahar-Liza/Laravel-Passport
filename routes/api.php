<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('login', 'API\AuthController@login');
Route::post('register', 'API\AuthController@register');

Route::get('posts', 'API\AuthController@lizasAllPosts');

Route::middleware('auth:api')->group(function(){

  Route::post('details', 'API\AuthController@get_user_details_info');
  
});

