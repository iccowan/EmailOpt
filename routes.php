<?php

/*
|--------------------------------------------------------------------------
| Add the following to the routes file
|--------------------------------------------------------------------------
*/
    /*
    * Email Opt In/Out
    */
    Route::group(['before'=>'auth'], function(){
        Route::get('/emails/opt', 'Opt@showOptIn');
        Route::post('/emails/opt/opt-in', 'OptController@optIn');
        Route::post('/emails/opt/opt-out', 'OptController@optOut');
    });
    /*
    * End Email Opt In/Out
    */