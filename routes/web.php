<?php

use Illuminate\Support\Facades\Route;
use App\Http\COntrollers\HomeController;
use App\Http\COntrollers\UserController;
use App\Http\COntrollers\LessonController;
use App\Http\COntrollers\CertificateController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', UserController::class);
    Route::resource('lessons', LessonController::class);
    Route::resource('certificates', CertificateController::class);
    
});

