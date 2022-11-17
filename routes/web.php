<?php

use App\Http\Controllers\Metodos;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Metodos::class, 'index'])->name('personas.index');
Route::get('/agregar', [Metodos::class, 'create'])->name('personas.create');
Route::post('/store', [Metodos::class, 'store'])->name('personas.store');
Route::get('/editar/{id}', [Metodos::class,'edit'])->name('personas.edit');
Route::put('/update/{id}',[Metodos::class,'update'])->name('personas.update');
Route::delete('/destroy/{id}', [Metodos::class, 'destroy'])->name('personas.destroy');