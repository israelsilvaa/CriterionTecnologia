<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
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
})->name('index');

Route::prefix('/visitante')->group(function(){
    Route::get('/modelos', [VisitanteController::class, 'modelos'])->name('visitante.modelos');
    Route::get('/garantia', [VisitanteController::class, 'garantia'])->name('visitante.garantia');
    Route::post('/garantiaShow', [VisitanteController::class, 'show'])->name('visitante.verificarGarantia');
});

Route::get('/login', [LoginController::class, 'formLogin'])->name('login');
Route::post('/login', [LoginController::class, 'logar'])->name('logar');


Route::prefix('/admin')->group(function(){
    Route::get('/viewPainel', [AdminController::class, 'viewPainel'])->name('admin.painel');

    Route::get('/cadastarProduto', [AdminController::class, 'viewCadastroProduto'])->name('admin.cadastroProduto');
    Route::post('/cadastarProduto', [AdminController::class, 'store'])->name('admin.cadastroProduto');
    
    Route::get('/cadastarVenda', [AdminController::class, 'viewCadastroVenda'])->name('admin.cadastroVenda');
    Route::post('/cadastarVenda', [AdminController::class, 'storeVenda'])->name('admin.cadastroVenda');
});











Route::fallback(function(){
    return view('fallback');
});
