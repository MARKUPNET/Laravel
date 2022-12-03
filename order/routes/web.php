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

// 静的ページ
Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('index');
Route::get('/privacy', [App\Http\Controllers\PageController::class, 'privacy'])->name('privacy');

// ご注文
Route::get('/shopping/{product_id?}/', [App\Http\Controllers\ShoppingController::class, 'index'])->name('shopping.index');
Route::post('/shopping/confirm', [App\Http\Controllers\ShoppingController::class, 'confirm'])->name('shopping.confirm');
Route::post('/shopping/thanks', [App\Http\Controllers\ShoppingController::class, 'send'])->name('shopping.thanks');

// 管理画面
Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::post('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');

Route::get('/admin/order/', [App\Http\Controllers\OrderController::class, 'index'])->name('order.index');
Route::get('/admin/order/show{order}', [App\Http\Controllers\OrderController::class, 'show'])->name('order.show');

Route::get('/admin/guest/edit{guest}', [App\Http\Controllers\GuestController::class, 'edit'])->name('guest.edit');
Route::post('/admin/guest/edit{guest}', [App\Http\Controllers\GuestController::class, 'update'])->name('guest.update');

Route::get('/admin/noshi/edit{noshi}', [App\Http\Controllers\NoshiController::class, 'edit'])->name('noshi.edit');
Route::post('/admin/noshi/edit{noshi}', [App\Http\Controllers\NoshiController::class, 'update'])->name('noshi.update');

Route::get('/admin/delivery/edit{delivery}', [App\Http\Controllers\DeliveryController::class, 'edit'])->name('delivery.edit');
Route::post('/admin/delivery/edit{delivery}', [App\Http\Controllers\DeliveryController::class, 'update'])->name('delivery.update');

Route::get('/admin/quantity/edit{quantity}', [App\Http\Controllers\QuantityController::class, 'edit'])->name('quantity.edit');
Route::post('/admin/quantity/edit{quantity}', [App\Http\Controllers\QuantityController::class, 'update'])->name('quantity.update');
