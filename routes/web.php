<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfilController;

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
// //logoutn
Route::get('/', function () {
    return view('index');
});

Route::get('/terapis', function () {
    return view('terapist.index');
});

Route::get('/finance', function () {
    return view('keuangan.index');
});

// // /user 
// Route::get('/user', [HomeController::class, 'index'])->name('user.home');
// //route home
// // Route::get('/home', return view('index'))->name('home');
// Route::get('/home', function () {
//     return view('index');
// });

// //group route for admin
// Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'is_admin']], function () {
//     // admin/home
//     Route::get('/', [HomeController::class, 'adminHome'])->name('admin.home');
//     Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard');
//     //profil
//     Route::get('/profile/{id}', [ProfilController::class, 'index'])->name('admin.profile');
//     Route::post('/updateProfil/{id}', [ProfilController::class, 'updateProfil'])->name('admin.profile.update');
//     // Route::resource('users', 'App\Http\Controllers\Admin\UserController');
//     //customer
//     Route::resource('customers', 'App\Http\Controllers\Admin\CustomerController');

// });


// Route::get('/user', function () {
//     return view('index');

//     //terapi
//     Route::resource('terapis', 'App\Http\Controllers\Admin\TerapisController');
//     // order 
//     Route::resource('orders', 'App\Http\Controllers\Admin\OrderController');
//     // reviews 
//     Route::resource('reviews', 'App\Http\Controllers\Admin\ReviewsController');
//     // unsuspend
//     Route::resource('unsuspend', 'App\Http\Controllers\Admin\UnsuspendController');
//     // register
//     Route::resource('adminRegister', 'App\Http\Controllers\Admin\RegisterController');
//     // reports 
//     Route::resource('reports', 'App\Http\Controllers\Admin\ReportController');
// });
// //prefik user=terapis
// Route::group(['prefix' => '/terapis', 'middleware' => ['auth', 'is_admin']], function () {
//     Route::get('/', [HomeController::class, 'terapisHome'])->name('terapis.home');
//     //profil

// });
// //midle where user
// Route::group(['prefix' => '/users', 'middleware' => ['auth', 'is_admin']], function () {
//     Route::get('/', [HomeController::class, 'index'])->name('users.home');
//     //profil
// });
// // Route::get('/user', function () {
// //     return view('index');
// // })->name('user');


// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// Route::get('/register', function () {
//     return view('register');
// })->name('register');

// Route::get('/user/detail', function () {
//     return view('detail');
// });

// // Route::get('/finance', function () {
// //     return view('finance.index');
// // });


// // return on folder finance index
// Route::get('/keuangan', function () {
//     return view('keuangan.index');
// }); 

// Route::get('/kangpijit', function () {
//     return view('terapis.index');
// }); 






Route::middleware(['auth', 'role:superadmin'])->prefix('superadmin')->group(function () {
    // Superadmin routes
    // 
    Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('superadmin.dashboard');
    //profil
    Route::get('/profile/{id}', [ProfilController::class, 'index'])->name('admin.profile');
    Route::post('/updateProfil/{id}', [ProfilController::class, 'updateProfil'])->name('admin.profile.update');
    // Route::resource('users', 'App\Http\Controllers\Admin\UserController');
    //customer
    Route::resource('customers', 'App\Http\Controllers\Admin\CustomerController');
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


// Route::get('/user', function () {
//     return view('index');

//     //terapi
//     Route::resource('terapis', 'App\Http\Controllers\Admin\TerapisController');
//     // order 

//     Route::resource('orders', 'App\Http\Controllers\Admin\OrderController');
//     Route::resource('reviews', 'App\Http\Controllers\Admin\ReviewsController');
//     // unsuspend
//     Route::resource('unsuspend', 'App\Http\Controllers\Admin\UnsuspendController');
//     // register
//     Route::resource('adminRegister', 'App\Http\Controllers\Admin\RegisterController');
//     // reports 
//     Route::resource('reports', 'App\Http\Controllers\Admin\ReportController');


// });

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    // Admin routes
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
