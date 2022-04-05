<?php


use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AddPermission;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductGalleryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\NewsController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.main');
});

Route::resource('/users', @UserController::class);
Route::resource('/permissions', @PermissionController::class);
Route::resource('/roles', @RoleController::class);
Route::resource('/products', @ProductController::class);
Route::resource('/categories', @CategoryController::class);
Route::resource('/orders', @OrderController::class);
Route::resource('/articles', @ArticleController::class);
Route::resource('/news', @NewsController::class);
Route::resource('/slides', @SlideController::class);
Route::resource('/about', @AboutController::class);
Route::resource('/product.gallery', @ProductGalleryController::class);


Route::get('/users/{user}/permission', [AddPermission::class, 'create'])->name('createpermission');
Route::post('/users/{user}/permission', [AddPermission::class, 'store'])->name('storepermissios');


Route::get('comments/unapproved', [CommentController::class, 'unapproved'])->name('unapprovedcomments');
Route::get('comments/approved', [CommentController::class, 'approved'])->name('approvedcomments');
Route::get('comments/{comment}/edit', [CommentController::class, 'edit'])->name('editcomment');
Route::put('comments/{comment}/update', [CommentController::class, 'update'])->name('updatecomment');
Route::delete('comments/{comment}/delete', [CommentController::class, 'destroy'])->name('deletecomment');

Route::get('/orders/detail/{order}', [OrderController::class, 'detail'])->name('orders.detail');
