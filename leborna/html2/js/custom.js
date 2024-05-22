/*-----water effect--------*/
$(function(){
	function create_water() {
		try {
			$(".water_pos").empty().append('<div class="water_effect"></div>');
			$(".water_effect").ripples({
			  resolution: 1080,
			  perturbance: 0.01,
			  interactive: false
			});
		} catch (e) {
			$(".error")
			  .show()
			  .text(e);
		}
		  
		for(let i=0;i<20;i++) {
			var $el = $(".water_effect");
			var x = Math.random() * $el.outerWidth();
			var y = Math.random() * $el.outerHeight();
			var dropRadius = 30;
			var strength = 0.04 + Math.random() * 0.04;
		  
			$el.ripples("drop", x, y, dropRadius, strength);
		}
	}
	create_water();
	window.addEventListener('resize', function(event) {
		create_water();
	}, true);
	setInterval(function() {
		var $el = $(".water_effect");
		var x = Math.random() * $el.outerWidth();
		var y = Math.random() * $el.outerHeight();
		var dropRadius = 30;
		var strength = 0.04 + Math.random() * 0.04;
	  
		$el.ripples("drop", x, y, dropRadius, strength);
	}, 4000);
});
/*----- Go-Scroll-To-Top _END--------*/

/*----- MOBILE_MENU_START -----*/
$(".js_hamburger").click(function() {
	$(".hamburger_btn").toggleClass("pst_open");
	$(".header_menu").toggleClass("pst_open");
	$(".navigation-main-hp").slideToggle();
	$("html, body").toggleClass("hide-scroll");
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
	setTimeout(() => {
		hideLoading();
	}, 3000);
	$(window).load(function () {
		hideLoading();
	});
	function hideLoading() {
		$('body').css({'overflow-y': 'auto'})
		if($('#site_loader_animation').length > 0) {
			$('#site_loader_animation').css({'display':'none'});
		}
		if($('#site_loader_overlay').length > 0) {
			$('#site_loader_overlay').fadeOut();
		}
		if($('#subheader').length > 0) {
			$('#subheader').removeClass('pst_hide');
		}
		$('.top_fv, .pg_fv').addClass('run_ani');
	}
});
/*-- SITE_LOADING_END --*/

/*-- Disable Empty href --*/
$(function(){
	$('a[href="#"]').click(function(e){
		e.preventDefault();
		console.log("hello");
	})
});
/*-- Disable Empty href end --*/

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
	}).triggerHook('0.8').setClassToggle(opacTargets[i], 'on').addTo(controller);
}
let maskTargets = document.querySelectorAll('.panil3, .panir3');
for (var i = 0; i < maskTargets.length; i++) {
	let maskClassToggle = new ScrollMagic.Scene({
		triggerElement: maskTargets[i],
		//reverse: false
	}).triggerHook('0.95').setClassToggle(maskTargets[i], 'on').addTo(controller);
}
let ioTargets = document.querySelectorAll('.pioup, .panipong');
for (var i = 0; i < ioTargets.length; i++) {
	let ioClassToggle = new ScrollMagic.Scene({
		triggerElement: ioTargets[i],
		//reverse: false
	}).triggerHook('0.8').setClassToggle(ioTargets[i], 'on').addTo(controller);
}
let raniTargets = document.querySelectorAll('.pinpos');
for (var i = 0; i < ioTargets.length; i++) {
	let raniClassToggle = new ScrollMagic.Scene({
		triggerElement: raniTargets[i],
		//reverse: false
	}).triggerHook('0.5').setClassToggle(raniTargets[i], 'run_ani').addTo(controller);
}
/*-- Magic animation end --*/

/*--Text Spliter for animation--*/
const targetList = document.querySelectorAll('.js-split')
	const node = Array.prototype.slice.call(targetList, 0)
	node.forEach(function (target) {
	const text = target.textContent
		target.innerHTML = ''
		text.split('').forEach(function (c) {
		target.innerHTML += '<span>' + c + '</span>'
	})
})
/*--Text Spliter for animation end--*/
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
/*--carousel--*/
$(function() {
	if($('.vfgf_slider').length>0) {
		$('.vfgf_slider').owlCarousel({
			loop:true,
			autoplay:true,
			paginationSpeed: 1000,
			autoplayTimeout:3000,
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
});
/* carousel end--*/
/*--ptab--*/
$(".ptab_btn")
	.click(function () {
		$(this).closest('.ptab').find('.ptab_btn')
			.removeClass("pst_active")
			.eq($(this).index())
			.addClass("pst_active");
			$(this).closest('.ptab').data('page', $(this).data('page')).find('.ptab_item').hide().eq($(this).index()).fadeIn();
	}).eq(0).addClass('pst_active');
$(".ptab_prev").click(function () {
	let pageCount = $(this).closest('.ptab').find('.ptab_item').length;
	let curPage = $(this).closest('.ptab').data('page');
	if(curPage - 1 >= 1) {
		let prevPage = curPage - 1;
		$(this).closest('.ptab').find('.ptab_btn')
			.removeClass("pst_active");
		$(this).closest('.ptab').data('page', prevPage);
		$(".ptab_btn[data-page='"+prevPage+"']").addClass("pst_active");
		$('.ptab_item').hide();
		$(".ptab_item[data-page='"+prevPage+"']").fadeIn();
	}
});
$(".ptab_next").click(function () {
	let pageCount = $(this).closest('.ptab').find('.ptab_item').length;
	let curPage = $(this).closest('.ptab').data('page');
	if(curPage + 1 <= pageCount) {
		let nextPage = curPage + 1;
		$(this).closest('.ptab').find('.ptab_btn')
			.removeClass("pst_active");
		$(this).closest('.ptab').data('page', nextPage);
		$(".ptab_btn[data-page='"+nextPage+"']").addClass("pst_active");
		$('.ptab_item').hide();
		$(".ptab_item[data-page='"+nextPage+"']").fadeIn();
	}
});
/*--ptab end--*/
/*-- animation test keys start --*/
$(function(){
	$(window).keydown(function (e){
		if(e.keyCode == 81){
			if($(".banner_block_tp").hasClass("run_ani")) {
				$(".banner_block_tp").removeClass("run_ani");
				$(".banner_zigzag_tp").removeClass("run_ani");
			} else {
				$(".banner_block_tp").addClass("run_ani");
				$(".banner_zigzag_tp").addClass("run_ani");
			}
			if($(".scroll_trigger").hasClass("run_ani")) {
				$(".scroll_trigger").removeClass("run_ani");
			} else {
				$(".scroll_trigger").addClass("run_ani");
			}
		}
	})
});
/*-- animation test keys end --*/