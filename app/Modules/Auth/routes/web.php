<?php

Route::prefix('auth/web')->middleware(["web","auth"])->namespace('App\Modules\Auth\Controllers\Web')->group(function () {
    Route::get('/pets', 'AuthWebController@getUsers')->name('Auth.getUsers');
});

