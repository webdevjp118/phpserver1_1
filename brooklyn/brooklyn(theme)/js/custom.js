/*----- Go-Scroll-To-Top _START--------*/
window.onbeforeunload = function(){ return 'Reload?';}
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
			$('html').css({'overflow': 'hidden'});
			$('#footer').remove();
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
		if($('.screen_state').hasClass('animating')) {
		} else {
			$('.screen_state').addClass('animating');
			setTimeout(() => {
				$('.screen_state').attr('data-screen', 1);
				setTimeout(() => {
					$('.screen_state').removeClass('animating');
				}, 1000);
			}, 4000);
		}
	}
});
/*-- SITE_LOADING_END --*/

/*-- Disable Empty href --*/
$(function(){
	$('a[href="#"]').click(function(e){
		e.preventDefault();
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
	}).triggerHook('0.95').setClassToggle(opacTargets[i], 'on').addTo(controller);
}
let maskTargets = document.querySelectorAll('.panil3, .panir3');
for (var i = 0; i < maskTargets.length; i++) {
	let maskClassToggle = new ScrollMagic.Scene({
		triggerElement: maskTargets[i],
		//reverse: false
	}).triggerHook('0.95').setClassToggle(maskTargets[i], 'on').addTo(controller);
}
/*-- Magic animation end --*/

/*--Text Spliter for animation--*/
const targetList = document.querySelectorAll('.js-split')
const node = Array.prototype.slice.call(targetList, 0)
node.forEach(function(target) {
    // const text = target.textContent;
    const text = target.innerHTML;
    let startTime = parseInt(target.dataset.anidelay) || 0;
    let aniStep = parseInt(target.dataset.anistep) || 80;
    let direct = target.dataset.direct || 'start-to-end';
    let charList = text.split('');
    let htmlList = [];
    let fixNo = false;
    for(let i=0;i<charList.length;i++) {
        if(charList[i] == '<') {
            fixNo = true;
            htmlList.push('<');
        } else if(charList[i] == '>') {
            fixNo = false;
            htmlList[htmlList.length-1] += '>';
        } else {
            if(fixNo) {
                if(htmlList.length > 0) {
                    htmlList[htmlList.length-1] += charList[i];
                }
            } else {
                htmlList.push(charList[i]);
            }
        }
    }
    target.innerHTML = '';
    if(direct == 'end-to-start') {
        for(let i=htmlList.length-1;i>=0;i--) {
            let c = htmlList[i];
            if(c == ' ') {
                target.innerHTML = '<span>&nbsp;</span>' + target.innerHTML;
            } else if(c.length > 1) {
                target.innerHTML = c + target.innerHTML;
            } else {
                target.innerHTML = '<span style="transition-delay: ' + startTime + 'ms;">' + c + '</span>' + target.innerHTML;
                startTime += aniStep;
            }
        }
    } else {
        htmlList.forEach(function(c) {
            if(c == ' ') {
                target.innerHTML += '<span>&nbsp;</span>';
            } else if(c.length > 1) {
                target.innerHTML += c;
            } else {
                target.innerHTML += '<span style="transition-delay: ' + startTime + 'ms;">' + c + '</span>';
                startTime += aniStep;
            }
        })            
    }        
});
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
/*--iPhone full screen height--*/
const appHeight = () => {
    const doc = document.documentElement
    doc.style.setProperty('--app-height', `${window.innerHeight}px`)
}
window.addEventListener('resize', appHeight)
appHeight()
/*--iPhone full screen height end--*/
/*--transition screen by scroll/touch--*/
$(function(){
	if($('.state_vals').length>0) {
		if($('.state_vals').hasClass('is_top')) {
			var SCREEN_COUNT = 3;
			function nextScreen() {
				if($('.screen_state').hasClass('animating')) {
				} else {
					let curNo = parseInt($(".screen_state").attr("data-screen")) || 1;
					if (curNo < SCREEN_COUNT) {
						curNo = curNo + 1;
						$('.screen_state').attr('data-screen', curNo);
						$('.screen_state').addClass('animating')
						setTimeout(() => {
							$('.screen_state').removeClass('animating')
						}, 2000);
					}
				}
				
			}
			function prevScreen() {
				if($('.screen_state').hasClass('animating')) {
				} else {
					let curNo = parseInt($(".screen_state").attr("data-screen")) || 1;
					console.log($(".screen_state").attr("data-screen"));
					if (curNo > 1) {
						curNo = curNo - 1;
						$('.screen_state').attr('data-screen', curNo);
						$('.screen_state').addClass('animating')
						setTimeout(() => {
							$('.screen_state').removeClass('animating')
						}, 2000);
					}
				}
			}
			$(function(){
				$(window).keydown(function (e){
					switch (event.keyCode) {
						case 37://    alert('Left key');
						break;
						case 38://    alert('Up key');
							prevScreen();
						break;
						case 39://    alert('Right key');
						break;
						case 40://    alert('Down key');
							nextScreen();
						break;
					}
				})
			});
			var g_mobileStartY = 0;
			$(document).bind('touchstart', function(event) {
				var touches = event.originalEvent.touches;
				if (touches && touches.length) {
					g_mobileStartY = touches[0].pageY;
				}
			});
			$(document).bind('touchmove', function(event) {

				var touches = event.originalEvent.touches;
				if (touches && touches.length) {
					var deltaY = g_mobileStartY - touches[0].pageY;

					if (deltaY >= 10) {
						g_mobileStartY = touches[0].pageY;
						nextScreen();
					}
					if (deltaY <= -10) {
						g_mobileStartY = touches[0].pageY;
						prevScreen();
					}
				}
			});
			var g_scrollDelta = 0;
			$(document).bind('mousewheel DOMMouseScroll', function(event) {
				// event.preventDefault();
				g_scrollDelta = event.originalEvent.wheelDelta || -event.originalEvent.detail;
				if (g_scrollDelta < 0) {
					nextScreen();
				} else {
					prevScreen();
				}
			});
		}
	}
});
/*--transition screen by scroll/end--*/
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

