<?php

use App\Http\Controllers\api\detailServiceController;
use App\Http\Controllers\api\jnsKendaraanController;
use App\Http\Controllers\api\jnsServiceController;
use App\Http\Controllers\api\kendaraanController;
use App\Http\Controllers\api\mekanikController;
use App\Http\Controllers\api\pemilikController;
use App\Http\Controllers\api\serviceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route jnsKendaraan
Route::get('/jnsKendaraan', [jnsKendaraanController::class, 'index'])->name('jnsKendaraan.index');
Route::get('/jnsKendaraan/{id}', [jnsKendaraanController::class, 'show'])->name('jnsKendaraan.show');
Route::post('/jnsKendaraan', [jnsKendaraanController::class, 'store'])->name('jnsKendaraan.store');
Route::post('/jnsKendaraan/{id}', [jnsKendaraanController::class, 'update'])->name('jnsKendaraan.update');
Route::delete('/jnsKendaraan/{id}', [jnsKendaraanController::class, 'destroy'])->name('jnsKendaraan.destroy');
// Route detailService
Route::get('/detailService', [detailServiceController::class, 'index'])->name('detailService.index');
Route::get('/detailService/{id}', [detailServiceController::class, 'show'])->name('detailService.show');
Route::post('/detailService', [detailServiceController::class, 'store'])->name('detailService.store');
Route::post('/detailService/{id}', [detailServiceController::class, 'update'])->name('detailService.update');
Route::delete('/detailService/{id}', [detailServiceController::class, 'destroy'])->name('detailService.destroy');
// Route jnsService
Route::get('/jnsService', [jnsServiceController::class, 'index'])->name('jnsService.index');
Route::get('/jnsService/{id}', [jnsServiceController::class, 'show'])->name('jnsService.show');
Route::post('/jnsService', [jnsServiceController::class, 'store'])->name('jnsService.store');
Route::post('/jnsService/{id}', [jnsServiceController::class, 'update'])->name('jnsService.update');
Route::delete('/jnsService/{id}', [jnsServiceController::class, 'destroy'])->name('jnsService.destroy');
// Route kendaraan
Route::get('/kendaraan', [kendaraanController::class, 'index'])->name('kendaraan.index');
Route::get('/kendaraan/{id}', [kendaraanController::class, 'show'])->name('kendaraan.show');
Route::post('/kendaraan', [kendaraanController::class, 'store'])->name('kendaraan.store');
Route::post('/kendaraan/{id}', [kendaraanController::class, 'update'])->name('kendaraan.update');
Route::delete('/kendaraan/{id}', [kendaraanController::class, 'destroy'])->name('kendaraan.destroy');
// Route mekanik
Route::get('/mekanik', [mekanikController::class, 'index'])->name('mekanik.index');
Route::get('/mekanik/{id}', [mekanikController::class, 'show'])->name('mekanik.show');
Route::post('/mekanik', [mekanikController::class, 'store'])->name('mekanik.store');
Route::post('/mekanik/{id}', [mekanikController::class, 'update'])->name('mekanik.update');
Route::delete('/mekanik/{id}', [mekanikController::class, 'destroy'])->name('mekanik.destroy');
// Route pemilik
Route::get('/pemilik', [pemilikController::class, 'index'])->name('pemilik.index');
Route::get('/pemilik/{id}', [pemilikController::class, 'show'])->name('pemilik.show');
Route::post('/pemilik', [pemilikController::class, 'store'])->name('pemilik.store');
Route::post('/pemilik/{id}', [pemilikController::class, 'update'])->name('pemilik.update');
Route::delete('/pemilik/{id}', [pemilikController::class, 'destroy'])->name('pemilik.destroy');
// Route service
Route::get('/service', [serviceController::class, 'index'])->name('service.index');
Route::get('/service/{id}', [serviceController::class, 'show'])->name('service.show');
Route::post('/service', [serviceController::class, 'store'])->name('service.store');
Route::post('/service/{id}', [serviceController::class, 'update'])->name('service.update');
Route::delete('/service/{id}', [serviceController::class, 'destroy'])->name('service.destroy');
