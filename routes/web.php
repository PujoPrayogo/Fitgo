<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::resource('/', MainController::class);

Route::get("sesi", [SessionController::class, "index"]);
Route::get("/sesi/login", [SessionController::class, "login"]);
Route::get("/sesi/logout", [SessionController::class, "logout"]);
Route::post("/sesi/create", [SessionController::class, "create"]);
Route::get("/sesi/register", [SessionController::class, "register"]);
