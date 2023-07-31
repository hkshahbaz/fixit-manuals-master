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

Route::get('/', 'HomeController@index')->name('homepage');

Auth::routes(['register' => false]);
Route::group(['middleware' => 'auth'],function () {

    Route::get('/adminhome','AdminController@index')->name('adminhome');
    //------------------Users--------------//
    Route::resource('users', 'UserController');
    Route::post('users/{id}', 'UserController@restore')->name('restore.user');
    Route::delete('users-prrm/{id}', 'UserController@permanentDelete')->name('permanently.delete');
    //------------------Car Model--------------//
    Route::resource('carModels', 'CarModelController');
    Route::post('carModels/{id}', 'CarModelController@restore')->name('restore.car');
    Route::delete('carModels-prrm/{id}', 'CarModelController@permanentDelete')->name('carModels.permanently.delete');
    //------------------Car brand--------------//
    Route::resource('carBrand','BrandController');
    Route::post('carBrand/{id}', 'BrandController@restore')->name('restore.brand');
    Route::delete('carBrand-prrm/{id}', 'BrandController@permanentDelete')->name('brand.permanently.delete');
    //------------------Car year--------------//
    Route::resource('year','YearController');
    Route::post('year/{id}', 'YearController@restore')->name('restore.year');
    Route::delete('year-prrm/{id}', 'YearController@permanentDelete')->name('year.permanently.delete');
    //------------------Manual--------------//
    Route::post('getmodel', 'CarModelController@getmodel')->name('getmodel');

    Route::resource('manuals','ManualController');
    Route::post('manuals/{id}', 'ManualController@restore')->name('restore.manuals');
    Route::delete('manuals-prrm/{id}', 'ManualController@permanentDelete')->name('manuals.permanently.delete');
    //------------------contact--------------//
    Route::resource('contact','ContactController');
    Route::post('contact/{id}', 'ContactController@restore')->name('restore.contact');
    Route::delete('contact-prrm/{id}', 'ContactController@permanentDelete')->name('contact.permanently.delete');
});

Route::post('search_manual', 'SearchController@manual')->name('search.manual');
Route::post('home_search', 'SearchController@main_search')->name('search.manual.exact');
Route::get('/adminhome','AdminController@index')->name('adminhome');
Route::get('manuals/ajax/{id}','HomeController@manual');
Route::resource('contact','ContactController');
Route::get('/home', 'HomeController@index')->name('home');


