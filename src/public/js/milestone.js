(function($, window) {
  'use strict';

  $(function() {
    var $header = $('.header');

    $('.milestone-container .milestone-year').on('click', function() {
      $('.milestone-container .milestone-year-selected').removeClass('milestone-year-selected');
      $(this).addClass('milestone-year-selected');
      $(document.body).animate({
        'scrollTop': $($(this).data('target')).offset().top - $header.height()
      }, 500);
    });

    $('.milestone-year-selection-container .previous-button, .milestone-year-selection-container .next-button').on('click', function() {
      var $currentYear = $(this).parent().children('.milestone-year-selected');
      var $target = null;
      if ($(this).hasClass('previous-button'))
        $target = $currentYear.prev('.milestone-year')
      else
        $target = $currentYear.next('.milestone-year');
      if ($target.length) {
        $currentYear.removeClass('milestone-year-selected');
        $target.addClass('milestone-year-selected');
        $('.milestone-content-container').removeClass('milestone-content-container-selected');
        $($target.data('target')).addClass('milestone-content-container-selected');
      }
    });

    var $milestoneYearSelectionContainer = $('.milestone-container>.milestone-year-selection-container');

    $.fixPosition(function() {
      if ($milestoneYearSelectionContainer.css('position') === 'fixed') {
        var containerOffsetLeft = $milestoneYearSelectionContainer.parent().offset().left;
        $milestoneYearSelectionContainer.css('left', containerOffsetLeft * 0.8);
      }
    });

    var $footerMainContainer = $('.footer-main-container');

    $(window).on('scroll', function() {
      var containerOffsetTop = $milestoneYearSelectionContainer.parent().offset().top;
      var containerOffsetLeft = $milestoneYearSelectionContainer.parent().offset().left;
      var offsetTop = $milestoneYearSelectionContainer.position().top;
      var scrollTop = $(window).scrollTop();
      var limit = $milestoneYearSelectionContainer.outerHeight() + $header.height();
      var footerOffset = $footerMainContainer.offset().top;
      if (scrollTop <= containerOffsetTop) {
        $milestoneYearSelectionContainer.css('position', '').css('top', '').css('bottom', '').css('left', '').css('margin-left', '');
      } else if (scrollTop > containerOffsetTop && limit <= footerOffset - scrollTop) {
        if ($milestoneYearSelectionContainer.css('position') !== 'fixed') {
          $milestoneYearSelectionContainer.css('bottom', '').css('top', offsetTop).css('left', containerOffsetLeft * 0.8).css('position', 'fixed').css('margin-left', '');
        }
      }
      if (limit > footerOffset - scrollTop) {
        $milestoneYearSelectionContainer.css('top', '').css('left', '').css('position', 'absolute').css('bottom', '0').css('margin-left', '');
      }

    }).trigger('resize').trigger('scroll');
  });
})(jQuery, this);
