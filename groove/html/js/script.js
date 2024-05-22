//Humburger Menu
$(function () {
  $('.hamburger').on('click', function () {
    $('body').toggleClass('active');

    $(".navList a").on("click", function () {
      $("body").removeClass('active');
    });

    if ($('body').hasClass('active')) {
      $('.overlay').on('click', function () {
        $('body').removeClass('active');
      });
    };
  });
});
