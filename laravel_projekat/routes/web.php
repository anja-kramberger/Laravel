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

//Route::get('/', function () {
  //  return view('welcome');
//});
Auth::routes();

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/kontakt', [App\Http\Controllers\Frontend\KontaktController::class, 'index']);
Route::post('/kontakt', [App\Http\Controllers\Frontend\KontaktController::class, 'store'])->name('validate.kontakt');
Route::get('/onama', [App\Http\Controllers\Frontend\FrontendController::class, 'onama']);
Route::get('/galerija', [App\Http\Controllers\Frontend\FrontendController::class, 'galerija']);

Route::get('/products', [App\Http\Controllers\Frontend\FrontendController::class, 'products']);
Route::get('/products/{product}', [App\Http\Controllers\Frontend\FrontendController::class, 'productView']);
//Route::get('/products', [App\Http\Controllers\Frontend\FrontendController::class, 'categories']);
//Route::get('/products/{productId}', [App\Http\Controllers\Frontend\FrontendController::class, 'addToCart']);

Route::middleware(['auth'])->group(function(){
    Route::get('cart', [App\Http\Controllers\Frontend\CartController::class, 'index']);
    Route::get('checkout', [App\Http\Controllers\Frontend\CheckoutController::class, 'index']);
    Route::get('orders', [App\Http\Controllers\Frontend\OrderController::class, 'index']);
    Route::get('orders/{orderId}', [App\Http\Controllers\Frontend\OrderController::class, 'show']);
});

Route::get('/thank-you', [App\Http\Controllers\Frontend\FrontendController::class, 'thankyou']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::resource('product', App\Http\Controllers\Admin\ProductController::class);

    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
       Route::get('/product', 'index');
       Route::get('/product/create', 'create');
       Route::post('/product', 'store');
       Route::get('/product/{product}/edit', 'edit');
       Route::put('/product/{product}', 'update');
       Route::delete('/product/{product}', 'destroy');
       //Route::get('/orders', 'index');
   });
   Route::controller(App\Http\Controllers\Admin\OrderController::class)->group(function () {
      Route::get('/orders', 'index');
      Route::get('/orders/{orderId}', 'show');
      //Route::get('/orders/{orderId}', 'updateOrderStatus');
});

    


});

