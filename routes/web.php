<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return response('OK', 200);
});


Route::get('/test4', function () {
    return response('OK', 200);
});
