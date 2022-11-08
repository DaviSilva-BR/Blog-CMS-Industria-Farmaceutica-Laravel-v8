<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'homePage'])->name('homePage');
Route::get('/blog/{slug}', [PageController::class, 'show'])->name('show');
Route::get('/blog/', [PageController::class, 'article'])->name('article');

Auth::routes();

Route::get('admin/', [EmployeeController::class, 'index'])->name('admin');
Route::post('admin/store', [EmployeeController::class, 'store'])->name('store');
Route::get('admin/fetchall', [EmployeeController::class, 'fetchAll'])->name('fetchAll');
Route::delete('admin/delete', [EmployeeController::class, 'delete'])->name('delete');
Route::get('admin/edit', [EmployeeController::class, 'edit'])->name('edit');
Route::post('admin/update', [EmployeeController::class, 'update'])->name('update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
