<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SuperadminController;
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
// <<<<<<< HEAD
// =======
// // // /user 
// // Route::get('/user', [HomeController::class, 'index'])->name('user.home');
// // //route home

// // jika mengakses home maka arahkan ke / 
// Route::get('/home', function () {
//     return redirect('/');
// });

// // //group route for admin
// // Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'is_admin']], function () {
// //     // admin/home
// //     Route::get('/', [HomeController::class, 'adminHome'])->name('admin.home');
// //     Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard');
// //     //profil
// //     Route::get('/profile/{id}', [ProfilController::class, 'index'])->name('admin.profile');
// //     Route::post('/updateProfil/{id}', [ProfilController::class, 'updateProfil'])->name('admin.profile.update');
// //     // Route::resource('users', 'App\Http\Controllers\Admin\UserController');
// //     //customer
// //     Route::resource('customers', 'App\Http\Controllers\Admin\CustomerController');

// // });


// // Route::get('/user', function () {
// //     return view('index');

// //     //terapi
// //     Route::resource('terapis', 'App\Http\Controllers\Admin\TerapisController');
// //     // order 
// //     Route::resource('orders', 'App\Http\Controllers\Admin\OrderController');
// //     // reviews 
// //     Route::resource('reviews', 'App\Http\Controllers\Admin\ReviewsController');
// //     // unsuspend
// //     Route::resource('unsuspend', 'App\Http\Controllers\Admin\UnsuspendController');
// //     // register
// //     Route::resource('adminRegister', 'App\Http\Controllers\Admin\RegisterController');
// //     // reports 
// //     Route::resource('reports', 'App\Http\Controllers\Admin\ReportController');
// // });
// // //prefik user=terapis
// // Route::group(['prefix' => '/terapis', 'middleware' => ['auth', 'is_admin']], function () {
// //     Route::get('/', [HomeController::class, 'terapisHome'])->name('terapis.home');
// //     //profil

// // });
// // //midle where user
// // Route::group(['prefix' => '/users', 'middleware' => ['auth', 'is_admin']], function () {
// //     Route::get('/', [HomeController::class, 'index'])->name('users.home');
// //     //profil
// // });
// // // Route::get('/user', function () {
// // //     return view('index');
// // // })->name('user');


// // Route::get('/login', function () {
// //     return view('login');
// // })->name('login');

// >>>>>>> d56e70c0a13e594f06160a6864afb1eb723e9a18
// Route::get('/register', function () {
//     return view('register');
// })->name('register');

// register 
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
