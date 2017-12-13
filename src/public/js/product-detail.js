(function($, window) {
  'use strict';
  $(function() {
    var $header = $('.header');
    var $productDetailSlidesContainer = $('.product-detail-slides-container');
    var $productDetailSlideButton = $('.product-detail-slide-button');
    $productDetailSlideButton.on('click', function() {
      $productDetailSlideButton.removeClass('product-detail-slide-button-selected');
      $(this).addClass('product-detail-slide-button-selected');
      var index = $productDetailSlideButton.index($('.product-detail-slide-button-selected'));
      $productDetailSlidesContainer.children().removeClass('product-detail-slide-container-selected');
      var $target = $productDetailSlidesContainer.children().eq(index);
      $target.addClass('product-detail-slide-container-selected');
      if ($('body').width() < 992) {
        $(document.body).animate({
          'scrollTop': $target.offset().top - $header.height()
        }, 500);
      }
    });
  });
})(jQuery, this);
