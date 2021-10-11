<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\CostCategoryController;
use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\WalletCategoryController;

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
    return redirect()->route('login');
});
// Google URL
Route::get('/google', [GoogleController::class, 'redirectToGoogle'])->name('pages.google');
Route::get('/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::prefix('pages')->group(function () {
    Route::get('/login', [LoginController::class, 'showFormLogin'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('pages.login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('pages.logout');


    Route::get('/register', [LoginController::class, 'showFormRegister'])->name('pages.showFormRegister');
    Route::post('/register', [LoginController::class, 'register'])->name('pages.register');
    Route::get('change-password', [LoginController::class, 'showFormChangePassword'])->name('pages.showFormChangePassword');
    Route::post('change-password', [LoginController::class, 'changePassword'])->name('pages.changePassword');
});
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::prefix('users')->group(function () {
        Route::prefix('wallets')->group(function () {
            Route::get('list', [WalletController::class, 'index'])->name('wallets.index');
            Route::get('create', [WalletController::class, 'create'])->name('wallets.create');
            Route::post('create', [WalletController::class, 'store'])->name('wallets.store');
            Route::get('{id}/detail', [WalletController::class, 'show'])->name('wallets.detail');

            Route::get('{id}/edit', [WalletController::class, 'edit'])->name('wallets.edit');
            Route::post('{id}/edit', [WalletController::class, 'update'])->name('wallets.update');
            Route::get('{id}/delete', [WalletController::class, 'delete'])->name('wallets.delete');
            Route::get('{id}/costs/create', [WalletController::class, 'createCost'])->name('wallets.createCost');
            Route::post('{id}/costs/create', [WalletController::class, 'storeCost'])->name('wallets.storeCost');
            Route::get('{id}/incomes/create', [WalletController::class, 'createIncome'])->name('wallets.createIncome');
            Route::post('{id}/incomes/create', [WalletController::class, 'storeIncome'])->name('wallets.storeIncome');


            Route::get('{id}/costs/list', [WalletController::class, 'listCosts'])->name('wallets.listCosts');
            Route::get('{id}/incomes/list', [WalletController::class, 'listIncomes'])->name('wallets.listIncomes');


            Route::prefix('categories')->group(function () {
                Route::get('/list', [WalletCategoryController::class, 'index'])->name('walletCategories.index');
                Route::get('/create', [WalletCategoryController::class, 'create'])->name('walletCategories.create');
                Route::post('/create', [WalletCategoryController::class, 'store'])->name('walletCategories.store');
                Route::get('{id}/edit', [WalletCategoryController::class, 'edit'])->name('walletCategories.edit');
                Route::post('{id}/edit', [WalletCategoryController::class, 'update'])->name('walletCategories.update');
                Route::get('{id}/delete', [WalletCategoryController::class, 'delete'])->name('walletCategories.delete');
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

            Route::prefix('incomes')->group(function () {
                Route::get('list', [IncomeController::class, 'index'])->name('incomes.index');
                Route::get('create', [IncomeController::class, 'create'])->name('incomes.create');
                Route::post('create', [IncomeController::class, 'store'])->name('incomes.store');
                Route::get('{id}/edit', [IncomeController::class, 'edit'])->name('incomes.edit');
                Route::post('{id}/edit', [IncomeController::class, 'update'])->name('incomes.update');
                Route::get('{id}/delete', [IncomeController::class, 'delete'])->name('incomes.delete');
                Route::prefix('categories')->group(function () {
                    Route::get('/list', [IncomeCategoryController::class, 'index'])->name('incomeCategories.index');
                    Route::get('/create', [IncomeCategoryController::class, 'create'])->name('incomeCategories.create');
                    Route::post('/create', [IncomeCategoryController::class, 'store'])->name('incomeCategories.store');
                    Route::get('{id}/edit', [IncomeCategoryController::class, 'edit'])->name('incomeCategories.edit');
                    Route::post('{id}/edit', [IncomeCategoryController::class, 'update'])->name('incomeCategories.update');
                    Route::get('{id}/delete', [IncomeCategoryController::class, 'delete'])->name('incomeCategories.delete');
                });
            });
        });
    });
});
