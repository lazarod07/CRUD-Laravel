<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::prefix('category')->group(function () {

    Route::get('/list', [CategoryController::class, 'list'])->name('category.list');

    Route::get('/addcategory', [CategoryController::class, 'addGet'])->name('category.addGet');

    Route::post('/addcategory', [CategoryController::class, 'addPost'])->name('category.addPost');

    Route::get('/editcategory/{id}', [CategoryController::class, 'editGet'])->name('category.editGet');

    Route::post('/editcategory/{id}', [CategoryController::class, 'editPost'])->name('category.editPost');

    Route::get('/deletecategory/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/{id}/products',  [CategoryController::class, 'products'])->name('category.products');

    Route::get('/{id}/addproduct', [CategoryController::class, 'addProductGet'])->name('category.addProductGet');

    Route::post('/{id}/addproduct', [CategoryController::class, 'addProductPost'])->name('category.addProductPost');

    Route::get('{idCategory}/editProduct/{idProduct}', [CategoryController::class, 'editProductGet'])->name('category.editProductGet');

    Route::post('{idCategory}/editProduct/{idProduct}', [CategoryController::class, 'editProductPost'])->name('category.editProductPost');

    Route::get('{idCategory}/deleteproduct/{idProduct}', [CategoryController::class, 'deleteProduct'])->name('category.deleteProduct');

});

Route::prefix('product')->group(function () {

    Route::get('/list', [ProductController::class, 'list'])->name('product.list');

    Route::get('/addproduct', [ProductController::class, 'addGet'])->name('product.addGet');

    Route::post('/addproduct', [ProductController::class, 'addPost'])->name('product.addPost');

    Route::get('/editproduct/{id}', [ProductController::class, 'editGet'])->name('product.editGet');

    Route::post('/editproduct/{id}', [ProductController::class, 'editPost'])->name('product.editPost');

    Route::get('/deleteproduct/{id}', [ProductController::class, 'delete'])->name('product.delete');
    
});

Route::prefix('store')->group(function () {

    Route::get('products', [StoreController::class, 'products'])->name('store.products');

    Route::get('sell/{id}', [StoreController::class, 'sellGet'])->name('store.sellGet');

    Route::post('sell/{id}', [StoreController::class, 'sellPost'])->name('store.sellPost');

});
