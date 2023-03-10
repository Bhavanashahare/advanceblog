<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\FrontController;

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


Route::get('category/create',[CategoryController::class,'create'])->name('category.create');

Route::post('category/store',[CategoryController::class,'store'])->name('category.store');

Route::get('category/table',[CategoryController::class,'table'])->name('category.table');

Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');

Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');

Route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
Route::get('category/force-delete/{id}',[CategoryController::class,'forceDelete'])->name('category.force-delete');

Route::get('category/trash',[CategoryController::class,'trash'])->name('category.trash');
Route::get('category/restore/{id}',[CategoryController::class,'restore'])->name('category.restore');



//BLOGcONTROLLER
Route::get('blog/create',[BlogController::class,'create'])->name('blog.create');

Route::post('blog/store',[BlogController::class,'store'])->name('blog.store');
Route::get('blog/table',[BlogController::class,'table'])->name('blog.table');
Route::get('blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
Route::post('blog/update/{id}',[BlogController::class,'update'])->name('blog.update');
Route::get('blog/delete/{id}',[BlogController::class,'delete'])->name('blog.delete');


//frontController


Route::get('/',[FrontController::class,'index'])->name('index');
Route::get('blog/detail/{id}',[FrontController::class,'detail'])->name('detail');


Route::get('master',[FrontController::class,'master'])->name('master');

Route::get('dashbord',[FrontController::class,'dashbord'])->name('dashbord');
Route::get('home',[FrontController::class,'home'])->name('home');


Route::get('about',[FrontController::class,'about'])->name('about');
Route::get('contact',[FrontController::class,'contact'])->name('contact');

