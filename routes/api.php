<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\WishController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\OrderItemController;
use App\Http\Controllers\ArtController;
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

Route::post('register', [CustomerController::class, 'register']);
Route::post('login', [CustomerController::class, 'login']);

Route::post('saveWish', [WishController::class, 'addWish']); //Route for adding a customer art wish to a database.
Route::post('showWishes', [WishController::class, 'index']); //Route for adding a customer art wish to a database.
Route::post('deleteWish', [WishController::class, 'deleteWish']); //Route for adding a customer art wish to a database.
Route::post('checkWish', [WishController::class, 'checkWish']); //Route for adding a customer art wish to a database.

Route::get('view-art', [ArtController::class, 'index']);
Route::post('search', [ArtController::class, 'search']);
Route::post('fetchArtByCategory', [ArtController::class, 'fetchArtByCategory']);
Route::post('orientationFilter', [ArtController::class, 'orientationFilter']);
Route::post('sizeFilter', [ArtController::class, 'sizeFilter']);
Route::post('priceFilter', [ArtController::class, 'priceFilter']);
Route::post('categoryFilter', [ArtController::class, 'categoryFilter']);
Route::post('fetchArtById', [ArtController::class, 'fetchArtById']);

Route::post('order', [OrderController::class, 'create']);
Route::post('order-items', [OrderItemController::class, 'create']);

//Route::post('logout', [CustomerController::class, 'logout']);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('logout', [CustomerController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
