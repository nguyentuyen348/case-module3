<?php

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
