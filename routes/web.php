<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [HomeController::class,'index'])->name('index');
// Route::get('/user-add', [HomeController::class,'create'])->name('create');
// Route::post('/data-store', [HomeController::class,'store'])->name('user.store');
// Route::get('/edit-data/{id}', [HomeController::class,'edit'])->name('user.edit');
// Route::post('/update-data/{id}', [HomeController::class,'update'])->name('user.update');
// Route::get('/delete-data/{id}', [HomeController::class,'delete'])->name('user.delete');



Route::resource('product', ProductController::class);
