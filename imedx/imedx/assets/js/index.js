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