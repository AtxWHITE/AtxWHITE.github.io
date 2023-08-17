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
//logoutn
Route::get('/', function () {
    return view('index');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//group route for admin
Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'is_admin']], function () {
    // admin/home
    Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home');
    //profil
    Route::get('/profile/{id}', [ProfilController::class, 'index'])->name('admin.profile');
    Route::post('/updateProfil/{id}', [ProfilController::class, 'updateProfil'])->name('admin.profile.update');
    Route::resource('users', 'App\Http\Controllers\Admin\UserController');
});

Route::get('/user', function () {
    return view('index');
});

Route::get('/login', function () {
     return view('login');
});

Route::get('/register', function () {
    return view('register');
});

