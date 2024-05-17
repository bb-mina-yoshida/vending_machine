<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use LanguageServer\Index\Index;

// TOP画面、購入画面、在庫補充画面、購入履歴画面
Route::get('/', function () {return view('TOP.index');});

Route::get('/Purchase',function(){return view('Purchase.index');});

Route::get('/Stock', function(){return view('Stock.index');});

Route::get('/BuyHistory', function(){return view('BuyHistory.index');});

// 購入画面で在庫情報を取得、送信する
Route::get('/Purchase', [StockController::class, 'index']);
Route::post('/Purchase', [StockController::class, 'index']);