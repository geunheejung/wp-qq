jQuery(document).ready(function ($) {
  var tabElement = document.querySelectorAll('.mobile-section .how-to-use-section .tabs li');
  // For Slider
  $('.wpsisac-slick-slider').each(function (index) {

    var slider_id = $(this).attr('id');
    var slider_conf = $.parseJSON($(this).closest('.wpsisac-slick-slider-wrp').find('.wpsisac-slider-conf').attr('data-conf'));

    if (typeof(slider_id) != 'undefined' && slider_id != '') {

      jQuery('#' + slider_id).slick({
        dots: (slider_conf.dots) == "true" ? true : false,
        arrows: (slider_conf.arrows) == "true" ? true : false,
        speed: parseInt(slider_conf.speed),
        autoplay: false,
        autoplaySpeed: parseInt(slider_conf.autoplay_interval),
        fade: (slider_conf.fade) == "true" ? true : false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: false,
        mobileFirst: true,
        rtl: (slider_conf.rtl) == "true" ? true : false,
      });

      var slickItem = $('#' + slider_id);
      var FIRST_SLICK_INDEX = 0;
      tabElement.forEach(function (ele) {
        ele.addEventListener('click', function () {
          slickItem.slick('slickGoTo', FIRST_SLICK_INDEX);
          slickItem.slick('slickPlay');
        });
      });

    }
  });

  // For Carousel Slider
  $('.wpsisac-slick-carousal').each(function (index) {

    var slider_id = $(this).attr('id');
    var slider_conf = $.parseJSON($(this).closest('.wpsisac-slick-carousal-wrp').find('.wpsisac-carousal-conf').attr('data-conf'));

    jQuery('#' + slider_id).slick({
      dots: (slider_conf.dots) == "true" ? true : false,
      arrows: (slider_conf.arrows) == "true" ? true : false,
      speed: parseInt(slider_conf.speed),
      autoplay: (slider_conf.autoplay) == "true" ? true : false,
      autoplaySpeed: parseInt(slider_conf.autoplay_interval),
      slidesToShow: parseInt(slider_conf.slidestoshow),
      infinite: true,
      slidesToScroll: parseInt(slider_conf.slidestoscroll),
      centerMode: (slider_conf.centermode) == "true" ? true : false,
      variableWidth: (slider_conf.variablewidth) == "true" ? true : false,
      rtl: (slider_conf.rtl) == "true" ? true : false,
      mobileFirst: (Wpsisac.is_mobile == 1) ? true : false,
      responsive: [{
        breakpoint: 1023,
        settings: {
          slidesToShow: (parseInt(slider_conf.slidestoshow) > 3) ? 3 : parseInt(slider_conf.slidestoshow),
          slidesToScroll: 1,
        }
      }, {
        breakpoint: 767,
        settings: {
          slidesToShow: (parseInt(slider_conf.slidestoshow) > 3) ? 3 : parseInt(slider_conf.slidestoshow),
          slidesToScroll: 1,
          centerMode: (slider_conf.centermode) == "true" ? true : false,
        }
      }, {
        breakpoint: 639,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          centerMode: true,
          variableWidth: false,
        }
      }, {
        breakpoint: 479,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          centerMode: false,
          variableWidth: false,
        }
      }, {
        breakpoint: 319,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false,
          centerMode: false,
          variableWidth: false,
        }
      }]
    });
  });
});