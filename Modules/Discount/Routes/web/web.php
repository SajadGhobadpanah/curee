<?php

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


use Illuminate\Support\Facades\Route;

Route::prefix('discount')->group(function () {
    Route::post('discount/check', [\Modules\Discount\Http\Controllers\DiscountController::class, 'check'])->name('discount.check');
});

Route::get('delete/discount', [\Modules\Discount\Http\Controllers\DiscountController::class, 'delete'])->name('delete.discount');
