<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAdminAuth;

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

Route::get('/admin/login', 'Backends\AuthController@getLogin')->name('admin.login');
Route::post('/admin/login', 'Backends\AuthController@postLogin')->name('admin.login');
Route::get('/admin/logout', 'Backends\AuthController@getLogout')->name('admin.logout');

Route::namespace('Backends')->middleware(CheckAdminAuth::class)->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@home')->name('admin.home');
    Route::get('/product', 'ProductController@index')->name('admin.product.index');
    Route::get('/product/insert-auto', 'ProductController@insertAuto')->name('admin.product.insertAuto');
    Route::get('/product/insert-basic', 'ProductController@getInsertBasic')->name('admin.product.insertBasic');
    Route::post('/product/insert-basic', 'ProductController@postInsertBasic')->name('admin.product.insertBasic');
    Route::get('/product/update-basic/{id}', 'ProductController@getUpdateBasic')->name('admin.product.updateBasic');
    Route::post('/product/update-basic/{id}', 'ProductController@postUpdateBasic')->name('admin.product.updateBasic');
});

Route::namespace('Frontends')->group(function () {
    Route::get('/', 'HomeController@home')->name('frontend.home');
});