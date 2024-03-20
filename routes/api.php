<?php

use App\Http\Controllers\AspectController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\IndicatorController;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\TeacherController;
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
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::group(['middleware' => 'auth:sanctum'], function (){
    Route::get('/auth/info', [AuthController::class, 'info']);
    Route::apiResource('/aspect', AspectController::class);
    Route::apiResource('/evaluation', EvaluationController::class);
    Route::apiResource('/instrument', InstrumentController::class);
    Route::apiResource('/indicator', IndicatorController::class);
    Route::apiResource('/teacher', TeacherController::class);
    Route::post('/evaluation/print', [EvaluationController::class, 'print']);
});

