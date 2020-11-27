<?php

/* Débora Rohden*/ 

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/produtos/{codigo}', function ($codigo) {
    return view('produtos', ['codigo' => $codigo]);
});

Route::get('/serie/{x}/{y}/{z}', function ($x, $y, $z) {
    return view('serie', ['x' => $x, 'y' => $y, 'z' => $z]);
});

Route::get('/questoes/{que1},{que2},{que3},{que4},{que5},{que6},{que7},{que8},{que9},{que0}/', function ($que1, $que2, $que3, $que4, $que5, $que6, $que7, $que8, $que9, $que0) {
    return view('questoes', ['que1' => $que1, 'que2' => $que2, 'que3' => $que3, 
    'que4' => $que4, 'que5' => $que5, 'que6' => $que6, 'que7' => $que7, 
    'que8' => $que8, 'que9' => $que9, 'que0' => $que0]);
});