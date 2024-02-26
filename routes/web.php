<?php

use App\Http\Controllers\PrecioController;
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

Route::get('/', [PrecioController::class, 'index'])->name('propiedad.home');

Route::get('/propiedades/crear', [PrecioController::class, 'create'])->name('propiedad.create');

Route::get('/propiedades/duenios', [PrecioController::class, 'duenios'])->name('propiedad.duenios');