<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NEPController;

Route::get('/', function () {
    return view('uaslp.login');
});

Route::get('uaslp/select', function () {
    return view('uaslp.select');
})->name('uaslp.select');

Route::get('pages/NEP', function () {
    return view('pages.NEP');
})->name('pages.NEP');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/loginCheck', [AuthController::class, 'login'])->name('loginCheck');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/nep', [NEPController::class, 'index'])->name('nep.index');

require __DIR__.'/auth.php';
