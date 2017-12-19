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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/search', 'HomeController@search')->name('search');
Route::any('user/delete/{id}','HomeController@d1')->name=('delete');
//Route::any('timesheet/ajax-get-quick-date', 'TimesheetController@ajaxGetQuickDate')->name('ajax_get_quick_date');
Route::get('user/edit/{id}','HomeController@show')->name=('edit');
Route::post('user/edit/edit', 'HomeController@edit')->name('edit');