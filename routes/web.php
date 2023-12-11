<?php

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
use App\Http\Controllers\UsuarioController;

/* Route::get('/', function () {
    return view([UsuariosController::class, 'index']);
}); */

/* Route::get('/', [UsuarioController::class, 'index'])->name('usuarios.index');

Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');

Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy'); */



Route::get('/', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/store', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/{id}', [UsuarioController::class, 'show'])->name('usuarios.show');
Route::get('/{id}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/{id}/update', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{id}/destroy', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');
