<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Request クラスをインポート
use App\Models\Stock;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all(); // すべてのstockレコードを取得
        return view('Purchase.index', ['stocks' => $stocks]);
    }

    public function purchase(Request $request) // Request クラスを使用することを明示
    {
        $totalPrice = $request->totalPrice;
        $stocks = $request->stock;

        // 各商品の在庫数を更新
        foreach ($stocks as $stock) {
            $product = Stock::find($stock['id']);
            $product->stock_num -= $stock['quantity'];
            $product->save();
        }

        return response()->json(['success' => true]);
    }
}