<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', 'App\Http\Controllers\ControllerArr@func');
Route::get('prototype/', function () {
    return view('my');
});
Route::get('aboutCar/{id}/name/{name}/model/{model}/year/{year}', 'App\Http\Controllers\ControllerPr@func');
Route::post('prototype','App\Http\Controllers\ControllerPr@fun');
