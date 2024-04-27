$(document).ready(function() {

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
            //商品の金額＊数量をtotalpriceに加算する    
            totalPrice += quantity * price;
        });

        // 計算した値をtotal-priceに入れる
        $('#total-price').val(totalPrice);
    }
    
    //idがnumで終わるものに対して、値が変更されたら実行する 
    $("select[id$='-num']").change(updateTotalPrice);

    // ページ読み込み時、合計金額を計算して表示する
    updateTotalPrice();
});

$('#purchase').on('click', function() {

    // ここに購入処理のコードを記述
    alert("購入しました。");
});
