// CSRFトークン
$.ajaxSetup({
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
});


// 画面読み込み時（合計金額の初期値、計算処理）
$(document).ready(function() {

    // 合計金額を計算する関数
    function updateTotalPrice() {
        var totalPrice = 0;

        // idがnumで終わるものを対象に計算
        $("select[id$='-num']").each(function() {

            // <select>を$selectに格納
            var $select = $(this);

            // <select>で取得したものを数値として取得
            var quantity = parseInt($select.val(), 10);

            // tr要素からdata-priceが設定されている要素を探し、価格を取得
            var price = parseInt($select.closest('tr').find('td[data-price]').data('price'), 10);
           
            //商品の金額＊数量をtotalpriceに代入   
            totalPrice += quantity * price;
        });

        // 計算した値を合計金額に入れる
        $('#total-price').val(totalPrice);
    }

    // 初期値
    updateTotalPrice();
    $('#remaining-amount').val(2000);
    
    //idがnumで終わるものに対して、購入数が変更されたら実行する 
    $("select[id$='-num']").change(updateTotalPrice);

});


// 購入ボタン処理
$('#purchase').on('click', function () {

    // 購入できるかチェック
    var totalPrice = parseInt($('#total-price').val(), 10);
    var money = parseInt($('#remaining-amount').val(), 10);

        // 残金不足か不正な値がある場合はアラート
        if (totalPrice === 0 || isNaN(totalPrice)) {
            alert("商品を選択してください");
            return;
        }

        // 購入金額が残金より多い場合はアラート
        if (totalPrice > money) {
            alert("お金が足りません！");
            return;
        }

        var moneyCalc = money - totalPrice;
        $('#remaining-amount').val(moneyCalc);



    // Ajaxで使う購入データ
    var purchaseData = {
        purchaseData: {
            // 各商品のid、在庫数を数値で保持
            items: [
                {
                    id: 1,
                    quantity: parseInt($('#kaifuku-num').val(), 10) 
                },
                {
                    id: 2,
                    quantity: parseInt($('#yakusou-num').val(), 10) 
                },
                {
                    id: 3,
                    quantity: parseInt($('#dokukeshi-num').val(), 10) 
                }
            ]
        }
    };

    // 購入画面にAjaxリクエスト（purchaseData）を送信
    $.ajax({
        type: 'POST',
        url: '/Purchase',
        data: purchaseData,
        success: function (response) {
            alert('購入しました。');
        },
        
        error: function (xhr, status, error) {
            alert('購入に失敗しました。');
        }
    });
});


