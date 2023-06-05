<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\IntakeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//SESSION CONTROLLER
Route::get("/", [SessionController::class, "index"]);
Route::get("sesi/register", [SessionController::class, "register"]);
Route::post("sesi/register_continue", [SessionController::class, "register_continue"]);

Route::get("sesi/logout", [SessionController::class, "logout"]);
Route::post("sesi/create", [SessionController::class, "create"]);
Route::post("login", [SessionController::class, "login"]);
Route::get("about", [SessionController::class, 'about']);

//MAIN CONTROLLER
Route::get("fitgo/{token}", [MainController::class, "index"])-> middleware('auth:sanctum');
Route::post("fitgo/{token}", [MainController::class, "create"])-> middleware('auth:sanctum');
Route::delete('fitgo/{id}', [MainController::class, "destroy"])-> middleware('auth:sanctum');

Route::post('weight_track/{id}', [MainController::class, "create"])-> middleware('auth:sanctum');
Route::put('weight_track/{id}', [MainController::class, "update_weight"])-> middleware('auth:sanctum');
Route::delete('weight_track/{id}', [MainController::class, "destroy_weight"])-> middleware('auth:sanctum');

//INTAKE CONTROLLER
Route::get("fitgo/intake/{id}", [IntakeController::class, "index"]);


//USER PROFILE CONTROLLER
Route::get("fitgo/profile/{id}", [IntakeController::class, "index"]);
Route::put("fitgo/profile/{id}", [IntakeController::class, "update"]);