<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NEPController;
use App\Http\Controllers\ICEController;
use App\Http\Controllers\ICPController;
use App\Http\Controllers\ICompController;
use App\Http\Controllers\ICopController;
use App\Http\Controllers\IvaController;
use App\Http\Controllers\IdFController;

use App\Http\Controllers\INyMPController;
use App\Http\Controllers\ICoehPController;


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

Route::get('pages/Icop', function () {
    return view('pages.Icop');
})->name('pages.Icop');

Route::get('pages/Iva', function () {
    return view('pages.Iva');
})->name('pages.Iva');

Route::get('pages/IdF', function () {
    return view('pages.IdF');
})->name('pages.IdF');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Índice de Natalidad y Mortalidad Partidista
Route::get('pages/INYMP', function () {
    return view('pages.INYMP');
})->name('pages.INYMP');

//Índice de Cohesión Partidista
Route::get('pages/ICoehP', function () {
    return view('pages.ICoehP');
})->name('pages.ICoehP');

//Índice de Polarización No Ponerada
Route::get('pages/IPNP', function () {
    return view('pages.IPNP');
})->name('pages.IPNP');

//Índice de Polarización Ponerada
Route::get('pages/IPP', function () {
    return view('pages.IPP');
})->name('pages.IPP');

//Índice de Nacionalización
Route::get('pages/INP', function () {
    return view('pages.INP');
})->name('pages.INP');

//Índice de Nacionalización del Sistema de Partidos
Route::get('pages/INSP', function () {
    return view('pages.INSP');
})->name('pages.INSP');

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
Route::get('/icop', [ICopController::class, 'index'])->name('icop.index');
Route::get('/iva', [IvaController::class, 'index'])->name('iva.index');
Route::get('/idf', [IdFController::class, 'index'])->name('idf.index');

Route::get('/inymp', [INyMPController::class, 'index'])->name('inymp.index');
Route::get('/icoehp', [ICoehPController::class, 'index'])->name('icoehp.index');
Route::get('/ipnp', [ICoehPController::class, 'index'])->name('ipnp.index');
Route::get('/ipp', [ICoehPController::class, 'index'])->name('ipp.index');
Route::get('/inp', [ICoehPController::class, 'index'])->name('inp.index');
Route::get('/insp', [ICoehPController::class, 'index'])->name('insp.index');

require __DIR__ . '/auth.php';
