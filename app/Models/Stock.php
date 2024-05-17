<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// 在庫TBLを使えるように定義
class Stock extends Model
{
    use HasFactory;

    protected $table = 'stock'; 
}