<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Administrador
Route::group(["prefix" => 'administrador'],function () {
  Route::group(["prefix" => 'estadisticas'],function () {
    Route::get('/', [App\Http\Controllers\Admin\StadisticController::class, 'index'])->name('admin.stadistic.index');
  });
  Route::group(["prefix" => 'categorias'],function () {
    Route::get('/', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category.index');
    Route::post('/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.store');
  });
  Route::group(["prefix" => 'productos'],function () {
    Route::get('/', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.product.index');
    Route::post('/store', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin.product.store');
  });
});
