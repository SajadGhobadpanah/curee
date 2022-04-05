<?php


use Illuminate\Support\Facades\Route;

Route::resource('discounts', @\Modules\Discount\Http\Controllers\admin\DiscountController::class);
