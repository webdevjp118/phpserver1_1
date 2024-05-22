$('#gototop').click(function() {
	$('html, body'). animate({
		scrollTop: 0
	}, 0);
});

$(window).scroll(function() {
    // if ($(this).scrollTop()) {
    //     $('#gototop').fadeIn();
    // } else {
    //     $('#gototop').fadeOut();
    // }
});

// $("#gototop").click(function () {
//    //1 second of animation time
//    //html works for FFX but not Chrome
//    //body works for Chrome but not FFX
//    //This strange selector seems to work universally
//    $("html, body").animate({scrollTop: 0}, 1000);
// });
/*----- MOBILE_MENU_START -----*/
$(".js_hamburger").click(function() {
	$(".hamburger_btn").toggleClass("pst_open");
	$(".header_menu").toggleClass("pst_open");
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

/*-- FIX_HEADER_START --*/
$(function(){
	if($('.state_vals').length>0) {
		if($('.state_vals').hasClass('is_top')) {
			var stickyHeaderTop = 100;
			$(window).scroll(function(){
				if( $(window).scrollTop() > stickyHeaderTop ) {
					if($('#header').hasClass("pst_blackheader") == false)
					{
						//$("#header").css("margin-top","-167px");
						$('#header').addClass('pst_blackheader');
						//$("#header").animate({marginTop: "0px"},800);
					}
					if($('#header').hasClass("pst_blackheader") == true)
					{
						//$("#header").css("display","block");
					}
				} else {
					//$("#header").css("display","block");
					$('#header').removeClass('pst_blackheader');
				}
			});
		} else {
			$('#header').addClass("pst_blackheader");
		}
	} else {
		$('#header').addClass("pst_blackheader");
	}
});
/*-- FIX_HEADER_END --*/
/*-- SITE_LOADING_START --*/
$(function(){
	// setTimeout(() => {
	// 	hideLoading();
	// }, 3500);
	$(window).load(function () {
		hideLoading();
	});
	function hideLoading() {
		$('body').css({'overflow-y': 'scroll'})
		if($('#site_loader_animation').length > 0) {
			$('#site_loader_animation').css({'display':'none'});
		}
		if($('#site_loader_overlay').length > 0) {
			$('#site_loader_overlay').fadeOut();
		}
		if($('#subheader').length > 0) {
			$('#subheader').removeClass('pst_hide');
		}
		setTimeout(() => {
			if($('.banner_block_tp').length > 0) {
				$('.banner_block_tp').addClass('run_ani');
			}
		}, 300);
	}
});
/*-- SITE_LOADING_END --*/
/*-- SUB_HEADER_START --*/
$(function(){
	$(window).scroll(function(){
		if( $(window).scrollTop() > window.screen.height ) {
			if($('#subheader').hasClass("pst_hide") == false)
			{
				$('#subheader').addClass('pst_hide');
			}
		} else {
			//$("#header").css("display","block");
			$('#subheader').removeClass('pst_hide');
		}
	});
	$('.submenu_btn').click(function() {
		$('#subheader').addClass('pst_while');
		setTimeout(() => {
			$('#subheader').removeClass('pst_while');
		}, 5000);
	});
});
/*-- SUB_HEADER_END --*/

/*-- Magic animation start --*/
$(function(){

	/*
	 * Scroll Function
	*/
	
	// 全体制御コントローラ
	var controller = new ScrollMagic.Controller();
	
	// トリガー設定
	const hook = '0.8';
	
	// 速度設定
	var duration = 0.6;
	
	
	var fadeUpText = new TimelineMax();
			fadeUpText.fromTo('.tw-ttl', duration, { opacity: 0, y: '60px', x:'0'}, {opacity: 1, y: '0', x: '0', ease: Cubic.easeOut})
			.fromTo('.tw-txt', duration, { opacity: 0, y: '60px', x:'0'}, {opacity: 1, y: '0', x: '0', ease: Cubic.easeOut}, 0.1);
	
	
	var showImg;
	
	
});
	
let controller = new ScrollMagic.Controller();
let target = document.querySelectorAll('.js_tgt');
for (var i = 0; i < target.length; i++) {
	let classToggle = new ScrollMagic.Scene({
		triggerElement: target[i],
		//reverse: false
	}).triggerHook('0.85').setClassToggle(target[i], 'on').addTo(controller);
}
let eveTargets = document.querySelectorAll('.initani');
for (var i = 0; i < eveTargets.length; i++) {
	let eveClassToggle = new ScrollMagic.Scene({
		triggerElement: eveTargets[i],
		//reverse: false
	}).triggerHook('0.85').setClassToggle(eveTargets[i], 'anistart').addTo(controller);
}
let opacTargets = document.querySelectorAll('.js_opac');
for (var i = 0; i < opacTargets.length; i++) {
	let opacClassToggle = new ScrollMagic.Scene({
		triggerElement: opacTargets[i],
		//reverse: false
	}).triggerHook('0.95').setClassToggle(opacTargets[i], 'on').addTo(controller);
}
let maskTargets = document.querySelectorAll('.panil3');
for (var i = 0; i < maskTargets.length; i++) {
	let maskClassToggle = new ScrollMagic.Scene({
		triggerElement: maskTargets[i],
		//reverse: false
	}).triggerHook('0.95').setClassToggle(maskTargets[i], 'on').addTo(controller);
}

/*-- Magic animation end --*/
/*-- Disable Empty href --*/
$(function(){
	$('a[href="#"]').click(function(e){
		e.preventDefault();
	})
});
/*-- Disable Empty href end --*/
/*--TheaterJS typing effect --*/
$(function(){
	$(window).load(function () {
		if($('#elactor').length > 0) {
			setTimeout(function () {
				var theater = theaterJS()
		
				theater
					.on('type:start, erase:start', function () {
						theater.getCurrentActor().$element.classList.add('com_actor__content--typing')
					})
					.on('type:end, erase:end', function () {
						theater.getCurrentActor().$element.classList.remove('com_actor__content--typing')
					})
				
				theater
					.addActor('elactor', { speed: 0.8, accuracy: 1 })
					.addScene('elactor:With Power?          ', -16, 'Human Power')
			}, 1000);
		}
	});
});
/*--TheaterJS typing effect end--*/
/*--pspander--*/
$(function(){
	$('.pspander.pst_show').find('.pspander_collapse').slideDown();
	$('.pspander_header').click(function(e){
		if($(this).closest('.pspander').hasClass('pst_show')) {
			$(this).closest('.pspander').find('.pspander_collapse').slideUp();
			$(this).closest('.pspander').removeClass('pst_show');
		} else {
			$(this).closest('.pspander').find('.pspander_collapse').slideDown();
			$(this).closest('.pspander').addClass('pst_show');
		}
	})
});
/*--pspander end--*/
/*--paccordion--*/
$(function(){
	$('.pacc.pst_show').find('.pacc_collapse').slideDown();
	$('.pacc_header').click(function(e){
		if($(this).closest('.pacc').hasClass('pst_show')) {
			$(this).closest('.pacc').find('.pacc_collapse').slideUp();
			$(this).closest('.pacc').removeClass('pst_show');
		} else {
			$('.paccordion').find('.pacc.pst_show').removeClass('pst_show').find('.pacc_collapse').slideUp();
			$(this).closest('.pacc').find('.pacc_collapse').slideDown();
			$(this).closest('.pacc').addClass('pst_show');
		}
	})
});
/*--paccordion end--*/
/*--treat link--*/
$(function(){
	$('.strouble_link').click(function(e){
		if($('.pspander[data-treat="'+$(this).data('treat')+'"]').length > 0) {
			$('html, body').animate({
				scrollTop: $('.pspander[data-treat="'+$(this).data('treat')+'"]').offset().top - 100
			 }, 500);	
			
			setTimeout(() => {
				$('.pspander[data-treat="'+$(this).data('treat')+'"]').find('.pspander_collapse').slideDown();
				$('.pspander[data-treat="'+$(this).data('treat')+'"]').addClass('pst_show');	
			}, 500);
		}
	})
});
/*--pspander end--*/
/*--io animation--*/
$(function() {
	var observer = new IntersectionObserver(function(entries) {
		entries.forEach(function(e) {
			if (!e.isIntersecting) return;
			e.target.classList.add('move'); // 交差した時の処理
			observer.unobserve(e.target);
			// target element:
		    //   e.target				ターゲット
		    //   e.isIntersecting		交差しているかどうか
		    //   e.intersectionRatio	交差している領域の割合
		    //   e.intersectionRect		交差領域のgetBoundingClientRect()
		    //   e.boundingClientRect	ターゲットのgetBoundingClientRect()
		    //   e.rootBounds			ルートのgetBoundingClientRect()
		    //   e.time					変更が起こったタイムスタンプ
		})

	},{
    	// オプション設定
		rootMargin: '0px 0px -5% 0px' //下端から5%入ったところで発火
		//threshold: [0, 0.5, 1.0]
	});

	var target = document.querySelectorAll('.io'); //監視したい要素をNodeListで取得
	for(var i = 0; i < target.length; i++ ) {
	    observer.observe(target[i]); // 要素の監視を開始
	}

	//アニメーションによる各要素のはみ出しを解消
	$("body").wrapInner("<div style='overflow:hidden;'></div>");

});
/*--io animation end--*/
/*--carousel--*/
$(function() {
	if($('.clinicmenu_row_tp').length>0) {
		$('.clinicmenu_row_tp').owlCarousel({
			loop:true,
			autoplay:true,
			paginationSpeed: 1000,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
			dots: false,
			// margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:3
				}
			}
		})
	}
	if($('.tp_access_slider').length>0) {
		$('.tp_access_slider').owlCarousel({
			loop:true,
			autoplay:true,
			paginationSpeed: 1000,
			autoplayTimeout: 3000,
			autoplayHoverPause:true,
			// margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
			}
		})
	}
	if($('.sample_slider1').length>0) {
		$('.sample_slider1').owlCarousel({
			loop:true,
			autoplay:true,
			autoplayTimeout: 0,
        	autoplaySpeed: 5000,
			autoplayHoverPause:false,
			slideTransition: 'linear',
			margin:20,
			nav:true,
			responsive:{
				0:{
					items:3
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		})
	}
	if($('.sample_slider2').length>0) {
		$('.sample_slider2').owlCarousel({
			loop:true,
			rtl: true,
			autoplay:true,
			autoplayTimeout: 0,
        	autoplaySpeed: 5000,
			autoplayHoverPause:false,
			slideTransition: 'linear',
			margin:20,
			nav:true,
			responsive:{
				0:{
					items:3
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
		})
	}
});
/*--carousel end--*/
/*--custom modal--*/
$(".js_modalOpen").click(function () {
    let targetId = $(this).data('target');
    $('#' + targetId).css({'display':'block'});
    setTimeout(() => {
        $('#' + targetId).addClass('open');
    }, 10);
});
$(".cdlg_close").click(function () {
    let targetId = $(this).closest('.cdialog').attr('id')
    $(this).closest('.cdialog').removeClass('open');
    setTimeout(() => {
        $('#' + targetId).css({'display':'none'});
    }, 500);
});
$(".accessdlg_close").click(function () {
    $(this).closest('.access_dlg').removeClass('open');//.delay(500).css({'display':'none'});
});
/*--custom modal end--*/
/*-- access dialog open --*/
$(function(){
	$(window).scroll(function(){
		if($('#access').length > 0) {
			if(!$('#access').hasClass('visited')){
				if( $(window).scrollTop() > $('#access').offset().top ) {
					$('#access').addClass('visited');
					$('.access_dlg').addClass('open');
				}
			}
		}
	});
});
/*-- access dialog open end --*/
/*--submit trick--*/
$(function(){
	$('#submit_trick').click(function() {
		$("#form_submit" ).trigger( "click" );
	});
	$('#open_extra_fields').click(function() {
		$("#extra_fields" ).slideDown();
	});
});
/*--submit trick end--*/
/*----- close mobile menu when click menu START-----*/
$(".headmenu_a").click(function() {
	if($(".header_menu").hasClass("pst_open")) {
		$(".hamburger_btn").toggleClass("pst_open");
		$(".header_menu").toggleClass("pst_open");
		$(".navigation-main-hp").slideToggle();
		$("body").toggleClass("hide-scroll");
	}
});
/*----- close mobile menu when click menu END-----*/
/*-----loading animation check---------*/
$(".banner_block_tp").click(function() {
	$(this).toggleClass("run_ani");
});
/*-----loading animation check end---------*/