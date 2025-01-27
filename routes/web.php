<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NEPController;
use App\Http\Controllers\ICEController;
use App\Http\Controllers\ICPController;
use App\Http\Controllers\ICompController;


Route::get('/', function () {
    return view('uaslp.login');
});

Route::get('uaslp/select', function () {
    return view('uaslp.select');
})->name('uaslp.select');

Route::get('pages/NEP', function () {
    return view('pages.NEP');
})->name('pages.NEP');

Route::get('pages/concentracion', function () {
    return view('pages.concentracion');
})->name('pages.concentracion');

Route::get('pages/ICP', function () {
    return view('pages.ICP');
})->name('pages.ICP');

Route::get('pages/IComp', function () {
    return view('pages.IComp');
})->name('pages.IComp');

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
Route::get('/ice', [ICEController::class, 'index'])->name('ice.index');
Route::get('/icp', [ICPController::class, 'index'])->name('icp.index');
Route::get('/icomp', [ICompController::class, 'index'])->name('icomp.index');


require __DIR__.'/auth.php';
