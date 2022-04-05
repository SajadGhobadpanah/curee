<?php

use App\Http\Controllers\Auth\AuthPhoneController;
use App\Http\Controllers\AuthGoogleController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ArticleController;

use Illuminate\Support\Facades\Storage;

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
//    $product = \App\Models\Product::find(3);
//    return $product->comments()->get();
//    $comment = \App\Models\Comment::find(1);
//    return $comment->commentable()->get();
//
    return view('home.index');

});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('login/google', [AuthGoogleController::class, 'login'])->name('login.google');
Route::get('/auth/google/callback', [AuthGoogleController::class, 'callback']);


Route::get('/sa', [AuthGoogleController::class, 'sa'])->name('sa')->middleware(['password.confirm', 'verified']);

Route::controller(ProfileController::class)->middleware('auth')->group(function () {
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/profile/phone', 'Phone')->name('profile.phone');
    Route::post('/profile/phone', 'enablePhone');
    Route::get('/profile/phone/code', 'code')->name('profile.phone.code');
    Route::post('/profile/phone/code', 'postCode');
});
Route::controller(AuthPhoneController::class)->group(function () {
    Route::get('/code/login', 'code')->name('code.login');
    Route::post('/code/login', 'postCode');
});

//products

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/single/{product}/product', [ProductController::class, 'single'])->name('singleproduct');

//

//comments
Route::post('/comments', [CommentController::class, 'store'])->name('storecomment');

//


//category
Route::resource('/categories', @CategoryController::class);

//

//cart
Route::get('/cart/show', [CartController::class, 'cart'])->name('cart');

Route::get('/cart/add/{product}', [CartController::class, 'add'])->name('addToCart');
Route::patch('/cart/quantity/change', [CartController::class, 'quantityChange']);
Route::delete('/cart/delete/{cart}', [CartController::class, 'delete'])->name('deletecart');
//

//payment

Route::middleware('auth')->group(function () {

    Route::get('/cart/payment', [PaymentController::class, 'payment'])->name('cart.payment');

    Route::get('/payment/callback', [PaymentController::class, 'callback'])->name('payment.callback');
    Route::get('profile/orders', [OrderController::class, 'index'])->name('profile.orders');
    Route::get('profile/orders/detail/{order}', [OrderController::class, 'detail'])->name('profile.orders.detail');
    Route::get('profile/orders/payment/{order}', [OrderController::class, 'payment'])->name('profile.orders.payment');
    Route::resource('profile/users', @UserController::class);

});
//

//profile/orders
//Route::get('download/', function () {
////    return \Illuminate\Support\Facades\Storage::download($file);
//
//    return Storage::disk('local')->download(request('path'));
//
//
//})->name('download');
//
//Route::get('download/{file}', [\App\Http\Controllers\Admin\ProductGalleryController::class, 'sa'])->name('download.file');
////
//articles
Route::get('articles', [ArticleController::class, 'index'])->name('articles');
Route::get('articles/single/{article}', [ArticleController::class, 'single'])->name('article.single');

//

//news
Route::get('/news/{news}', [NewsController::class, 'index'])->name('newspage');


//

//about

Route::get('home/about', [\App\Http\Controllers\About::class, 'about'])->name('about');


//search
Route::get('search', [\App\Http\Controllers\About::class, 'search'])->name('search');
//
