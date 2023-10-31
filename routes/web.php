<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserAkses;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Psy\TabCompletion\AutoCompleter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'home'])->name('home');

    Route::post('login', [AuthController::class, 'login'])->name('login');
});


Route::middleware(['auth'])->group(function () {

    Route::get('/admin/data', [BiodataController::class, 'data'])->name('data')->middleware('userAkses:admin');
    Route::get('/admin/didikjabat', [BiodataController::class, 'didikjabat'])->name('didikjabat')->middleware('userAkses:admin');

    Route::get('/admin/dashboard', [BiodataController::class, 'admin'])->name('admin')->middleware('userAkses:admin');

    Route::get('/admin/store', [BiodataController::class, 'storeForm'])->name('storeForm')->middleware('userAkses:admin');

    Route::post('/admin/store', [BiodataController::class, 'store'])->name('store')->middleware('userAkses:admin');

    Route::get('/admin/update/{id}', [BiodataController::class, 'updateForm'])->name('updateForm')->middleware('userAkses:admin');

    Route::put('/admin/update/{id}', [BiodataController::class, 'update'])->name('update')->middleware('userAkses:admin');

    Route::delete('/admin/delete/{nik}', [BiodataController::class, 'destroy'])->name('delete')->middleware('userAkses:admin');

    Route::get('/admin/search', [BiodataController::class, 'search'])->name('search')->middleware('userAkses:admin');

    Route::get('/pegawai/dashboard', [UserController::class, 'pegawai'])->name('pegawai')->middleware('userAkses:pegawai');

    Route::get('/admin/pensiun', [BiodataController::class, 'pensiun'])->name('pensiun')->middleware('userAkses:admin');

    Route::get('/admin/lakilaki', [BiodataController::class, 'boy'])->name('lakilaki')->middleware('userAkses:admin');

    Route::get('/admin/perempuan', [BiodataController::class, 'girl'])->name('perempuan')->middleware('userAkses:admin');

    Route::get('/admin/boy2', [BiodataController::class, 'boy2'])->name('boy2')->middleware('userAkses:admin');

    Route::get('/admin/girl2', [BiodataController::class, 'girl2'])->name('girl2')->middleware('userAkses:admin');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

    Route::get('/export', [BiodataController::class, 'export'])->name('export');

    Route::get('/logout', [AuthController::class, 'logout']);
});
