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
//verfikasi email
Auth::routes(['verify' => true]);
//login
//logoutn
Route::get('/home', function () {
    return view('home');
})->name('home');

// /user 
//route Logincontroller@resendEmail



//group route for admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin', function () {
        return dd('admin');
    });
});
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
Route::get('/', function () {
    return view('index');
});

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// Route::get('/register', function () {
//     return view('register');
// })->name('register');

// Route::get('/detail', function () {
//     return view('detail');
// });
