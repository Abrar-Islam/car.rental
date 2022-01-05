<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/",[HomeController::class,"index"]);

Route::get("/redirects",[HomeController::class,"redirects"]);

Route::get("/usert",[HomeController::class,"usert"]);

Route::get("/bookcar",[HomeController::class,"bookcar"]);

Route::get("/users",[AdminController::class,"users"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

Route::get("/car",[AdminController::class,"car"]);

Route::post("/addcar",[AdminController::class,"addcar"]);

Route::get("/deletecar/{id}",[AdminController::class,"deletecar"]);

Route::get("/updateview/{id}",[AdminController::class,"updateview"]);

Route::post("/update/{id}",[AdminController::class,"update"]);

Route::post("/reservation",[AdminController::class,"reservation"]);

Route::get("/viewreservation",[AdminController::class,"viewreservation"]);

Route::post("/addreview",[UserController::class,"addreview"]);

Route::get("/review",[UserController::class,"review"]);

Route::post("/addpayment",[UserController::class,"addpayment"]);

Route::get("/payment",[UserController::class,"payment"]);

Route::get("/viewreview",[AdminController::class,"viewreview"]);

Route::get("/test",[TestController::class,"test"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
