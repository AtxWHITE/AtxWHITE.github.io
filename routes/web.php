<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SuperadminController;


Auth::routes();

//verfikasi email
Auth::routes(['verify' => true]);


Route::get('/', function () {
    return view('index');
});
//logout
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
// // Route::get('/user', [HomeController::class, 'index'])->name('user.home');

// // jika mengakses home maka arahkan ke / 
// Route::get('/home', function () {
//     return redirect('/');
// });

Route::middleware(['auth', 'role:superadmin'])->prefix('superadmin')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('superadmin.dashboard');
    //route /
    Route::get('/', [HomeController::class, 'adminHome'])->name('superadmin.home');
    //profil
    Route::get('/profile/{id}', [SuperadminController::class, 'profile'])->name('superadmin.profile');
    Route::post('/updateProfil/{id}', [SuperadminController::class, 'updateProfil'])->name('superadmin.profile.update');
    // Route::resource('users', 'App\Http\Controllers\Admin\UserController');
    //customer
    Route::resource('customers', 'App\Http\Controllers\Admin\CustomerController');
    //terapi
    Route::resource('terapis', 'App\Http\Controllers\Admin\TerapisController');
    // order 
    Route::resource('orders', 'App\Http\Controllers\Admin\OrderController');
    // reviews 
    Route::resource('reviews', 'App\Http\Controllers\Admin\ReviewsController');
    // unsuspend
    Route::resource('unsuspend', 'App\Http\Controllers\Admin\UnsuspendController');
    // register
    Route::resource('adminRegister', 'App\Http\Controllers\Admin\RegisterController');
    // reports 
    Route::resource('reports', 'App\Http\Controllers\Admin\ReportController');
});

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    // Admin routes
    Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:finance'])->prefix('finance')->group(function () {
    // Finance routes
});

Route::middleware(['auth', 'role:customer'])->prefix('customer')->group(function () {
    // Customer routes
});

Route::middleware(['auth', 'role:terapi'])->prefix('terapi')->group(function () {
    // Terapi routes
});
