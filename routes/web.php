<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
});

Route::post('/updateUser',[UserController::class,'update']);
Route::post('/updateAttendance',[AttendanceController::class,'update']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// trainer-login
Route::get('/trainer-login',[App\Http\Controllers\TrainerAuth\LoginController::class, 'showLoginForm'])->name('trainer.login');
Route::post('/trainer-login', [App\Http\Controllers\TrainerAuth\LoginController::class, 'login'])->name('trainer.login');
Route::get('/trainer-dashboard', [App\Http\Controllers\TrainerAuth\DashboardController::class, 'index'])->name('trainer.dashboard');

Auth::routes();

Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/trainers', [App\Http\Controllers\TrainersController::class, 'index'])->name('trainers');
Route::get('/schedules', [App\Http\Controllers\SchedulesController::class, 'index'])->name('schedules');
Route::get('/packages', [App\Http\Controllers\PackagesController::class, 'index'])->name('packages');
Route::get('/blogs', [App\Http\Controllers\BlogsController::class, 'index'])->name('blogs');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
