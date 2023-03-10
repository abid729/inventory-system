<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Brands;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Units;
use App\Http\Controllers\Category;
use App\Http\Controllers\BaseunitsController;

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
    return view('welcome');
});

Route::auth();
Route::prefix('admin')->middleware(['auth'])->group(function () {

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('product.store');


// admin group routes
    Route::get('/products', [AdminController::class, 'adminShowAllProduct'])->name('admin.product.index');
    Route::get('/products/comments', [AdminController::class, 'adminGetAllComments'])->name('admin.comment.index');
    Route::delete('/products/delete/{id}', [AdminController::class, 'adminDeleteProduct'])->name('admin.product.delete');
    Route::delete('/products/comments/{id}', [AdminController::class, 'adminDeleteComment'])->name('admin.comment.delete');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');


Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/products/update/{id}', [ProductController::class, 'update'])->name('product.update');

//Route::get('products/{id}', [CommentController::class, 'loadComments'])->name('product.show');
Route::post('/products/{id}', [CommentController::class, 'addComment']);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



    Route::get('/setting',[SettingController::class,'index']);
    Route::get('/all-brands',[Brands::class,'ShowAllBrands'])->name('all-brands');
    Route::get('/create-brand',[Brands::class,'create']);
    Route::post('/store-brand',[Brands::class,'store'])->name('store-brand');
    Route::get('/brand/edit/{id}', [Brands::class, 'edit'])->name('edit-brand');
    Route::post('/brand/update/{id}', [Brands::class, 'update'])->name('update-brand');
    Route::get('/unit/all',[Units::class,'ShowAllunits'])->name('all-units');
    Route::get('/unit/create',[Units::class,'create'])->name('create-unit');
    Route::post('/store-unit',[Units::class,'store'])->name('store-unit');
    Route::get('/unit/edit/{id}', [Units::class, 'edit'])->name('edit-unit');
    Route::post('/unit/update/{id}', [Units::class, 'update'])->name('update-unit');
    Route::delete('/unit/delete/{id}', [Units::class, 'DeleteUnits'])->name('delete-unit');
    // Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/baseunit/all',[BaseunitsController::class,'ShowAllunits'])->name('all-baseunit');
    Route::get('/baseunit/create',[BaseunitsController::class,'create'])->name('create-baseunit');
    Route::post('/store-unit',[BaseunitsController::class,'store'])->name('store-baseunit');
    Route::get('/baseunit/edit/{id}', [BaseunitsController::class, 'edit'])->name('edit-baseunit');
    Route::post('/baseunit/update/{id}', [BaseunitsController::class, 'update'])->name('update-baseunit');
    Route::delete('/baseunit/delete/{id}', [BaseunitsController::class, 'DeleteUnits'])->name('delete-baseunit');

    Route::get('/category/all',[Category::class,'ShowAllcategory'])->name('all-category');
    Route::get('/category/create',[Category::class,'create'])->name('create-category');
    Route::post('/store-category',[Category::class,'store'])->name('store-category');
    Route::get('/category/edit/{id}', [Category::class, 'edit'])->name('edit-category');
    Route::post('/category/update/{id}', [Category::class, 'update'])->name('update-category');
    Route::delete('/category/delete/{id}', [Category::class, 'Deletecategory'])->name('delete-category');

Route::get('changeStatus', [Units::class, 'changeStatus'])->name('changeStatus');
});