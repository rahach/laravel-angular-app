<?php

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

/*

    GET /products (index)
    GET /products/create (create)
    GET /products/1 (show)
    POST /products (store)
    GET /products/1/edit (edit)
    PATCH /products/1 (update)
    DELETE /products/1 (destroy)

*/


Route::get('/category/{category_slug}', 'CategoriesController@show');
Route::get('/categories', 'CategoriesController@index');
Route::get('/supplier/{supplier_slug}', 'SuppliersController@show');
Route::get('/advertiser/{advertiser_slug}', 'AdvertisersController@show');
Route::get('/{product_slug}', 'ProductsController@show');



Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');

