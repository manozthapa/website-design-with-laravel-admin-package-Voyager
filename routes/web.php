<?php

/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
|
*/

Route::get('/','HomeController@home');

Route::get('contact','ContactController@contact');
Route::post('message','ContactController@message');

Route::get('about','AboutController@about');

Route::get('faq','FaqController@faq');

Route::get('blog','BlogController@blog');
Route::get('blog/{id}','BlogController@blogdetail');
Route::post('comment','BlogController@comment');


Route::get('event','EventController@event');
Route::get('event/{id}','EventController@eventdetail');

Route::get('gallery','GalleryController@gallery');
Route::get('gallery/{id}','GalleryController@gallerydetail');

Route::get('faq','FaqController@faq');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
