<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\User\ContactController as UserContactController;
use App\Http\Controllers\UserController;
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

 Route::get('/',[UserController::class,'welcome'])->name('user.welcome');
Route::get('aboutUs',[UserController::class,'about'])->name('user.about');
Route::get('services',[UserController::class,'services'])->name('user.services');
Route::get('blog',[UserController::class,'blog'])->name('user.blog');
Route::get('contactUs',[UserController::class,'contact'])->name('user.contact');
Route::post('user/contact/store', [UserController::class, 'store'])->name('user.contact.store');
Route::get('special_steel',[UserController::class,'steel'])->name('user.steel');
Route::get('iron_making',[UserController::class,'iron'])->name('user.iron');
Route::get('ferro_alloy',[UserController::class,'ferro'])->name('user.ferro');
Route::get('Round_Bars',[UserController::class,'bars'])->name('user.bars');
Route::get('wire_rods',[UserController::class,'wire'])->name('user.wire');
Route::get('oxygen',[UserController::class,'oxygen'])->name('user.oxygen');



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

//blog
Route::get('admin/blog', [BlogController::class, 'blog'])->name('admin.blog')->middleware('auth');
Route::get('admin/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
Route::post('admin/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
Route::get('admin/blog/edit/{id}', [BlogController::class, 'edit'])->name('admin.blog.edit');
Route::post('admin/blog/update/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
Route::delete('admin/blog/delete/{id}', [BlogController::class, 'delete'])->name('admin.blog.delete');

//products
Route::get('admin/productsImage', [ProductController::class, 'products'])->name('admin.products');
Route::get('admin/productsImage/create', [ProductController::class, 'create'])->name('admin.products.create');
Route::post('admin/productsImage/store', [ProductController::class, 'send'])->name('admin.products.store');

Route::get('admin/productsImage/edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::post('admin/productsImage/update/{id}', [ProductController::class, 'update'])->name('admin.products.update');
Route::delete('admin/productsImage/delete/{id}', [ProductController::class, 'delete'])->name('admin.products.delete');

//services
Route::get('admin/services', [ServiceController::class, 'services'])->name('admin.services');
Route::get('admin/services/create', [ServiceController::class, 'create'])->name('admin.services.create');
Route::post('admin/services/store', [ServiceController::class, 'store'])->name('admin.services.store');
Route::get('admin/services/edit/{id}', [ServiceController::class, 'edit'])->name('admin.services.edit');
Route::post('admin/services/update/{id}', [ServiceController::class, 'update'])->name('admin.services.update');
Route::delete('admin/services/delete/{id}', [ServiceController::class, 'delete'])->name('admin.services.delete');

//contact
Route::get('admin/contact', [ContactController::class, 'contact'])->name('admin.contact');
Route::get('admin/contact/create', [UserContactController::class, 'create'])->name('admin.contact.create');



