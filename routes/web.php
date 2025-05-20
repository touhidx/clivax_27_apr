<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



Auth::routes();

// Category Route start
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/show', [CategoryController::class, 'show'])->name('category.show');
Route::delete('category/delete/{category}', [CategoryController::class, 'delete'])->name('category.delete');
Route::get('category/status/{category}', [CategoryController::class, 'status'])->name('category.status');
Route::get('category/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('category/update/{category}', [CategoryController::class, 'update'])->name('category.update');
//category Route end
// Blog Route start
Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('blog/list', [BlogController::class, 'list'])->name('blog.list');
Route::delete('blog/delete/{blog}', [BlogController::class, 'delete'])->name('blog.delete');
Route::get('blog/status/{blog}', [BlogController::class, 'status'])->name('blog.status');
Route::get('blog/edit/{blog}', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('blog/update/{blog}', [BlogController::class, 'update'])->name('blog.update');
//Blog Route end

Route::get('userview/home', [DashboardController::class, 'home'])->name('userview.home');
Route::get('userview/blogdetails', [DashboardController::class, 'blogdetails'])->name('userview.blogdetails');
Route::get('userview/blogcontact', [DashboardController::class, 'blogcontact'])->name('userview.blogcontact');
