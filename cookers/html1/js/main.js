// Owl
$(document).ready(function () {
  $("#recipeCarousel").owlCarousel({
    loop: true,
    stagePadding: 150,
    margin: 30,
    center: true,
    nav: false,
    dots: true,
    autoplay: true,
    slideTransition: "linear",
    autoplayTimeout: 2500,
    //   autoPlaySpeed: 1000,
    //   autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1.1,
        stagePadding: 05,
        margin: 10,
      },
      600: {
        items: 2.1,
        stagePadding: 05,
        margin: 10,
      },
      1000: {
        items: 3,
      },
    },
  });
  $(".toast").toast({
    autohide: false,
  });
  $(".toast").toast("show");


  //Pjax
  //主要セレクター
	let maskTarget = document.querySelector('.mask #mask .st0');
	let storokeW = 500;
  function resize() {
    winW = window.innerWidth;
		if(winW <= 768) {
			storokeW = 240;
			maskTarget = document.querySelector('.mask #mask-sp .st0');
		} else {
			storokeW = 500;
			maskTarget = document.querySelector('.mask #mask .st0');
		}
	}
	window.addEventListener("resize", ()=>{
		resize();
	}, true);
	resize();

	// var Pjax = require('pjax-api').Pjax;
	// new Pjax({
	// 	areas: [
	// 		'#contents'
	// 	],
	// 	link : '.hideMenuLink, .navList li a, .h1 a, .worksArticle__link, .nextArticle__link, .pages__backBtn a, .works__category, .newsArticle a, .topNews__inner a, .aside__h1, .topKv__allworks--link, .newsTitle,.topLInk, .pagesCategory__list li a, .btnLink, .interviewBlock__link, .NDA__section a, .navList a, .footerBottom a',
	// 	scrollTop: true,
	// 	fetch: { wait: 2000 },
	// 	cache: { click: false, submit: false, popstate: false },  // キャッシュの設定
  //       load: { head: 'base, meta, link', css: true, script: true }
	// });
	
	// window.addEventListener('pjax:fetch', function() {
	// 	const total = Math.ceil(maskTarget.getTotalLength()) + 10;
	// 	console.log("データ取得前");

	// 	gsap.fromTo(maskTarget, 1, 
	// 		{ 'stroke': '#D0102C', 'stroke-dashoffset' : total, 'stroke-dasharray' : total, 'stroke-width': 0 }, 
	// 		{ 'stroke-dashoffset':0, 'stroke-width': storokeW,  ease: Power3. easeInOut, 
	// 		onComplete: function(){
				
	// 		}
	// 	});
	// });
	// window.addEventListener('pjax:load', function() {
	// 	const total = Math.ceil(maskTarget.getTotalLength()) + 10;
	// 	console.log("end");
	// 	gsap.to(maskTarget, .3, 
	// 		{ 'stroke': #E0E0E0,  ease: Power3. easeOut, 
	// 		onComplete: function(){
	// 			gsap.to(maskTarget, 1, 
	// 				{ 'stroke': color1, 'stroke-dashoffset' : total * -1, 'stroke-width': 0,  ease: Power3. easeOut, 
	// 				onComplete: function(){
						
	// 				}
	// 			});
	// 		}
	// 	});
	// });
  $(".hideMenuLink").click(function(e){
    e.preventDefault(); //ナビゲートをキャンセル
		url = $(this).attr('href'); //遷移先のURLを取得
		if (url !== '') {
			setTimeout(function(){
				window.location = url;
			}, 800); //0.8秒後に取得したURLに遷移
		}
    console.log("hello");
    const total = Math.ceil(maskTarget.getTotalLength()) + 10;
		console.log("データ取得前");

		gsap.fromTo(maskTarget, 1, 
			{ 'stroke': '#D0102C', 'stroke-dashoffset' : total, 'stroke-dasharray' : total, 'stroke-width': 0 }, 
			{ 'stroke-dashoffset':0, 'stroke-width': storokeW,  ease: Power3. easeInOut, 
			onComplete: function(){
          
			}
		});
    return false;
  });
  const total = Math.ceil(maskTarget.getTotalLength()) + 10;
  gsap.to(maskTarget, .3, 
    { 'stroke': '#D0102C',  ease: Power3. easeOut, 
    onComplete: function(){
      gsap.to(maskTarget, 1, 
        { 'stroke': '#D0102C', 'stroke-dashoffset' : total * -1, 'stroke-width': 0,  ease: Power3. easeOut, 
        onComplete: function(){
          
        }
      });
    }
  });  
  
});
