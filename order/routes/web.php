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

// ご注文
Route::get('/shopping', [App\Http\Controllers\ShoppingController::class, 'index'])->name('shopping.index');
Route::get('/shopping/confirm', [App\Http\Controllers\ShoppingController::class, 'confirm'])->name('shopping.confirm');
Route::get('/shopping/thanks', [App\Http\Controllers\ShoppingController::class, 'thanks'])->name('shopping.thanks');

// 管理画面
Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
