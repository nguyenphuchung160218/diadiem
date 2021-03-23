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
// Route::prefix('admin')->group(function() {
//     Route::get('/login', 'AdminAuthController@getLogin')->name('admin.login');
//     Route::post('/login','AdminAuthController@postLogin');
//     Route::get('/logout','AdminAuthController@getLogout')->name('admin.logout');
// });

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::group(['prefix' => 'category'],function (){
       Route::get('/','AdminCategoryController@index')->name('admin.list.category');
       Route::get('/create','AdminCategoryController@create')->name('admin.create.category');
       Route::post('/create','AdminCategoryController@store');
       Route::get('/update/{id}','AdminCategoryController@edit')->name('admin.edit.category');
       Route::post('/update/{id}','AdminCategoryController@update');
       Route::get('/{action}/{id}','AdminCategoryController@action')->name('admin.action.category');
    });
    Route::group(['prefix' => 'area'],function (){
       Route::get('/','AdminAreaController@index')->name('admin.list.area');
       Route::get('/create','AdminAreaController@create')->name('admin.create.area');
       Route::post('/create','AdminAreaController@store');
       Route::get('/update/{id}','AdminAreaController@edit')->name('admin.edit.area');
       Route::post('/update/{id}','AdminAreaController@update');
       Route::get('/{action}/{id}','AdminAreaController@action')->name('admin.action.area');
    });
    Route::group(['prefix'=>'article'], function (){
        Route::get('/', 'AdminArticleController@index')->name('admin.list.article');
        Route::get('/create','AdminArticleController@create')->name('admin.create.article');
        Route::post('/create','AdminArticleController@store');
        Route::get('/update/{id}','AdminArticleController@edit')->name('admin.edit.article');
        Route::post('/update/{id}','AdminArticleController@update');
        Route::get('/{action}/{id}','AdminArticleController@action')->name('admin.action.article');
    });
    Route::group(['prefix'=>'store'], function (){
        Route::get('/', 'AdminStoreController@index')->name('admin.list.store');
        Route::get('/create','AdminStoreController@create')->name('admin.create.store');
        Route::post('/create','AdminStoreController@store');
        Route::get('/update/{id}','AdminStoreController@edit')->name('admin.edit.store');
        Route::post('/update/{id}','AdminStoreController@update');
        Route::get('/{action}/{id}','AdminStoreController@action')->name('admin.action.store');
    });
    Route::group(['prefix'=>'rating'], function (){
        Route::get('/', 'AdminRatingController@index')->name('admin.list.rating');
    });
});
