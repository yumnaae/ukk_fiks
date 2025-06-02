<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIGuruController;     // 1. memakai APIGuruController
use App\Http\Controllers\APIIndustriController; // 1. memakai APIIndustriController
use App\Http\Controllers\APIPklController;      // 1. memakai APIPklController
use App\Http\Controllers\APISiswaController;    // 1. memakai APISiswaController

Route::get('/user', function (Request $request){
    return $request->user();
})->middleware('auth:sanctum');

// 2. rute yang mengarah ke APIGuruController
Route::apiResource("guru", APIGuruController::class);

// 2. rute yang mengarah ke APIIndustriController
Route::apiResource("industri", APIIndustriController::class);

// 2. rute yang mengarah ke APIPklController
Route::apiResource("pkl", APIPklController::class);

// 2. rute yang mengarah ke APISiswaController
Route::apiResource("siswa", APISiswaController::class);