<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\TerminalController;

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



/* Route::get('/catalogo', function () {
    Route::get('/catalogo', [CatalogoController::class, 'index'])->name('catalogo.index');
})->middleware(['auth', 'verified'])->name('catalogo'); */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/catalogo', [CatalogoController::class, 'index'])->name('catalogo.index');
    Route::get('/vehicle', [VehicleController::class, 'index'])->name('vehicle.index');
    Route::get('/stock',[StockController::class, 'index'])->name('stock.index');
    Route::get('/terminal/{id}',[TerminalController::class, 'index'])->name('terminal.index');
    Route::get('/sales',[SalesController::class, 'index'])->name('sales.index');

});

require __DIR__.'/auth.php';
