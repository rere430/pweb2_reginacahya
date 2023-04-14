<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\DataDosenController;
use App\Http\Controllers\UbahProfile;
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
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/bahan', function () {
//     return 'test';
// });

route::group(['[middleware' => ['auth', 'ceklevel:admin,pegawai']], function () {
    route::get('/home', [HomeController::class, 'halamanhome'])->name('home');
    route::get('/bahan', [BahanController::class, 'bahan'])->name('tabelbahan');
});

route::group(['[middleware' => ['auth', 'ceklevel:pegawai']], function () {
    route::get('/datadosen', [DataDosenController::class, 'datadosen'])->name('datadosen');
});

//login
route::get('/login', [LoginController::class, 'halamanlogin'])->name('halamanlogin');
route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//menambah data
route::get('/bahan', [BahanController::class, 'bahan'])->name('tabelbahan');
route::get('/create', [BahanController::class, 'create'])->name('createbahan');
route::post('/store', [BahanController::class, 'store'])->name('storebahan');

//mengedit data
route::get('/bahan/{id}/edit', [BahanController::class, 'edit'])->name('editbahan');
route::put('/bahan/{id}', [BahanController::class, 'update'])->name('editupdatebahan');

//delete data
route::delete('/bahan/{id}', [BahanController::class, 'destroy'])->name('deletebahan');

//route::get('/delete/{id}', [BahanController::class, 'delete'])->name('deletedatabahan');

route::get('/datadosen', [DataDosenController::class, 'datadosen'])->name('datadosen');

route::get('/profile', [UbahProfile::class, 'profile'])->name('ubahProfile');


// route::resource('/bahan', [BahanController::class]);
