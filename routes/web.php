<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tip-one', 'TipController@one');

Route::get('/tip-two', 'TipController@two');

Route::get('/tip-three', 'TipController@three');

Route::get('/tip-four', 'TipController@four');

Route::get('/tip-five', 'TipController@five');
