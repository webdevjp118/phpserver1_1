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
});
