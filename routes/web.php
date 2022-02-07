<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatologController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('login', function () {
    return view('auth.login');
});

Route::post('logout', function () {
    return "Saliendo de la sesión";
});

Route::get('/',  [HomeController::class, 'getHome']);


Route::get('catalog', [CatologController::class, 'getIndex']);

Route::get('catalog/show/{id}', [CatologController::class, 'getShow']);

Route::get('catalog/create',[CatologController::class, 'getCreate']);
Route::get('catalog/edit/{id}',[CatologController::class, 'getEdit']);