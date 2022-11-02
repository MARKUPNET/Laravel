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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('form.index');
Route::post('/confirm', [App\Http\Controllers\HomeController::class, 'confirm'])->name('form.confirm');
Route::post('/thanks', [App\Http\Controllers\HomeController::class, 'send'])->name('form.send');


/**
 *
 * [管理画面]
 *
 */
Auth::routes();

// トップページ
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');

// 予約カレンダー
Route::get('/admin/calendar', [App\Http\Controllers\CalendarController::class, 'index'])->name('calendar.index');
Route::get('/getbookings', [App\Http\Controllers\CalendarController::class, 'getBookings'])->name('getbookings');

// 予約リスト
Route::get('/admin/booking', [App\Http\Controllers\BookingController::class, 'index'])->name('booking.index');
Route::get('/admin/booking/create', [App\Http\Controllers\BookingController::class, 'create'])->name('booking.create');
Route::post('/admin/booking/store', [App\Http\Controllers\BookingController::class, 'store'])->name('booking.store');
Route::get('/admin/booking/edit{booking}', [App\Http\Controllers\BookingController::class, 'edit'])->name('booking.edit');
Route::post('/admin/booking/edit{booking}', [App\Http\Controllers\BookingController::class, 'update'])->name('booking.update');
Route::get('/admin/booking/show{booking}', [App\Http\Controllers\BookingController::class, 'show'])->name('booking.show');
Route::delete('/admin/booking{booking}', [App\Http\Controllers\BookingController::class, 'destroy'])->name('booking.destroy');

// 各種設定
Route::get('/admin/setting', [App\Http\Controllers\AdminController::class, 'setting'])->name('setting.index');

// プラン
Route::get('/admin/setting/plan', [App\Http\Controllers\PlanController::class, 'index'])->name('plan.index');
Route::get('/admin/setting/plan/create', [App\Http\Controllers\PlanController::class, 'create'])->name('plan.create');
Route::post('/admin/setting/plan/store', [App\Http\Controllers\PlanController::class, 'store'])->name('plan.store');
Route::get('/admin/setting/plan/edit{plan}', [App\Http\Controllers\PlanController::class, 'edit'])->name('plan.edit');
Route::post('/admin/setting/plan/edit{plan}', [App\Http\Controllers\PlanController::class, 'update'])->name('plan.update');
Route::get('/admin/setting/plan/show{plan}', [App\Http\Controllers\PlanController::class, 'show'])->name('plan.show');
Route::delete('/admin/setting/plan{plan}', [App\Http\Controllers\PlanController::class, 'destroy'])->name('plan.destroy');

// 時間帯
Route::get('/admin/setting/time', [App\Http\Controllers\TimeController::class, 'index'])->name('time.index');
Route::get('/admin/setting/time/create', [App\Http\Controllers\TimeController::class, 'create'])->name('time.create');
Route::post('/admin/setting/time/store', [App\Http\Controllers\TimeController::class, 'store'])->name('time.store');
Route::get('/admin/setting/time/edit{time}', [App\Http\Controllers\TimeController::class, 'edit'])->name('time.edit');
Route::post('/admin/setting/time/edit{time}', [App\Http\Controllers\TimeController::class, 'update'])->name('time.update');
Route::get('/admin/setting/time/show{time}', [App\Http\Controllers\TimeController::class, 'show'])->name('time.show');
Route::delete('/admin/setting/time{time}', [App\Http\Controllers\TimeController::class, 'destroy'])->name('time.destroy');

// 顧客
Route::get('/admin/setting/guest', [App\Http\Controllers\GuestController::class, 'index'])->name('guest.index');
Route::get('/admin/setting/guest/create', [App\Http\Controllers\GuestController::class, 'create'])->name('guest.create');
Route::post('/admin/setting/guest/store', [App\Http\Controllers\GuestController::class, 'store'])->name('guest.store');
Route::get('/admin/setting/guest/edit{guest}', [App\Http\Controllers\GuestController::class, 'edit'])->name('guest.edit');
Route::post('/admin/setting/guest/edit{guest}', [App\Http\Controllers\GuestController::class, 'update'])->name('guest.update');
Route::get('/admin/setting/guest/show{guest}', [App\Http\Controllers\GuestController::class, 'show'])->name('guest.show');
Route::delete('/admin/setting/guest{guest}', [App\Http\Controllers\GuestController::class, 'destroy'])->name('guest.destroy');
