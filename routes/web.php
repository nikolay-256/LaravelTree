<?php

Route::get('/', 'ProductController@index');
Route::get('/create','ProductController@create');
Route::post('/product_create_action','ProductController@storeProduct');
