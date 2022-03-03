<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatologController;
use App\Http\Controllers\LoginController;

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

Route::get('/',  [HomeController::class, 'getHome'])
->middleware('auth');

Route::get('/login', [LoginController::class, 'create'])

    ->name('login.index');

Route::post('/login', [LoginController::class, 'store'])
    ->name('login.store');


 Route::get('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::get('catalog', [CatologController::class, 'getIndex'])
->middleware('auth');

Route::get('catalog/show/{id}', [CatologController::class, 'getShow'])
->middleware('auth');


Route::get('catalog/create',[CatologController::class, 'getCreate'])
->middleware('auth');
Route::post('catalog/create',[CatologController::class, 'postCreate'])
->middleware('auth');

Route::get('catalog/edit/{id}',[CatologController::class, 'getEdit'])
->middleware('auth');


Route::put('catalog/edit/{id}',[CatologController::class, 'putEdit'])
->middleware('auth');

