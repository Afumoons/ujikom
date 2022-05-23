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

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->withoutMiddleware('auth');

Route::get('/admin', [Admin\DashboardController::class, 'index'])->middleware(['auth'])->name('admin.dashboard');
Route::get('shop', [App\Http\Controllers\HomeController::class, 'shop'])->withoutMiddleware('auth')->name('shop');
Route::get('shop/{slug}', [App\Http\Controllers\HomeController::class, 'shop_detail'])->withoutMiddleware('auth')->name('shop-detail');
Route::get('cart', [App\Http\Controllers\CartController::class, 'index'])->middleware(['auth'])->name('cart');
Route::post('addItem/{product}', [App\Http\Controllers\CartController::class, 'addItem'])->middleware(['auth'])->name('addItem');
Route::post('updateItem/{hash}', [App\Http\Controllers\CartController::class, 'updateItem'])->middleware(['auth'])->name('updateItem');
Route::post('removeItem/{hash}', [App\Http\Controllers\CartController::class, 'removeItem'])->middleware(['auth'])->name('removeItem');
Route::get('checkout', [App\Http\Controllers\CartController::class, 'checkout'])->middleware(['auth'])->name('checkout');

Route::group(['middleware' => ['auth', 'role:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('user', Admin\UserController::class)->names('user')->except('show');
    Route::resource('product-category', Admin\ProductCategoryController::class)->names('product-category')->except('show');
    Route::resource('product', Admin\ProductController::class)->names('product')->except('show');
});

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index']);
//Language Translation

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::post('/formsubmit', [App\Http\Controllers\HomeController::class, 'FormSubmit'])->name('FormSubmit');
