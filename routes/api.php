<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JobController;
use App\Http\Controllers\Api\ApplicationController;

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/{id}', [JobController::class, 'show']);
Route::post('/jobs', [JobController::class, 'store']);
Route::delete('/jobs/{id}', [JobController::class, 'destroy']);

Route::post('/applications', [ApplicationController::class, 'store']);