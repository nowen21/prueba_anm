<?php

use Illuminate\Support\Facades\Route;

$routexxx = 'welcomex';
$controll = 'App\Http\Controllers\WelcomController@';

Route::group(['prefix' => ''], function () use ($routexxx, $controll) {

    Route::get('/', [
        'uses' => $controll . 'welcome',
    ])->name($routexxx);
});
