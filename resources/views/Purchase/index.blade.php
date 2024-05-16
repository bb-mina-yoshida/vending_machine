<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@vite(['resources/js/purchase.js'])
@vite(['resources/css/common.css'])

<div class="back-color">
    <div class="back">
        <a class="btn-common" href="/">帰る</a>
        <a class="btn-common" href="/Stock">在庫補充して</a>
        <a class="btn-common" href="/BuyHistory">購入履歴</a>
    </div>
    <div class="Purchase" style="margin-top: 20px">
        <label class="title">購入画面</label>
    </div>
    <div class="item-purchase" style="margin-top: 10px">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">商品名</th>
                    <th scope="col">金額</th>
                    <th scope="col">在庫数</th>
                    <th scope="col">購入数</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>回復薬</td>
                    <td data-price="250">250</td>
                    @foreach ($stocks as $stock)
                        @if ($stock->id === 1)
                            <td>{{ $stock->stock_num }}</td>
                        @endif
                    @endforeach
                    <td>
                        <select class="form-control" id="kaifuku-num">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>やくそう</td>
                    <td data-price="100">100</td>
                    @foreach ($stocks as $stock)
                        @if ($stock->id === 2)
                            <td>{{ $stock->stock_num }}</td>
                        @endif
                    @endforeach
                    <td>
                        <select class="form-control" id="yakusou-num">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>どくけし</td>
                    <td data-price="120">120</td>
                    @foreach ($stocks as $stock)
                        @if ($stock->id === 3)
                            <td>{{ $stock->stock_num }}</td>
                        @endif
                    @endforeach
                    <td>
                        <select class="form-control" id="dokukeshi-num">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <label>合計金額</label>
    <input id="total-price" class="col-2 form-control text-int" type="text" onchange="calc" readonly>

    <label>残金</label>
    <input id="remaining-amount" class="col-2 form-control text-int" type="text" readonly>


    <div class="purchase" style="margin-top: 10px">
        <a class="btn-red" id="purchase">購入</a>
    </div>
</div>

