<?php

use App\Http\Controllers\JobController;
use App\Http\Resources\JobResource;
use App\Services\JobFilterService;
use App\Services\Response;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('jobs/filter', [JobController::class, 'index']); 
Route::post('jobs', [JobController::class, 'store']);
Route::get('jobs/{job}', [JobController::class, 'show']);
Route::put('jobs/{job}', [JobController::class, 'update']);
Route::delete('jobs/{job}', [JobController::class, 'destroy']);
