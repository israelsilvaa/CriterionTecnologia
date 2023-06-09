<?php

use App\Http\Controllers\VisitanteController;
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
    return view('visitante.index');
});

Route::get('/login', [VisitanteController::class, 'modelos'])->name('modelos');
Route::get('/modelos', [VisitanteController::class, 'modelos'])->name('modelos');
Route::get('/garantia', [VisitanteController::class, 'garantia'])->name('garantia');

