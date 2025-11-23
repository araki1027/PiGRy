<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PigryController;



Route::get('/register/step1',[PigryController::class,'register']);
Route::get('/login',[PigryController::class,'login']);
Route::get('/weight_logs',[PigryController::class, 'confirm']);
Route::get('/weight_logs/{weightLogId}/update',[PigryController::class,'change']);

Route::post('/weight_logs/{weightLogId}/update',[PigryController::class,'update']);