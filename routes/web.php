<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestDriveController;
use App\Http\Controllers\RegListController;


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

Route::get('/', function () {
    return view('welcome');
});

// Test Drive Registration
Route::resource('register', TestDriveController::class);
Route::resource('/register', TestDriveController::class);

// RegList
Route::resource('reglist', RegListController::class);
Route::resource('/reglist', RegListController::class);
