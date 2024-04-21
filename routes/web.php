<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('TOP.index');
});

Route::get('/Purchase',function(){
    return view('Purchase.index');
});