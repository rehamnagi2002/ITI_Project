<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\UserController;
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


/* -----------------------Admin route-------------------------*/
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'create']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');

    Route::get('/register', [AdminController::class, 'createregister']);
    Route::post('/register/create', [AdminController::class, 'storeregister'])->name('admin.register');

    Route::get('/dashboard', [AdminController::class, 'index'])->middleware('admin')->name('admin.index');


});
/* -----------------------End admin route-------------------------*/
/* -----------------------user route-------------------------*/

Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'start'])->name('user.start');

    Route::get('/login', [UserController::class, 'create'])->name('user.create');
    Route::post('/login', [UserController::class, 'store'])->name('user.login');

    Route::get('/register', [UserController::class, 'createregister'])->name('user.createregister');
    Route::post('/register/create', [UserController::class, 'storeregister'])->name('user.register');

    Route::get('/index', [UserController::class, 'index'])->middleware('web')->name('user.index');
    Route::get('/{id}', [UserController::class, 'show'])->middleware('web')->name('user.show');
});

Route::prefix('user/products')->group(function () {
    Route::get('/index', [ProductController::class, 'index'])->middleware('web')->name('product.index');
    Route::post('/to_cart/{id}', [ProductController::class, 'to_cart'])->name('to_cart');
    Route::get('/search', [ProductController::class, 'search'])->name('searchP');


});

Route::prefix('user/carts')->group(function () {
    Route::get('/index', [CartController::class, 'index'])->middleware('web')->name('cart.index');
    Route::get('/addOrder', [CartController::class, 'addOrder'])->name('addOrder');
    Route::delete('/{id}', [CartController::class, 'destroy'])->middleware('admin')->name('cart.destroy');

});

Route::prefix('user/categories')->group(function () {
    Route::get('/index', [CategoryController::class, 'indexU'])->middleware('web')->name('category.indexU');
    Route::get('/index/{id}', [CategoryController::class, 'showU'])->middleware('web')->name('category.showU');
    Route::post('/to_cart/{id}', [ProductController::class, 'to_cart'])->name('to_cartP');

});

/* -----------------------End user route-------------------------*/

/*--------------------------Category route------------------------*/
Route::prefix('admin/categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->middleware('admin')->name('category.index');
    Route::get('/search', [CategoryController::class, 'search'])->name('search');
    Route::get('/create', [CategoryController::class, 'create'])->middleware('admin')->name('category.create');
    Route::get('/{id}', [CategoryController::class, 'show'])->middleware('admin')->name('category.show');

    Route::delete('/{id}', [CategoryController::class, 'destroy'])->middleware('admin')->name('category.destroy');
    Route::post('/store', [CategoryController::class, 'store'])->middleware('admin')->name('category.store');
});

/*--------------------------End category route------------------------*/

/*--------------------------Product route------------------------*/
Route::prefix('admin/products')->group(function () {
    Route::get('/create', [ProductController::class, 'create'])->middleware('admin')->name('product.create');
    Route::get('/{id}', [ProductController::class, 'show'])->middleware('admin')->name('product.show');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->middleware('admin')->name('product.destroy');
    Route::get('/products/update/{id}', [ProductController::class, 'update'])->middleware('admin')->name('product.update');
    Route::put('/products/edit/{id}', [ProductController::class, 'edit'])->middleware('admin')->name('product.edit');
    Route::post('/store', [ProductController::class, 'store'])->middleware('admin')->name('product.store');
});
/*--------------------------End product route------------------------*/

/*-------------------------- Order route------------------------*/
Route::prefix('admin')->group(function () {
    Route::get('/user', [AdminUserController::class, 'index'])->middleware('admin')->name('adminUser.index');
    Route::get('/user/{id}', [AdminUserController::class, 'show'])->middleware('admin')->name('adminUser.show');

});

/*--------------------------End order route------------------------*/
/*-------------------------- Order route------------------------*/
Route::prefix('admin/orders')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->middleware('admin')->name('order.index');
    Route::get('/{id}', [OrderController::class, 'show'])->middleware('admin')->name('order.show');

});

/*--------------------------End order route------------------------*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';