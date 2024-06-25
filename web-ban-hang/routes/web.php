<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntroduceController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SubcateController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route cho trang đăng nhập Admin
Route::get('/admin/login',[AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/check_login',[AdminController::class, 'check_login'])->name('admin.check_login');

// Routes được bảo vệ bởi middleware 'auth'
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/index', [AdminController::class, 'index'])->name('admin.index');

    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductController::class,
        'new' => NewsController::class,
        'project' => ProjectController::class,
        'device' => DeviceController::class,
        'user' => UserController::class,
        'supplier' => SupplierController::class,
    ]);
});

// Các route khác không yêu cầu xác thực
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/introduce', [HomeController::class, 'introduce'])->name('introduce');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/new/{new}', [HomeController::class, 'new_content'])->name('new_content');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/product_info/{product}', [HomeController::class, 'product_info'])->name('product_info');
Route::get('/project', [HomeController::class, 'project'])->name('project');
Route::get('/project/{project}', [HomeController::class, 'project_info'])->name('project_info');
Route::get('/device/{device}', [HomeController::class, 'device'])->name('device');

Route::get('/field', [HomeController::class, 'field'])->name('field');
Route::get('/category', [HomeController::class, 'category'])->name('category');
Route::get('/automation', [HomeController::class, 'automation'])->name('automation');
Route::get('/vienthongxaylap', [HomeController::class, 'vienthongxaylap'])->name('vienthongxaylap');
Route::get('/doluong', [HomeController::class, 'doluong'])->name('doluong');

Route::get('/supplier/{supplier}', [HomeController::class, 'getProductBySupplier'])->name('supplier');

