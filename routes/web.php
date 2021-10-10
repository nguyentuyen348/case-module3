<?php

use App\Http\Controllers\CostCategoryController;
use App\Http\Controllers\CostController;
use App\Http\Controllers\WalletCategoryController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('backend.admin.dashboard');
// });

Route::prefix('pages')->group(function () {
    Route::get('/login', [LoginController::class, 'showFormLogin'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('pages.login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('pages.logout');
    Route::get('/register', [LoginController::class, 'showFormRegister'])->name('pages.showFormRegister');
    Route::post('/register', [LoginController::class, 'register'])->name('pages.register');
    Route::get('change-password', [LoginController::class, 'showFormChangePassword'])->name('pages.showFormChangePassword');
    Route::post('change-password', [LoginController::class, 'changePassword'])->name('pages.changePassword');

});

Route::prefix('users')->group(function () {
    Route::prefix('wallets')->group(function () {
        Route::get('list', [WalletController::class, 'index'])->name('wallets.index');
        Route::get('create', [WalletController::class, 'create'])->name('wallets.create');
        Route::post('create', [WalletController::class, 'store'])->name('wallets.store');
        Route::get('{id}/detail',[WalletController::class,'show'])->name('wallets.detail');
        Route::get('{id}/edit', [WalletController::class, 'edit'])->name('wallets.edit');
        Route::post('{id}/update', [WalletController::class, 'update'])->name('wallets.update');
        Route::get('{id}/delete', [WalletController::class, 'delete'])->name('wallets.delete');
        Route::get('{id}/costs/create', [WalletController::class, 'createCost'])->name('wallets.createCost');
        Route::post('{id}/costs/create', [WalletController::class, 'storeCost'])->name('wallets.storeCost');

        Route::prefix('categories')->group(function () {
            Route::get('/list', [WalletCategoryController::class, 'index'])->name('walletCategories.index');
            Route::get('/create', [WalletCategoryController::class, 'create'])->name('walletCategories.create');
            Route::post('/create', [WalletCategoryController::class, 'store'])->name('walletCategories.store');
            Route::get('{id}/edit', [WalletCategoryController::class, 'edit'])->name('walletCategories.edit');
            Route::post('{id}/edit', [WalletCategoryController::class, 'update'])->name('walletCategories.update');
            Route::get('{id}/delete', [WalletCategoryController::class, 'delete'])->name('walletCategories.delete');
        });
    });
    Route::prefix('costs')->group(function () {
        Route::prefix('categories')->group(function () {
            Route::get('list', [CostCategoryController::class, 'index'])->name('costCategories.index');
            Route::get('create', [CostCategoryController::class, 'create'])->name('costCategories.create');
            Route::post('create', [CostCategoryController::class, 'store'])->name('costCategories.store');
            Route::get('{id}/edit', [CostCategoryController::class, 'edit'])->name('costCategories.edit');
            Route::post('{id}/edit', [CostCategoryController::class, 'update'])->name('costCategories.update');
            Route::get('{id}/delete', [CostCategoryController::class, 'delete'])->name('costCategories.delete');
        });
        Route::get('list', [CostController::class, 'index'])->name('costs.index');
        Route::get('create', [CostController::class, 'create'])->name('costs.create');
        Route::post('create', [CostController::class, 'store'])->name('costs.store');
        Route::get('{id}/edit', [CostController::class, 'edit'])->name('costs.edit');
        Route::post('{id}/edit', [CostController::class, 'update'])->name('costs.update');
        Route::get('{id}/delete', [CostController::class, 'delete'])->name('costs.delete');
    });
});
