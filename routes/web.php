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
use App\Http\Controllers\ContectController;
use App\Http\Controllers\PaymentController;
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
    Route::get('payment', [AdminController::class, 'payment'])->name('payment');
    Route::get('feedback', [AdminController::class, 'feedback'])->name('feedback');
    Route::get('subscribtion', [AdminController::class, 'subscribtion'])->name('subscribtion');
});





Route::get('/', [UsersideController::class, 'home'])->name('home');



Route::view('login', 'login')->name('log');
Route::view('signup', 'signup')->name('sign');
Route::post('signup', [AuthController::class, 'signup'])->name('signup');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');




Route::get('/course', [UsersideController::class, 'course'])->name('course');
Route::get('/vrs', [UsersideController::class, 'vr'])->name('vr');
Route::get('/subject/{id}', [UsersideController::class, 'subject'])->name('subject');
Route::get('/videos/{id}', [UsersideController::class, 'video'])->name('show');
Route::get('/video/{id}', [UsersideController::class, 'show'])->name('vid');




Route::post('subscribe', [ContectController::class, 'subscribe'])->name('subscribe');
Route::post('feedback', [ContectController::class, 'feedback'])->name('feedbacks');
Route::get('/contact', [ContectController::class, 'contact'])->name('contact');




Route::get('store', [PaymentController::class, 'store'])->name('store');
Route::post('visa', [PaymentController::class, 'visa'])->name('payment_visa');
Route::post('coupon_payment', [PaymentController::class, 'coupon'])->name('payment_coupon');




Route::get('dashboard', [UsersideController::class, 'dashboard'])->name('dashboard');
Route::view('/editprofile','user.editprofile')->name('prof');
Route::put('edit/{id}',[AuthController::class,'update'])->name('edit');



Route::middleware(['auth', 'role:user'])->group(function () {});
Route::middleware(['auth', 'role:admin'])->group(function () {});
Route::middleware(['auth', 'role:parent'])->group(function () {});
