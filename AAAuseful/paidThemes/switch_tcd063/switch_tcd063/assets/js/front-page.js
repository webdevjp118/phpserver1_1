'use strict';

(function ($) {

  var $headerContentTitleSpan = $('.p-header-content__title span');

  var settings = {
    speed: 150,
    speed_vary: false,
    delay: 2,
    mistype: false,
    caret: false,
    blink: true,
    tag: 'span',
    repeat: false,
    typing: function typing(elm, chr_or_elm) {
      if ('<br/>' === chr_or_elm || '<br>' === chr_or_elm) {
        elm.t('pause', true);
        setTimeout(function () {
          elm.t('pause', false);
        }, 500);
      }
    }
  };

  // Header slider
  if ($('#js-header-slider').length) {

    var $headerSlider = $('#js-header-slider');
    var $headerSliderItem = $headerSlider.find('.p-header-slider__item');
    var $headerSliderItemImg = $headerSlider.find('.p-header-slider__item-img');
    var speed = $headerSlider.data('speed');

    $(window).on('js-initialized', function () {

      $headerSliderItem.first().addClass('is-active');

      if ($headerSliderItem.first().find('.p-header-content__title span').text().length) {
        $headerSliderItem.first().find('.p-header-content__title span').t(settings);
      }

      $headerSlider.slick({
        autoplay: true,
        speed: 1000,
        autoplaySpeed: speed,
        pauseOnHover: false
      });

      $headerSlider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {

        $headerSliderItem.eq(nextSlide).addClass('is-active');

        if ($headerSliderItem.eq(nextSlide).find('.p-header-content__title span').text().length) {
          $headerSliderItem.eq(nextSlide).find('.p-header-content__title span').t(settings);
        }
      });

      $headerSlider.on('afterChange', function (event, slick, currentSlide) {

        var prevSlide = currentSlide === 0 ? $headerSliderItem.length - 1 : currentSlide - 1;

        $headerSliderItem.eq(prevSlide).removeClass('is-active');
      });
    });
  } else {
    // Video, YouTube

    $(window).on('js-initialized', function () {

      // Typing animation
      $headerContentTitleSpan.t(settings);
    });
  }

  // Contents builder
  var indexContent01Link = document.getElementById('js-index-content01__link');
  var cb = document.getElementById('js-cb');

  indexContent01Link.addEventListener('click', function () {

    // Use jQuery for Safari
    $('body, html').animate({
      scrollTop: cb.offsetTop
    });
  });
})(jQuery);