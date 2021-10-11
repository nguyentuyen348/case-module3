<?php

use App\Http\Controllers\WalletCategoryController;
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

Route::prefix('users')->group(function (){
    Route::prefix('wallets')->group(function (){
        Route::get('list',[\App\Http\Controllers\WalletController::class,'index'])->name('wallets.index');
        Route::get('create',[\App\Http\Controllers\WalletController::class,'create'])->name('wallets.create');
        Route::post('create',[\App\Http\Controllers\WalletController::class,'store'])->name('wallets.store');
        Route::get('{id}/edit',[\App\Http\Controllers\WalletController::class,'edit'])->name('wallets.edit');
        Route::post('{id}/update',[\App\Http\Controllers\WalletController::class,'update'])->name('wallets.update');
        Route::get('{id}/delete',[\App\Http\Controllers\WalletController::class,'delete'])->name('wallets.delete');
        Route::prefix('categories')->group(function (){
            Route::get('/list',[WalletCategoryController::class,'index'])->name('walletCategories.index');
            Route::get('/create',[WalletCategoryController::class,'create'])->name('walletCategories.create');
            Route::post('/create',[WalletCategoryController::class,'store'])->name('walletCategories.store');
            Route::get('{id}/edit',[WalletCategoryController::class,'edit'])->name('walletCategories.edit');
            Route::post('{id}/edit',[WalletCategoryController::class,'update'])->name('walletCategories.update');
            Route::get('{id}/delete',[WalletCategoryController::class,'delete'])->name('walletCategories.delete');
        });

    });
});
