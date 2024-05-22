<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcateController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login',[AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login',[AdminController::class, 'check_login']);

Route::get('/admin/register',[AdminController::class, 'register'])->name('admin.register');
Route::post('/admin/register',[AdminController::class, 'check_register']);

Route::prefix('admin')->group(function () {
    Route::get('/',[AdminController::class, 'index'])->name('admin.index');

    Route::resources([
        'category'=> CategoryController::class,
        'product'=> ProductController::class,
        'new'=> NewsController::class,
        'introduce'=>IntroduceController::class,
        'user'=> UserController::class,
    ]);
});
Route::post('admin/category/store', 'CategoryController@store');
Route::post('admin/product/store', 'ProductController@store');
Route::post('admin/new/store', 'NewsController@store');
Route::post('admin/introduce/store', 'IntroduceController@store');


Route::get('/home', [HomeController::class, 'index'])->name('index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/news', [HomeController::class, 'news'])->name('news');



// Routes cho login và register
// Route::prefix('admin')->group(function () {
//     Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
//     Route::post('/login', [AdminController::class, 'check_login'])->name('admin.check_login');

//     Route::get('/register', [AdminController::class, 'register'])->name('admin.register');
//     Route::post('/register', [AdminController::class, 'check_register'])->name('admin.check_register');
// });

// // Group các routes admin

// // Routes khác
// Route::get('/home', [HomeController::class, 'index'])->name('home.index');
// Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
