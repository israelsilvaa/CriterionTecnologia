<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
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
    Route::get('/garantiaShow', [VisitanteController::class, 'show'])->name('visitante.verificarGarantia');
   
    Route::get('/sobre-nos', [VisitanteController::class, 'sobre_nos'])->name('visitante.sobre-nos');
    Route::get('/formasDeEntrega', [VisitanteController::class, 'formasEntrega'])->name('visitante.formasEntrega');
    Route::get('/politicasDeGarantia', [VisitanteController::class, 'policitaGarantia'])->name('visitante.politicaGarantia');
    Route::get('/produto/{modelo_id}/{disponibilidade}', [VisitanteController::class, 'produto'])->name('visitante.produto');
});


Route::get('/login', [LoginController::class, 'formLogin'])->name('login');
Route::post('/login', [LoginController::class, 'logar'])->name('login');

Route::middleware('autenticacao')->prefix('/admin')->group(function(){
    Route::get('/viewPainel', [AdminController::class, 'viewPainel'])->name('admin.painel');
    
    Route::get('/cadastarProduto', [AdminController::class, 'viewCadastroProduto'])->name('admin.cadastroProduto');
    Route::post('/cadastarProduto', [AdminController::class, 'store'])->name('admin.cadastroProduto');
    Route::post('/selectMarca', [AdminController::class, 'selectMarca'])->name('admin.selectMarca');
    
    Route::get('/cadastarVenda', [AdminController::class, 'viewCadastroVenda'])->name('admin.cadastroVenda');
    Route::post('/cadastarVenda', [AdminController::class, 'storeVenda'])->name('admin.cadastroVenda');
    
    Route::get('/cadastroEspecificacoes', [AdminController::class, 'viewCadastroEspecificacoes'])->name('admin.cadastroEspecificacoes');
    Route::post('/cadastroMarca', [AdminController::class, 'cadastroMarca'])->name('admin.cadastroMarca');
    Route::post('/cadastroModelo', [AdminController::class, 'cadastroModelo'])->name('admin.cadastroModelo');
    Route::post('/cadastroTipo', [AdminController::class, 'cadastroTipo'])->name('admin.cadastroTipo');
    Route::post('/cadastroCapacidade', [AdminController::class, 'cadastroCapacidade'])->name('admin.cadastroCapacidade');
    Route::post('/cadastroVelocidade', [AdminController::class, 'cadastroVelocidade'])->name('admin.cadastroVelocidade');
    Route::post('/cadastroAplicacao', [AdminController::class, 'cadastroAplicacao'])->name('admin.cadastroAplicacao');
    Route::post('/cadastroGeracao', [AdminController::class, 'cadastroGeracao'])->name('admin.cadastroGeracao');
    Route::post('/cadastroDimensoes', [AdminController::class, 'cadastroDimensoes'])->name('admin.cadastroDimensoes');
    
    Route::get('/sair', [LoginController::class, 'sair'])->name('admin.sair');
});

Route::prefix('/cliente')->group(function(){
    Route::get('/painel', [ClienteController::class, 'viewPainel'])->name('cliente.painel');
});

Route::fallback(function(){
    return view('fallback');
});
