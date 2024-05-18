<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/brand', function () {
//     return view('welcome');
// });



Route::resource('brands', BrandController::class);
Route::resource('product_categories', ProductCategoryController::class);
Route::resource('products', ProductController::class);

// Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
