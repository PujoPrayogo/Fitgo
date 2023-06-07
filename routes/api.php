<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\Api\RecentActivitiesController;
use App\Http\Controllers\Api\UserProfileController;
use App\Http\Controllers\API\WeightController;
use App\Http\Controllers\MainController;
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

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('insert_weight', [WeightController::class, 'store']);

Route::post('store', [RecentActivitiesController::class, 'store']);
Route::delete('delete/{id}', [RecentActivitiesController::class, 'destroy']);

Route::get('index_weight', [WeightController::class, 'index']);
Route::post('store_weight', [WeightController::class, 'store']);
Route::delete('delete_weight/{id}', [WeightController::class, 'destroy']);
Route::put('update_weight/{id}', [WeightController::class, 'update']);

Route::get('profile/{id}', [UserProfileController::class, 'index']);
Route::put('update_profile/{id}', [UserProfileController::class, 'update']);