<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\TagController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PortfolioController;
use App\Http\Controllers\admin\TestimonialController;

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

Route::group(['prefix' => 'dashboard/admin', 'middleware' => ['auth:admin']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('/blogs', BlogController::class);
    Route::resource('/portfolios', PortfolioController::class);
    Route::resource('/services', ServiceController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/faqs', FaqController::class);
    Route::resource('/testimonials', TestimonialController::class);

    Route::get('/profile', [AdminController::class, 'index'])->name('profile.admin.index');
    Route::put('/profile/update', [AdminController::class, 'update'])->name('profile.admin.update');
});

//admin
Route::get('/login/admin', [LoginController::class,'index'])->middleware('guest')->name('login.admin');
Route::post('/login/admin', [LoginController::class,'login'])->middleware('guest');
Route::post('/logout/admin', [LoginController::class, 'logout']);
