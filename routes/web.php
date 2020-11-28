<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Reserva as Reserva;
use App\Http\Controllers\Usuario as Usuario;
use App\Http\Controllers\Titulo as Titulo;
use App\Http\Controllers\Emprestimo as Emprestimo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('index');

Route::post('/login', [Usuario::class, 'login'])->name('login');

Route::get('/home', [Usuario::class, 'home'])->name('home');

Route::prefix('reservas')->group(function () {
    Route::get('listar',[Reserva::class,'listarReservas'])->name('reserva.listar');
    Route::delete('excluir',[Reserva::class,'excluirReserva'])->name('reserva.excluir');
    Route::post('adicionar',[Reserva::class,'reservarTitulo'])->name('reserva.adicionar');
});

Route::prefix('titulos')->group(function () {
    Route::get('listar',[Titulo::class,'listarTitulo'])->name('titulo.listar');
    Route::delete('excluir/{Titulo}',[Titulo::class,'excluirTitulo'])->name('titulo.excluir');
    Route::get('{titulo}/editar',[Titulo::class,'editarTitulo'])->name('titulo.editar');
    Route::get('adicionar',[Titulo::class,'formularioNovoTitulo'])->name('titulo.adicionar');
    Route::post('adicionar',[Titulo::class,'adicionarTitulo'])->name('titulo.gravar');
    Route::put('{titulo}',[Titulo::class,'gravaEditarTitulo'])->name('titulo.gravarEdicao');
});

Route::prefix('usuarios')->group(function () {
    Route::get('listar',[Usuario::class,'listarUsuario'])->name('usuario.listar');
    Route::put('{usuario}/inativar',[Usuario::class,'inativarUsuario'])->name('usuario.inativar');
    Route::get('{usuario}/editar',[Usuario::class,'editarUsuario'])->name('usuario.editar');
    Route::get('adicionar',[Usuario::class,'formularioNovoUsuario'])->name('usuario.adicionar');
    Route::post('adicionar',[Usuario::class,'adicionarUsuario'])->name('usuario.gravar');
    Route::put('{usuario}',[Usuario::class,'gravaEditarUsuario'])->name('usuario.gravarEdicao');
});

Route::prefix('emprestimos')->group(function () {
    Route::put('{reserva}',[Emprestimo::class,'gravaEditarEmprestimo'])->name('emprestimo.gravarEdicao');
});
