<?php

Route::post('register', 'API\UserController@register');
Route::post('login', 'API\UserController@login');

Route::middleware('auth:api')->group( function () {
    Route::resource('books', 'API\BookController');
});
