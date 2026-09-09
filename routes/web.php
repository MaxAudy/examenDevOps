<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return response('OK', 200);
});

Route::get('/demo-pr', function () {
    return 'Demo PR';
});

Route::get('/test', function () {
    return response('OK', 200);
});
