<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcateController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::post('admin/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::post('admin/product/store', [ProductController::class, 'store'])->name('product.store');
Route::post('admin/new/store', [NewsController::class, 'store'])->name('new.store');
Route::post('upload', [NewsController::class, 'upload'])->name('ckeditor.upload');
Route::post('admin/introduce/store', [IntroduceController::class, 'store'])->name('introduce.store');
Route::post('contact/store', [HomeController::class, 'store'])->name('contact.store');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
// Route::get('/field', [HomeController::class, 'field'])->name('field');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/new/{new}', [HomeController::class, 'new_content'])->name('new_content');
Route::get('/service', [HomeController::class, 'service'])->name('service');

Route::get('/field/{field}', [FieldController::class, 'show'])->name('field');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product');

Auth::routes();

