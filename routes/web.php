<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductGalleryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardStoreController;
use App\Http\Controllers\DashboardTransactionController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TransactionController;
use App\Models\ProductGallery;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/{id}', [CategoryController::class, 'detail'])->name('category-detail');

Route::get('/detail/{id}', [DetailController::class, 'index'])->name('detail');
Route::post('/detail/{id}', [DetailController::class, 'add'])->name('detail-add');


// Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::delete('/cart/{id}', [CartController::class, 'delete'])->name('cart-delete');
Route::get('/success', [CartController::class, 'success'])->name('success');


// register
Route::get('/register/success', [RegisteredUserController::class, 'success'])->name('success-register');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// dashboard product
Route::get('/dashboard/products', [DashboardProductController::class, 'index'])->name('dashboard-products');
Route::get('/dashboard/products/details/{id}', [DashboardProductController::class, 'details'])->name('dashboard-products-details');
Route::get('/dashboard/products/create', [DashboardProductController::class, 'create'])->name('dashboard-products-create');

// dashboard transaction
Route::get('/dashboard/transactions', [DashboardTransactionController::class, 'index'])->name('dashboard-transactions');
Route::get('/dashboard/transactions/{id}', [DashboardTransactionController::class, 'details'])->name('dashboard-transactions-details');

// dashboard store setting
Route::get('/dashboard/store-setting', [DashboardStoreController::class, 'index'])->name('dashboard-store-setting');
Route::get('/dashboard/account', [DashboardStoreController::class, 'account'])->name('dashboard-account');


// admin
// ->middleware(['auth', 'admin'])
Route::prefix('admin')
    ->group(function() {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard-admin');
        Route::resource('category',  AdminCategoryController::class);
        Route::resource('user', UserController::class);
        Route::resource('product', ProductController::class);
        Route::resource('product-gallery', ProductGalleryController::class);
    });

    
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
