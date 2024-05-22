$(".mobile-menu-icon-hp").click(function() {
	$(".menu-toggle-btn").toggleClass("open");
	$(this).toggleClass("open");
	$(".navigation").slideToggle();
	$(".overlay-mobile-menu-hp").fadeToggle();
});


function toogleHeader() {
	if ($(this).scrollTop()) {
		$('#header').addClass("middle");
	} else {
		$('#header').removeClass("middle");
	}
}

toogleHeader();
$(window).scroll(function() {
	toogleHeader();
});


let newsSlidesPerView = 2.5;
if ($(window).width() <= 768) {
	newsSlidesPerView = 1;
}
new Swiper(".news-list-hp", {
	loop: true,
	slidesPerView: newsSlidesPerView,
	spaceBetween: 20,
});


AOS.init({ once: true });


function calculateScrollbarWidth() {
	document.documentElement.style.setProperty('--scrollbar-width', (window.innerWidth - document.documentElement.clientWidth) + "px");
}
// recalculate on resize
window.addEventListener('resize', calculateScrollbarWidth, false);
// recalculate on dom load
document.addEventListener('DOMContentLoaded', calculateScrollbarWidth, false); 
// recalculate on load (assets loaded as well)
window.addEventListener('load', calculateScrollbarWidth);
