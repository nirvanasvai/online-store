<?php

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

Route::get('/' ,'App\Http\Controllers\HomeController@home')->name('home');
Route::get('/product' ,'App\Http\Controllers\ProductController@product')->name('product');
Route::get('/cart' ,'App\Http\Controllers\CartController@index')->name('cartIndex');


Route::post('/addToCart' ,'App\Http\Controllers\CartController@addTocart')->name('addToCart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
