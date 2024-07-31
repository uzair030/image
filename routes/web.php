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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pictures', [App\Http\Controllers\GalleryController::class, 'index'])->name('picture.index');
Route::get('/picture/create', [App\Http\Controllers\GalleryController::class, 'create'])->name('picture.create');
Route::post('/picture/store', [App\Http\Controllers\GalleryController::class, 'store'])->name('picture.store');
Route::get('/picture/delete/{id}', [App\Http\Controllers\GalleryController::class, 'delete'])->name('picture.delete');
Route::get('/picture/edit/{id}', [App\Http\Controllers\GalleryController::class, 'edit'])->name('picture.edit');
Route::post('/picture/update/{id}', [App\Http\Controllers\GalleryController::class, 'update'])->name('picture.update');
