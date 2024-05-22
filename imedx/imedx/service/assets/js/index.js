/* ----------------------------------------------------------
    ハンバーガーメニュー
---------------------------------------------------------- */
/* オープン */
$('.l-menu__open').on('click', function() {
    $('.l-overlay').toggleClass('is_open');
    $('.l-menu').toggleClass('is_open');
});
/* クローズ */
$('.l-menu__close').on('click', function() {
    $('.l-overlay').removeClass('is_open');
    $('.l-menu').removeClass('is_open');
});


/* ----------------------------------------------------------
    注意モーダル
---------------------------------------------------------- */
/* 注意モーダル - 日本語ページ - はい */
function setCookiePage() {
    // クッキーの有効期限を設定（ここでは1ヶ月）
    var expires = new Date();
    expires.setMonth(expires.getMonth() + 1);

    // クッキーに値を設定
    document.cookie = 'health-care-worker=true; expires=' + expires.toUTCString() + '; path=/';
    // リロード
    document.location.reload();
};

// /* 注意モーダル - 日本語ページ - いいえ */
function noHealthCareWorker() {
    document.cookie = 'health-care-worker=false';
    document.location.href = 'https://men-times.com/';
};