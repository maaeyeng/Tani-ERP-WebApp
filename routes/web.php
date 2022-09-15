<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('dashboard', 'App\Http\Controllers\UserController@dashboard')->middleware('auth');

Route::resource('/products', ProductController::class);
Route::get('/pos', function(){
    return "POS system";
});
Route::get('/erp', function(){
    return "ERP System";
});
Route::get('/shop', function(){
    return "Web Shop System";
});
Route::get('/hr', function(){
    return "HR System";
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
