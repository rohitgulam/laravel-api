<?php

use App\Http\Controllers\ProductController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/products', [ProductController::class, 'index']);
 
// Route::post('/products', [ProductController::class, 'store']);

Route::get('/products/search/{name}', [ProductController::class, 'search']);


// Works in the same way as creating routes but it is easier if you just have a basic CRUD api
Route::resource('products', ProductController::class);