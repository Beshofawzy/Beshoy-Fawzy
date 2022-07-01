<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\admin\productcontroller;

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

Route::get('dashboard',dashboardcontroller::class)->name('dashboard');
Route::get('dashboard/products',[productcontroller::class,'index'])->name('dashboard.products.index');
Route::get('dashboard/products/create',[productcontroller::class,'create'])->name('dashboard.products.create');
Route::get('dashboard/products/edit',[productcontroller::class,'edit'])->name('dashboard.products.edit');
