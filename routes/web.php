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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Products Routes*/

Route::get('/products', 'ProductsController@index')->name('products');
Route::post('createType', 'ProductsController@createType');
Route::get('storeActivity', 'ProductsController@storeActivity');
Route::post('storeProducts', 'ProductsController@create');
Route::get('search', 'ProductsController@searchPIS');

/*Recipeints Routes*/

Route::get('/recipients', 'RecipientsController@index')->name('recipients');

Route::post('storeRecipients', 'RecipientsController@store');
Route::get('getRecipient', 'RecipientsController@searchRecipient');
Route::get('recipient/{id}','RecipientsController@destroy');

/*Handovers Routes*/
Route::get('/handovers', 'HandoversController@index')->name('handovers');


/* Admin Routes*/

Route::prefix('admin')->group( function()
{
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');
});

