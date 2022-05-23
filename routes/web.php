<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root']);

Route::get('/admin', [Admin\DashboardController::class, 'index'])->middleware(['auth'])->name('admin.dashboard');
Route::get('cart', [App\Http\Controllers\TestCartController::class, 'coba'])->middleware(['auth'])->name('cart');
Route::get('additem', [App\Http\Controllers\TestCartController::class, 'addItem'])->middleware(['auth'])->name('addItem');
Route::get('getitem', [App\Http\Controllers\TestCartController::class, 'getItem'])->middleware(['auth'])->name('getItem');
Route::get('updateItem', [App\Http\Controllers\TestCartController::class, 'updateItem'])->middleware(['auth'])->name('updateItem');
Route::get('removeItem', [App\Http\Controllers\TestCartController::class, 'removeItem'])->middleware(['auth'])->name('removeItem');

Route::group(['middleware' => ['auth', 'role:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('user', Admin\UserController::class)->names('user')->except('show');
    Route::resource('product-category', Admin\ProductCategoryController::class)->names('product-category')->except('show');
    Route::resource('product', Admin\ProductController::class)->names('product')->except('show');
});

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index']);
//Language Translation

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::post('/formsubmit', [App\Http\Controllers\HomeController::class, 'FormSubmit'])->name('FormSubmit');
