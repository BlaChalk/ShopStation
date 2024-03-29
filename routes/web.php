<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});

Route::get('/product', 'ProductDetailController@showByPublicCategory');

Route::get('/product-single', function () {
    return view('product-single');
});
Route::get('/product-detail/{productDetail}', 'ProductDetailController@showByPublic');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Admin

Route::group(['middleware' => ['auth']], function () {

    Route::resource('/admin/product-details', 'ProductDetailController');
    Route::resource('/admin/categories', 'CategoryController');
});
