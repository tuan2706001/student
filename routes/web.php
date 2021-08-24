<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\Favourite;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentMarkController;

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLogged;
use App\Http\Middleware\CheckLogin;
//Authentication

//Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
//Route::post('/login-process', [AuthenticateController::class, 'login-process'])
//  ->name('login-process');


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

//Route::get('/', function () {
//  return view('overview');
//});
// Route::get('/student/{name}', [StudentController::class, 'getName']);
//dang nhap

Route::middleware([CheckLogged::class])->group(function () {
    // Authenticate
    Route::get('/login', [AuthenticateController::class, 'login'])->name('login');
    Route::post('/login-process', [AuthenticateController::class, 'loginProcess'])->name('login-process');
});

Route::get('/logout', [AuthenticateController::class, 'logout'])->name('logout');

Route::middleware([CheckLogin::class])->group(function () {
    Route::get("/", function () {
        return view('login');
    });

    Route::resource('homeStudent', StudentMarkController::class);
    Route::resource('student', ProfileController::class);
});
