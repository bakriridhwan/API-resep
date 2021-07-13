<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ResepController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ImageController;


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


// Route::apiResource('reseps', ResepController::class);
// Route::get('reseps', 'ResepController@index');
Route::resource('reseps', 'ResepController');

Route::resource('kategoris', 'KategoriController');

Route::resource('images', 'ImageController');

Route::post('img', 'ImageController@upload');


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
