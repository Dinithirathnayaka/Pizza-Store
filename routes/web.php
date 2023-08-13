<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RiderController;
use App\Http\Controllers\CartController;
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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('about');
Route::get('/fetch-products',[App\Http\Controllers\MenuController::class, 'fetchProductsByCategory']);
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
Route::get('/services', [App\Http\Controllers\ServicesController::class, 'services'])->name('services');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::patch('/cart/update/{product}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');






// ----------------ADMIN PANEL---------

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/product', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.product');
    Route::get('/products/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.products.create');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::patch('/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::post('/products', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin.products.store');
    Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('admin.product.delete');

    Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category');
    Route::post('/category/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');
    Route::delete('/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin.category.delete');

    Route::get('/riders', [RiderController::class, 'index'])->name('admin.riders');
    Route::get('/riders/create', [RiderController::class, 'create'])->name('admin.riders.create');
    Route::get('/riders/{rider}/edit', [RiderController::class, 'edit'])->name('admin.riders.edit');
    Route::patch('/riders/{rider}', [RiderController::class, 'update'])->name('admin.riders.update');
    Route::post('/riders', [RiderController::class, 'store'])->name('admin.riders.store');
    Route::delete('/rider/delete/{id}', [RiderController::class, 'destroy'])->name('admin.riders.delete');

    Route::get('/users', [App\Http\Controllers\Admin\UsersController::class, 'users'])->name('admin.users');
    Route::get('/orders', [App\Http\Controllers\Admin\OrdersController::class, 'orders'])->name('admin.orders');
    Route::get('/login', [App\Http\Controllers\Admin\AdminLoginController::class, 'login'])->name('admin.login');
});
