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

Route::get('/', 'PagesController@home')->name('index');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'PagesController@contact')->name('contact');

/*
    /GET /important_dates (index)
    /GET /important_dates/create (create)
    /GET /important_dates/{id} (show)
    /POST /important_dates (store)
    /GET /important_dates/{id}/edit (edit)
    /PATCH /important_dates/{id} (update)
    /DELETE /important_dates/{id} (destroy)
*/

//Route::resource('important_dates', 'ImportantDatesController');
Route::get('important_dates', 'ImportantDatesController@index')->name('important_dates');
Route::get('important_dates/create', 'ImportantDatesController@create');
Route::post('important_dates', 'ImportantDatesController@store');
Route::get('important_dates/{important_date}', 'ImportantDatesController@show');
Route::get('important_dates/{important_date}/edit', 'ImportantDatesController@edit');
Route::patch('important_dates/{important_date}', 'ImportantDatesController@update');
Route::delete('important_dates/{important_date}', 'ImportantDatesController@destroy');

Auth::routes();


