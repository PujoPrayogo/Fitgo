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
Route::get("sesi", [SessionController::class, "index"]);
Route::get("sesi/register", [SessionController::class, "register"]);
Route::post("sesi/register_continue", [SessionController::class, "register_continue"]);

Route::get("sesi/logout", [SessionController::class, "logout"]);
Route::post("sesi/create", [SessionController::class, "create"]);
Route::post("login", [SessionController::class, "login"]);
Route::get("about", [SessionController::class, 'about']);

//MAIN CONTROLLER
Route::get("fitgo/{user}", [MainController::class, "index"]);




//INTAKE CONTROLLER
Route::get("fitgo/intake/{user}", [IntakeController::class, "index"]);