<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helo', function () {
    return view('helo', ["name" => "Jubi"]);
});

Route::get('/world', function () {
    return view('Hello.Worldhelo', [
        "name" => "name"
    ]);
});
