<?php

/* -------------------------------------------------
                 RUTAS PARA AUTH
 --------------------------------------------------*/

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {

    Route::get('me', 'AuthController@me');
    #Route::get('logout', 'AuthController@logout');
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('send-reset-password', 'ResetPasswordController@sendEmailPassword');
    Route::post('change-password-process', 'ResetPasswordController@changePasswordProcess');
});
