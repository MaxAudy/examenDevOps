<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test2', function () {
    return response('OK', 200);
});


Route::get('/test4', function () {
    return response('OK', 200);
}); //Ajouter un commentaire pour expliquer cette ligne
