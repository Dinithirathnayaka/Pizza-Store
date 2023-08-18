<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RiderController;
use App\Http\Controllers\Admin\UsersController;

use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\MenuController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/services', [HomeController::class, 'services'])->name('services');

Route::get('/placeorder', [OrdersController::class, 'create'])->name('orders.create');
Route::post('/placeorder', [OrdersController::class, 'store'])->name('orders.store');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/fetch-products', [MenuController::class, 'fetchProductsByCategory']);


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::patch('/cart/update/{product}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');








Route::group(['prefix' => 'admin'], function () {

    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // producrs
    Route::get('/products', [ProductController::class, 'index'])->name('admin.product');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::patch('/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('admin.product.delete');

    // categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.category');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::delete('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.delete');

    // riders
    Route::get('/riders', [RiderController::class, 'index'])->name('admin.riders');
    Route::get('/riders/create', [RiderController::class, 'create'])->name('admin.riders.create');
    Route::get('/riders/{rider}/edit', [RiderController::class, 'edit'])->name('admin.riders.edit');
    Route::patch('/riders/{rider}', [RiderController::class, 'update'])->name('admin.riders.update');
    Route::post('/riders', [RiderController::class, 'store'])->name('admin.riders.store');
    Route::delete('/rider/delete/{id}', [RiderController::class, 'destroy'])->name('admin.riders.delete');

    // users
    Route::get('/users', [UsersController::class, 'users'])->name('admin.users');

    // orders
    Route::get('/orders', [OrdersController::class, 'index'])->name('admin.orders');
    Route::get('/orders/{id}/show', [OrdersController::class, 'show'])->name('admin.orders.show');
});
