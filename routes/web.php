<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
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


Route::get('home', [studentController::class, 'index'])->name('home.index');


Route::get('info/{id}', [studentController::class, 'show'])->name('info.informacion');
Route::get('new', [studentController::class, 'create'])->name('new.create');
Route::get('store', [studentController::class, 'store'])->name('store.store');
Route::get('edit/{datos}', [studentController::class, 'edit'])->name('edit.edit');
Route::put('update/{datos}', [studentController::class, 'update'])->name('update.update');
Route::get('delete/{datos}', [studentController::class, 'destroy'])->name('delete.delete');

