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
    $('#remaining-amount').val(2000);
});


$('#purchase').on('click', function() {
    var totalPrice = parseInt($('#total-price').val(), 10);
    var money = parseInt($('#remaining-amount').val(), 10);

    if (totalPrice === 0 || isNaN(totalPrice)) {
        alert("商品を選択してください");
        return;
    }

    if (totalPrice > money) {
        alert("お金が足りません！");
        return;
    }

    var moneyCalc = money - totalPrice;
    $('#remaining-amount').val(moneyCalc);

    var purchaseData = {
        'totalPrice': totalPrice,
        'stock': []
    };

    // 各商品の購入数とIDを取得し、purchaseDataに追加
    $('.item-purchase select').each(function() {
        var stockId = $(this).attr('data-id');
        var stockNum = parseInt($(this).val(), 10);
        if (stockNum > 0) {
            purchaseData.stock.push({
                'id': stockId,
                'quantity': stockNum
            });
        }
    });

    // Ajaxリクエストを送信
    $.ajax({
        type: 'POST',
        url: '/purchase',
        data: purchaseData,
        success: function(response) {
            alert('購入しました。');
        },
        error: function(xhr, status, error) {
            alert('購入に失敗しました。');
        }
    });
});