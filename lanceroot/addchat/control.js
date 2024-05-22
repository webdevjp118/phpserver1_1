$(window).on('load',function() {
    setTimeout(() => {
        window.scrollTo(0, document.body.scrollHeight);
    }, 500);
    
    $(".left_date").click(function(){
        let pos = $(this).attr('data-pos');
        $('html, body').animate({
            scrollTop: $('.date_row[data-id="'+pos+'"]').offset().top - 100
        }, 100);
    });
});
