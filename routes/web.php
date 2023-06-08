<?php

use App\Http\Controllers\UserProfileController;
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
Route::get("/", [SessionController::class, "index"])-> middleware('isNotLoggedin');
Route::get("sesi/register", [SessionController::class, "register"])-> middleware('isNotLoggedin');
Route::get("sesi/register2", [SessionController::class, "register2"])-> middleware('isNotLoggedin');
Route::post("sesi/register_continue", [SessionController::class, "register_continue"]);

Route::get("logout", [SessionController::class, "logout"]);
Route::post("sesi/create", [SessionController::class, "create"]);
Route::post("login", [SessionController::class, "login"]);
Route::get("about", [SessionController::class, "about"]);
Route::get("sesi/landingPage", [SessionController::class, "landingPage"]);

//MAIN CONTROLLER
Route::get("fitgo/{name}", [MainController::class, "index"])-> middleware('isLoggedin');
Route::get("fitgo", [MainController::class, "index"])-> middleware('isLoggedin');
Route::post("fitgo/{name}", [MainController::class, "create"])-> middleware('isLoggedin');
Route::delete('fitgo/{name}', [MainController::class, "destroy"])-> middleware('isLoggedin');

Route::post('weight_track/{name}', [MainController::class, "create"])-> middleware('isLoggedin');
Route::put('weight_track/{name}', [MainController::class, "update_weight"])-> middleware('isLoggedin');
Route::delete('weight_track/{name}', [MainController::class, "destroy_weight"])-> middleware('isLoggedin');
Route::get("fitgo/weight-tracks/{name}", [MainController::class, "show_weight"]);


// Route::get("/fitgo/weight-tracks/{user}", [SessionController::class, "wTracks"]);

//INTAKE CONTROLLER
Route::get("fitgo/intake/{name}", [IntakeController::class, "index"])-> middleware('isLoggedin');

//USER PROFILE CONTROLLER
Route::get("fitgo/profile/{id}", [UserProfileController::class, "index"])-> middleware('isLoggedin');
Route::put("fitgo/profile/update/{id}", [UserProfileController::class, "update"])-> middleware('isLoggedin');