<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin',[AdminController::class,'index'])->name('index');
    Route::get('/menu', function () {
        return view('Admin.Menu');
    })->name('menu');
    Route::get('/bkctgr', function () {
        return view('Admin.Bookcategory');
    })->name('bkctgr');
    Route::get('/subscriber', function () {
        return view('Admin.subscriber');
    })->name('subscriber');
    Route::get('/book', function () {
        return view('Admin.Books');
    })->name('book');
    Route::post('/cate', [AdminController::class,'cate'])->name('bookcategory');
});
require __DIR__.'/auth.php';
