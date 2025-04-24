<?php

use Illuminate\Http\Request;
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

Route::get('/html-encoding', function (\Illuminate\Http\Request $request) {
    return view("html-encoding", ["name" => $request->input("name")]);
});
