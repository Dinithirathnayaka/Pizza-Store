<?php

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
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
Route::get('/services', [App\Http\Controllers\ServicesController::class, 'services'])->name('services');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'menu'])->name('menu');


// ----------------ADMIN PANEL---------

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/product', [App\Http\Controllers\Admin\ProductController::class, 'product'])->name('admin.product');
    Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'category'])->name('admin.category');
    Route::get('/users', [App\Http\Controllers\Admin\UsersController::class, 'users'])->name('admin.users');
    Route::get('/orders', [App\Http\Controllers\Admin\OrdersController::class, 'orders'])->name('admin.orders');
});
