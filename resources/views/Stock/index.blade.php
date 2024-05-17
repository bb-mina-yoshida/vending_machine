{{-- 共通CSS、JS読み込み --}}
@vite('resources/css/common.css')
@vite('resources/js/stock.js')

{{-- 在庫補充画面 --}}
<div class="back-color">

    {{-- 画面遷移ボタン --}}
    <div class="back">
        <a class="btn-common" href="/Purchase">戻る</a>
    </div>

    <div class="Stock" style="margin-top: 20px">
        <label class="title">在庫補充</label>
    </div>
    <div class="item-purchase" style="margin-top: 10px">

    {{-- 在庫補充表 --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">商品名</th>
                <th scope="col">金額</th>
                <th scope="col">補充数</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>回復薬</td>
                <td>250</td>
                <td>
                    <select class="form-control" id="purchase-num">
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
                <td>100</td>
                <td>
                    <select class="form-control" id="purchase-num">
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
                <td>どくけし</td>
                <td>120</td>
                <td>
                    <select class="form-control" id="purchase-num">
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

<div class="Stock">
    <a class="btn-red" id="update">更新</a>
</div>

{{-- Bootstrap、jQueryを使用するためのリンク --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


