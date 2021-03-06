<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

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


Route::post('posts', [PostController::class, 'store']);

Route::get('posts', [PostController::class, 'get']);

Route::delete('posts/{id}', [PostController::class, 'delete']);



// Route::post('posts', 'PostController@store');

// Route::get('posts', 'PostController@get');

// Route::delete('posts/{id}', 'PostController@delete');
