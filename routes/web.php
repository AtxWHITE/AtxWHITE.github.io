<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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
//login
Route::get('/login', function () {
    return view('auth.login');
});
//register
Route::get('/register', function () {
    return view('auth.register');
});

// // Route::get('/user', [HomeController::class, 'index'])->name('user.home');

Route::get('/keuangan', [HomeController::class, 'keuangan']);

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
    Route::delete('/customers/destroy/{customer}', 'App\Http\Controllers\Admin\CustomerController@destroy');

    // superadmin/customers/destroy
    // customers/update2
    // Route::post('customers/update2', 'App\Http\Controllers\Admin\CustomerController@update2')->name('customers.update2');
    //get
    //terapi
    Route::resource('terapis', 'App\Http\Controllers\Admin\TerapisController');
    // order 
    Route::resource('orders', 'App\Http\Controllers\Admin\OrderController');
    // reviews 
    Route::resource('reviews', 'App\Http\Controllers\Admin\ReviewsController');
    // unsuspend
    Route::resource('unsuspend', 'App\Http\Controllers\Admin\UnsuspendController');
    // register
    Route::resource('admin', 'App\Http\Controllers\AdminController');
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
