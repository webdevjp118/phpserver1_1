//スマホスライドメニュー
$(function(){
    $("header .menu .sp_nav").on("click", function(){
        $('nav').slideToggle();
    });
});