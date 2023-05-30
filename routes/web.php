<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriaController;
 


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


Route::get('/',[ProductController::class,'index'])->name('productos.index');
Route::get('/producto',[ProductController::class,'create']);
Route::post('/producto',[ProductController::class,'store'])->name('productos.store');
Route::delete('/producto/delete/{id}',[ProductController::class,'delete'])->name('producto.delete');
Route::get('producto/{id}', [ProductController::class, 'view'])->name('producto.view');
Route::put('producto/update/{id}', [ProductController::class, 'update'])->name('producto.update');


Route::get('/categoria', [CategoriaController::class, 'index']);


