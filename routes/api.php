<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function () {
    # without authentication
    Route::prefix('cities')->group(function () {
        Route::get('/', 'AreaController@indexCities');
    });
    Route::prefix('advertisement-categories')->group(function () {
        Route::get('/', 'AdvertisementCategoryController@indexAdvertisementCategories');
    });

    Route::prefix('advertisements')->group(function () {
        Route::get('/', 'AdvertisementController@indexAdvertisementsForClientByPagination');
        Route::get('/{advertisementId}', 'AdvertisementController@getAdvertisementForClient');

    });
});
