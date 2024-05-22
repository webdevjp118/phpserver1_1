AOS.init();
$('#gototop'). click(function() {
	$('html, body'). animate({
		scrollTop: 0
	}, 1000);
});
//buttons not by <a>tag
$('.js_button').click(function() {
	if($(this).attr('data-href')) {
		if($(this).attr('data-target') == "_blank") {
			window.open($(this).attr('data-href'), '_blank');
		} else {
			location.href = $(this).attr('data-href');
		}
	}
});
$("#id_contact_form").submit(function(e){
	if($("#input_mail").val() != $("#input_confirm_mail").val()) {
		alert('確認メールアドレスが間違っています');
		$("#input_confirm_mail").focus();
		e.preventDefault();
	}
});
// $('form[id="contact_form"]').validate({
// 	rules: {
// 	//   fname: 'required',
// 	//   lname: 'required',
// 	//   user_email: {
// 	// 	required: true,
// 	// 	email: true,
// 	//   },
// 	//   psword: {
// 	// 	required: true,
// 	// 	minlength: 8,
// 	//   }
// 	},
// 	messages: {
// 	//   fname: 'This field is required',
// 	//   lname: 'This field is required',
// 	//   user_email: 'Enter a valid email',
// 	//   psword: {
// 	// 	minlength: 'Password must be at least 8 characters long'
// 	//   }
// 	},
// 	submitHandler: function(form) {
// 	  form.submit();
// 	}
// });
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
/*----- MOBILE_MENU_START -----*/
$(".mobile-menu-hp").click(function() {
	$(".menu-toggle-btn-hp").toggleClass("open");
	$(".navigation-main-hp").slideToggle();
	$("body").toggleClass("hide-scroll");
});
/*----- MOBILE_MENU_END -----*/

/*-- MEAG_MENU_START --*/
$(document).ready(function() {
	// when you hover a toggle show its dropdown menu
	$(".navbar .dropdown").hover(function () {
	   var width = $(document).width();
	   if(width > 992){
		   $(this).toggleClass("show");
		   $(this).parent().find(".dropdown-menu").toggleClass("show"); 
		   $('.navbar .dropdown-menu').css("display","");
	   }
	 });

	  // hide the menu when the mouse leaves the dropdown
   $(".navbar .dropdown").mouseleave(function() {
	   var width = $(document).width();
	   if(width > 992){
		  $(this).removeClass("show");  
		  $(this).parent().find(".dropdown-menu").removeClass("show"); 
		  $('.navbar .dropdown-menu').css("display","");
	   }
	});
  
	//mobile jquery  
	$(".navbar .dropdown-toggle").click(function() {
		var width = $(document).width();
		if(width <= 991)
		{
			if($(this).next('.dropdown-menu').hasClass("show") == false)
			{
				$('.navbar .dropdown-menu').slideUp("600");
				$(this).next('.dropdown-menu').slideToggle("600");
			}
			else
			{
				$(this).next('.dropdown-menu').slideToggle("600");
			}
		}
	});
		
	$(document).mouseup(function(e) 
	{
		var width = $(document).width();
		if(width <= 991)
		{
			var container = $(".navbar .dropdown");
			// if the target of the click isn't the container nor a descendant of the container
			if (!container.is(e.target) && container.has(e.target).length === 0) 
			{
				//container.hide();
				$('.navbar .dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("600");
				$(this).removeClass('show');   
			}
		}
	});
});
/*-- MEAG_MENU_END --*/

$(function() {
    $('a[href*=\\#]:not([href=\\#])').on('click', function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    });
});