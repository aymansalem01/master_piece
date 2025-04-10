<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ClassController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\admin\GameController;
use App\Http\Controllers\admin\SubjectController;
use App\Http\Controllers\admin\User_adminController;
use App\Http\Controllers\admin\VideoController;
use App\Http\Controllers\admin\VrController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersideController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::prefix('admin')->group(function () {
    Route::resource('coupon', CouponController::class);
    Route::resource('game', GameController::class);
    Route::resource('subject', SubjectController::class);
    Route::resource('user', User_adminController::class);
    Route::resource('video', VideoController::class);
    Route::resource('vr', VrController::class);
    Route::resource('class', ClassController::class);
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin');
});

Route::get('feedback', [AdminController::class, 'feedback'])->name('feedback');
Route::get('subscribtion', [AdminController::class, 'subscribtion'])->name('subscribtion');
Route::get('/', [UsersideController::class, 'home'])->name('home');
Route::get('/course', [UsersideController::class, 'course'])->name('course');
Route::get('/contact', [UsersideController::class, 'contact'])->name('contact');
Route::get('/vrs', [UsersideController::class, 'vr'])->name('vr');
Route::get('/subject', [UsersideController::class, 'subject'])->name('subject');
Route::view('login','login')->name('log');
Route::view('signup','signup')->name('sign');
Route::post('signup',[AuthController::class,'signup'])->name('signup');
Route::post('login' , [AuthController::class,'login'])->name('login');

