<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\MainController;
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
Route::get("sesi", [SessionController::class, "index"]);
Route::get("sesi/register", [SessionController::class, "register"]);
Route::post("sesi/register_continue", [SessionController::class, "register_continue"]);


Route::get("sesi/logout", [SessionController::class, "logout"]);
Route::post("sesi/create", [SessionController::class, "create"]);
Route::post("login", [SessionController::class, "login"]);


//MAIN CONTROLLER
Route::get("fitgo/{user}", [MainController::class, "index"]);
// Route::get('fitgo/{user}', [MainController::class, 'index'])->middleware('auth:sanctum');
// Route::middleware('auth:sanctum')->get('fitgo/{user}', [MainController::class, 'index']);



