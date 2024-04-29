<?php

namespace App\Http\Controllers;

use App\Models\Stock; // モデルを使用
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all(); // すべてのstockレコードを取得
        return view('Purchase.index', ['stocks' => $stocks]);
    }
}