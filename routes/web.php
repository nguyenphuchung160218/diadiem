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

//auth
Route::group(['namespace'=>''],function (){
    Route::get('dang-ky','App\Http\Controllers\Auth\RegisterController@getRegister')->name('get.register');
    Route::post('dang-ky','App\Http\Controllers\Auth\RegisterController@postRegister')->name('post.register');
    Route::get('dang-nhap','App\Http\Controllers\Auth\LoginController@getLogin')->name('get.login');
    Route::post('dang-nhap','App\Http\Controllers\Auth\LoginController@postLogin')->name('post.login');
    Route::get('dang-xuat','App\Http\Controllers\Auth\LoginController@getLogout')->name('get.logout');  
    // dang nhap bang google va facebook
    Route::get('auth/social', 'App\Http\Controllers\Auth\LoginController@show')->name('social.login');
    Route::get('oauth/{driver}', 'App\Http\Controllers\Auth\LoginController@redirectToProvider')->name('social.oauth');
    Route::get('oauth/{driver}/callback', 'App\Http\Controllers\Auth\LoginController@handleProviderCallback')->name('social.callback');
});

//user
Route::group(['prefix'=>'user','middleware'=>'App\Http\Middleware\CheckLoginUser'],function (){
    Route::get('tai-khoan','App\Http\Controllers\UserController@getUser')->name('get.user');
    Route::post('tai-khoan','App\Http\Controllers\UserController@postUser');
    Route::get('dang-bai','App\Http\Controllers\UserController@getPost')->name('get.user.post');
    Route::post('dang-bai','App\Http\Controllers\UserController@postStore');
    Route::get('cai-dat','App\Http\Controllers\UserController@getSetting')->name('get.user.setting');
    Route::post('updateInfo','App\Http\Controllers\UserController@updateInfo')->name('updateInfo');
    Route::post('updatePassword','App\Http\Controllers\UserController@updatePassword')->name('updatePassword');
    Route::get('delete/{id}','App\Http\Controllers\UserController@destroy')->name('get.user.destroy');
});

//home
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

//store
Route::get('chuyen-muc','App\Http\Controllers\CategoryController@index')->name('get.category');
Route::post('chuyen-muc','App\Http\Controllers\CategoryController@post')->name('post.category');
Route::get('chuyen-muc/{slug}','App\Http\Controllers\CategoryController@index')->name('get.find.category');
Route::get('dia-diem/{slug}','App\Http\Controllers\CategoryController@getArea')->name('get.find.area');
Route::get('chuyen-muc/search','App\Http\Controllers\CategoryController@index')->name('get.search');
Route::get('chuyen-muc/{category}/{slug}','App\Http\Controllers\StoreController@storeDetail')->name('get.detail.store');

//article
Route::get('bai-viet','App\Http\Controllers\ArticleController@getArticle')->name('get.list.article');
Route::get('bai-viet/{slug}','App\Http\Controllers\ArticleController@getDetail')->name('get.detail.article');
// Route::post('/gui-comment','App\Http\Controllers\PostController@create')->name('send.comment');
// Route::post('/gui-comment/{id}','App\Http\Controllers\PostController@store');
//info
// Route::get('lien-he','ContactController@getContact')->name('get.contact');
// Route::post('lien-he','ContactController@saveContact');

//info
// Route::get('lien-he','ContactController@getContact')->name('get.contact');
// Route::post('lien-he','ContactController@saveContact');
Route::view('/lien-he', 'info.contact')->name('get.contact');
Route::view('/ve-chung-toi', 'info.aboutUs')->name('get.aboutUs');
Route::view('/ho-tro-khach-hang', 'info.support')->name('get.support');

//comment
   
Route::post('commentArticle/{id}','App\Http\Controllers\CommentArticleController@saveComment')->name('save.form.comment.article');
// Route::post('commentArticle/{id}','App\Http\Controllers\ReplyCommentController@replyComment')->name('save.form.replyComment.article');

Route::post('commentStore/{id}','App\Http\Controllers\CommentArticleController@replyArticle')->name('save.form.comment.store');
   

//heart
Route::group(['prefix'=>'heart'],function (){
    Route::get('/{id}','App\Http\Controllers\HeartController@getHeart')->name('get.heart');
});

// dang nhap bang
