<?php

use App\Http\Controllers\APICatalogController;
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


Route::get('/catalog', [APICatalogController::class, 'index']);
Route::get('/catalog/{id}', [APICatalogController::class, 'show']);
Route::post('/catalog ', [APICatalogController::class, 'store']);
Route::put('/catalog/{id}', [APICatalogController::class, 'edit']);
Route::delete('/catalog/{id}', [APICatalogController::class, 'destroy']);
Route::put('/catalog/rent/{id}', [APICatalogController::class, 'putRent']);
Route::put('/catalog/return/{id}', [APICatalogController::class, 'putReturn']);






