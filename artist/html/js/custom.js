$(".mobile-menu-icon-hp").click(function() {
	$(".menu-toggle-btn").toggleClass("open");
	$(this).toggleClass("open");
	$('body').toggleClass("menuOpen");
	//$(".navigation").slideToggle();
	//$(".overlay-mobile-menu-hp").fadeToggle();
});

$(window).load(function() {
 // executes when complete page is fully loaded, including all frames, objects and images
 setTimeout(function () {
   $(".loading_screen_hp").fadeOut();
 }, 500);
});

$('#gototop'). click(function() {
	$('html, body'). animate({
		scrollTop: 0
	}, 1000);
});

$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#gototop').fadeIn();
    } else {
        $('#gototop').fadeOut();
    }
});

$("#gototop").click(function () {
   //1 second of animation time
   //html works for FFX but not Chrome
   //body works for Chrome but not FFX
   //This strange selector seems to work universally
   $("html, body").animate({scrollTop: 0}, 1000);
});

/*-- FIX_HEADER_START --*/
$(function(){
	var stickyHeaderTop = 100;
	$(window).scroll(function(){
		if( $(window).scrollTop() > stickyHeaderTop ) {
			if($('body').hasClass("fix-header") == false)
			{
				//$("#header").css("margin-top","-167px");
				$('body').addClass('fix-header');
				//$("#header").animate({marginTop: "0px"},800);
			}
			if($('body').hasClass("fix-header") == true)
			{
				//$("#header").css("display","block");
			}
		} else {
			//$("#header").css("display","block");
			$('body').removeClass('fix-header');
		}
	});
});
/*-- FIX_HEADER_END --*/

$(document).ready(function(){
    $(".dropdown").hover(function(){
		var width = $(document).width();
		if(width > 991)
		{
			var dropdownMenu = $(this).children(".dropdown-menu");
			if(dropdownMenu.is(":visible")){
				dropdownMenu.parent().addClass("show");
				dropdownMenu.addClass("show");
				$('body').addClass("show_menu");
			}
		}
    },function(){
		var width = $(document).width();
		if(width > 991)
		{
        	var dropdownMenu = $(this).children(".dropdown-menu");
            dropdownMenu.parent().removeClass("show");
			dropdownMenu.removeClass("show");
			$('body').removeClass("show_menu");
		}
    });
});    

$(".banner_img_hp").click(function () {
  $("html, body").animate({
    scrollTop: $(".power_block_hp").offset().top - 50
  }, 500) 
})