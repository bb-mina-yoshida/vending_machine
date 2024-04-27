@vite('resources/css/common.css')

<div class="back-color">

    <div class="back">
        <a class="btn-common" href="/Purchase">戻る</a>
    </div>

    <div class="Stock" style="margin-top: 20px">
        <label class="title">在庫補充</label>
    </div>
    <div class="item-purchase" style="margin-top: 10px">

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
    <a class="btn-red">更新</a>
</div>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- Bootstrap Javascript(jQuery含む) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>