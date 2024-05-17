<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Request クラスをインポート
use App\Models\Stock;

class StockController extends Controller
{
    // 在庫TBLの在庫数カラムを取得し、購入画面に渡す
    public function index()
    {
        // すべてのstockレコードを取得
        $stocks = Stock::all(); 
        return view('Purchase.index', ['stocks' => $stocks]);
    }


    // Ajaxのリクエストで受け取った在庫数を更新
    public function purchase(Request $request)
    {
        $stocks = $request->stock;

        // 繰り返し、各商品の在庫数を更新
        foreach ($stocks as $stock) {

            // bladeで指定した在庫idと一致するデータを検索
            $product = Stock::find($stock['id']);

            // 指定した数量だけ在庫を減らし、更新
            $product->stock_num -= $stock['quantity'];
            $product->save();
            
        }

        return response()->json(['success' => true]);
    }
}