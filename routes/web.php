<?php

use Illuminate\Support\Facades\Route;
use LanguageServer\Index\Index;

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


Route::get('/Purchase','App\Http\Controllers\StockController@index');
