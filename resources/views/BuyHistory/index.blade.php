{{-- 共通CSS --}}
@vite('resources/css/common.css')


{{-- 購入履歴画面 --}}
<div class="back-color">

  {{-- 画面遷移ボタン --}}
  <a class="btn-common"  href="/Purchase">戻る</a>
  <div class="Stock" style="margin-top: 20px">
    <label class="title">購入履歴</label>
  </div>
  <div class="item-purchase" style="margin-top: 10px">
    
{{-- 在庫補充表 --}}
  <table class="table">
      <thead>
        <tr>
          <th scope="col">日付</th>
          <th scope="col">商品名</th>
          <th scope="col">購入数</th>
          <th scope="col">金額</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>9999/99/99</td>
          <td>NNNNNNNNNN</td>
          <td>9,999</td>
          <td>9,999</td>
        </tr>
        <tr>
          <td>9999/99/99</td>
          <td>NNNNNNNNNN</td>
          <td>9,999</td>
          <td>9,999</td>
        </tr>
        <tr>
          <td>9999/99/99</td>
          <td>NNNNNNNNNN</td>
          <td>9,999</td>
          <td>9,999</td>
        </tr>
      </tbody>
    </table>
</div>

{{-- Bootstrap、jQueryを使用するためのリンク --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

