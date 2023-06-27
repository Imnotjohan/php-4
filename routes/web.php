<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\ImparteController;
use App\Http\Controllers\ProfesorController;

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

Route::get('/', [ViewController::class, 'index'])->name('home');

Route::prefix('view')->group(function () {
    Route::get('/aula', [ViewController::class, 'aula'])->name('view.aula');
    Route::get('/aula/{id}', [ViewController::class, 'aulaEdit'])->name('view.aula.edit');

    Route::get('/clase', [ViewController::class, 'clase'])->name('view.clase');
    Route::get('/clase/{clase}', [ViewController::class, 'claseEdit'])->name('view.clase.edit');

    Route::get('/profesor', [ViewController::class, 'profesor'])->name('view.profesor');
    Route::get('/profesor/{profesor}', [ViewController::class, 'profesorEdit'])->name('view.profesor.edit');

    Route::get('/imparte', [ViewController::class, 'imparte'])->name('view.imparte');
    Route::get('/imparte/{c_codclase}/{p_idprofesor}/{a_idaula}', [ViewController::class, 'imparteEdit'])->name('view.imparte.edit');
});


Route::resource('aula', AulaController::class);
Route::get('aula/{id}/imparte', [AulaController::class, 'imparte']);

Route::resource('clase', ClaseController::class)->except('update');
Route::put('clase/{codclase}', [ClaseController::class, 'update'])->name('clase.update');
Route::get('clase/{codclase}/imparte', [ClaseController::class, 'imparte'])->name('clase.imparte');

Route::resource('profesor', ProfesorController::class);

Route::resource('imparte', ImparteController::class)->except(['destroy', 'update']);
Route::put('imparte/update/{c_codclase}/{p_idprofesor}/{a_idaula}', [ImparteController::class, 'update'])->name('imparte.update');
Route::delete('imparte/delete/{c_codclase?}/{p_idprofesor?}/{a_idaula?}', [ImparteController::class, 'destroy'])->name('imparte.destroy');

