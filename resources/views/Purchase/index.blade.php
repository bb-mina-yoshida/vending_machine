@vite('resources/css/common.css')

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

            @foreach ($stocks as $stock)
            @if ($stock->stock_num === 1)
                <tr>
                    <td>{{ $stock->stock_name }}</td>
                </tr>
            @endif

        @endforeach

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
                    <td>9,999</td>
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
                    <td>9,999</td>
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
                    <td>9,999</td>
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
            <a class="btn-red" id="purchase" >購入</a>
        </div>
</div>

@vite('resources/js/purchase.js')

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- Bootstrap Javascript(jQuery含む) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
