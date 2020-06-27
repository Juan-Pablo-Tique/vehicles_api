<?php

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

Route::apiResource("vehicles", "VehiclesController");
Route::apiResource("drivers", "DriversController");
Route::apiResource("owners", "OwnersController");
Route::apiResource("colors", "ColorsController");
Route::apiResource("brands", "BrandsController");
Route::apiResource("cities", "CitiesController");
Route::apiResource("types", "TypeController");
Route::apiResource("all/owners", "OwnersDataControllerController");