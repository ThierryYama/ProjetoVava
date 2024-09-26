<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personagem', function () {
    return view('personagem');
});

Route::get('/historia', function () {
    return view('historia');
});

Route::get('/faleconosco', function () {
    return view('faleconosco');
});

Route::get('/teste', function () {
    $clientest = array("Joao", "Antonio", "Sandra");
    
    return view('teste', compact('clientest'));
});

Route::get('/tabuadatematica', function () {
    return view('tabuadatematica');
});