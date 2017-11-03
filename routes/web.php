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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['role:administrator','role:superadministrator']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
});


Route::get('/', 'Front@index');
// Route::get('/products', 'Front@products');
// Route::get('/products/details/{id}', 'Front@product_details');
// Route::get('/products/categories/{name}', 'Front@product_categories');
// Route::get('/products/brands/{name}/{category?}', 'Front@product_brands');
// Route::get('/blog', 'Front@blog');
// Route::get('/blog/{id}', 'Front@blog_post');
// Route::get('/contact-us', 'Front@contact_us');