<?php

Route::prefix('auth/api/v1')->middleware(["api","auth:api"])->namespace('App\Modules\Auth\Controllers\Api\V1')->group(function () {
    Route::get('/pets', 'AuthApiController@getUsers')->name('Auth.getUsers');
});

