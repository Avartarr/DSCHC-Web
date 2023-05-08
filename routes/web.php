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

Route::get('/', function () {
    return view('welcome');
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('Dschc', [App\Http\Controllers\AdminController::class, 'Dschc'])->name('Dschc');

Route::get('blog', [App\Http\Controllers\AdminController::class, 'blog'])->name('blog');

Route::get('healthplan', [App\Http\Controllers\AdminController::class, 'healthplan'])->name('healthplan');

Route::get('blogform', [App\Http\Controllers\AdminController::class, 'blogform'])->name('blogform');
Route::post('Store', [App\Http\Controllers\AdminController::class, 'Store'])->name('Store');

Route::get('BlogEx/{id}', [App\Http\Controllers\AdminController::class, 'BlogEx'])->name('BlogEx');
Route::get('update/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('update');

