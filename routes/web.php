<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'GuestController@index')->name('home');

Route::get('/api/postcards/list', 'ApiController@getPostcards')->name('api.postcards.list');

Route::get('/postcard/create', 'GuestController@createPostcard')->name('create.postcard');
Route::post('/postcard/store', 'GuestController@storePostcard')->name('store.postcard');

