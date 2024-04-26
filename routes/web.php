<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('TOP.index');
});

Route::get('/Purchase',function(){
    return view('Purchase.index');
});

Route::get('/Stock', function(){
    return view('Stock.index');

});

Route::get('/BuyHistory', function(){
    return view('BuyHistory.index');

});