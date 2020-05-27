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

// -----------------backend-----------------
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

// -----------------frontend-----------------
Route::post('/login', 'Frontends\AuthController@postLogin')->name('frontend.login');
Route::get('/logout', 'Frontends\AuthController@getLogout')->name('frontend.logout');

Route::namespace('Frontends')->group(function () {
    Route::get('/', 'HomeController@home')->name('frontend.home');

   	// spend
    Route::get('/spends', 'SpendController@index')->name('frontend.spend.index');
    Route::get('/spend/add', 'SpendController@getAdd')->name('frontend.spend.add');
    Route::post('/spend/add', 'SpendController@postAdd')->name('frontend.spend.add');
    Route::get('/spend/edit/{id}', 'SpendController@getEdit')->name('frontend.spend.edit');
    Route::post('/spend/edit/{id}', 'SpendController@postEdit')->name('frontend.spend.edit');
    Route::get('/spend/delete/{id}', 'SpendController@getDelete')->name('frontend.spend.delete');

   	// category spend
    Route::get('/category-spends', 'CategorySpendController@index')->name('frontend.category.spend.index');
    Route::get('/category-spend/add', 'CategorySpendController@getAdd')->name('frontend.category.spend.add');
    Route::post('/category-spend/add', 'CategorySpendController@postAdd')->name('frontend.category.spend.add');
    Route::get('/category-spend/edit/{id}', 'CategorySpendController@getEdit')->name('frontend.category.spend.edit');
    Route::post('/category-spend/edit/{id}', 'CategorySpendController@postEdit')->name('frontend.category.spend.edit');
    Route::get('/category-spend/delete/{id}', 'CategorySpendController@getDelete')->name('frontend.category.spend.delete');
    Route::get('/ajax/category-spend', 'CategorySpendController@getByIdAjax')->name('frontend.ajax.category.spend.getById');

   	// statistical
    Route::get('/statistical', 'StatisticalController@index')->name('frontend.statistical.index');
});