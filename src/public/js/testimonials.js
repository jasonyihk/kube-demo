(function($, window) {
  'use strict';

  $(function() {
    console.log(123);
    var colorArr = [
      '#D9BA8C',
      '#FFC766',
      '#9AB57D',
    ];
    var mySwiper = new Swiper('.swiper-container',{
                      onSlideChangeStart:function(sw) {
                          $('.testimonials-bg-color').css('background-color',colorArr[sw.realIndex]);
                      },
                   });

  });
})(jQuery, this);
