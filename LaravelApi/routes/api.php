<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TrackController;
use App\Http\Controllers\Api\StationController;
use App\Http\Controllers\Api\BusTimeController;
//use Illuminate\Support\Facades\DB;


Route::post('login',[\App\Http\Controllers\Api\AuthController::class,'login']);

Route::post('register',[\App\Http\Controllers\Api\AuthController::class,'register']);

//Route::get('bustime',[\App\Http\Controllers\Api\BusTimeController::class,'index']);
Route::get('tracks',[\App\Http\Controllers\Api\BusTimeController::class,'tracks']);

Route::get('bustimes',[\App\Http\Controllers\Api\BusTimeController::class,'bustimes']);


Route::middleware('auth:api')->group(function ()
{


    //Route::get('indexx',[\App\Http\Controllers\Api\TrackController::class,'index']);

    Route::get('station',[\App\Http\Controllers\Api\StationController::class,'index']);

    //Route::get('bus',[\App\Http\Controllers\Api\BusController::class,'index']);




    Route::get('user', function ()
    {

        return \Illuminate\Support\Facades\Auth::user();
    });

    Route::post('logout',[\App\Http\Controllers\Api\AuthController::class,'logout']);



});
