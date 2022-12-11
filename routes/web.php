<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', "home")->name("home");

    Route::get("about", "about")->name("about");

    Route::get("service", "service")->name("service");

    Route::get("contact", "service")->name("contact");
});

Route::prefix("admin")->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get("/","home")->name("admin.home");
        Route::get("blank","blank")->name("admin.blank");
        Route::get("login","login")->name("login");
    });
})->middleware("auth");
