(function($, window) {

  var fixPositionCallbackQueue = [];


  $(window).on('resize', function() {
    var screenType = $('body').width() < 992 ? 'MOBILE' : 'DESKTOP';
    fixPositionCallbackQueue.forEach(function(fixPositionCallback) {
      fixPositionCallback(screenType);
    });
    equal_cols('.philosophy-description-container');
    equal_cols('.subproduct-list');
    //$('.header').css('width',$('.container').width());
  });

  $.extend({
    fixPosition: function(callback) {
      if (typeof callback !== 'function')
        return;
      fixPositionCallbackQueue.push(callback);
    },
    getCachedScript: function(url, success) {
      return $.ajax({
        url: url,
        dataType: 'script',
        cache: true,
        success: success
      });
    }
  });

  $(function() {
    if (!Modernizr.objectfit) {
      $.getCachedScript('../../js/ofi.min.js').then(function() {
        objectFitImages();
      });
    }

    Number.isInteger = Number.isInteger || function(value) {
      return typeof value === 'number' && isFinite(value) && Math.floor(value) === value;
    };
  });

  $(function() {
    //$('.header').css('width',$('.container').width());
    initializeSelect($);
    initializeBackground($);
    initializeHeaderNav($);
    initializeBackToTop($);
    initializeFloatingButton($);
    initializeOverlay($);
    initializeLearnMore($);
    initializeInfoBlock($);
    initializeSwiper($);
    initializeGoogleAnalyticsTracking($);
    equal_cols('.philosophy-description-container');
    equal_cols('.subproduct-list');
    $(window).trigger('resize').trigger('scroll');
    $('.panel-title').click(function(){
      $(this).find('a').collapse();
    });
  });
})(jQuery, this);

function initializeSelect($) {
  $('.js-select').each(function() {
    var targetIndex = $(this).data('select-target-index');
    var targetClass = $(this).data('select-target-class');
    if (Number.isInteger(targetIndex)) {
      $(this).children().eq(targetIndex).addClass(targetClass);
    }
  });
}

function initializeBackground($) {
  $.fixPosition(function(screenType) {
    $('.background-image').each(function() {
      if (screenType === 'MOBILE' && $(this).data('background-mobile-image-src')) {
        $(this).css('background-image', 'url(' + $(this).data('background-mobile-image-src') + ')');
      } else if ($(this).data('background-image-src')) {
        $(this).css('background-image', 'url(' + $(this).data('background-image-src') + ')');
      } else {
        $(this).css('background-image', '');
      }
    });
    $('.newsBG').each(function(){
      $(this).css('height',$(this).width());
    });
    $('.newsContent').each(function(){
      $(this).css('height',$(this).prev().width());
    });
    var iconPos = parseInt($('.container').css('margin-left').slice(0,-2))+parseInt($('.container').css('padding-left').slice(0,-2)) + 20;
  });
}

function initializeBackToTop($) {
  $(window).on('scroll', function() {
    var scrollTrigger = $(window).height();
    var scrollTop = $(window).scrollTop();
    if (scrollTop > scrollTrigger) {
      $('.back-to-top-container').children().addClass('active');
    } else {
      $('.back-to-top-container').children().removeClass('active');
    }
  });

  $('.back-to-top-container').on('click', function() {
    $('html, body').animate({ scrollTop: 0 }, 700);
  });
}

function initializeFloatingButton($) {
  $(window).on('scroll', function() {
    var offset = $(document).height() - ($(window).scrollTop() + $(window).height());
    var shouldFloatingButtonBeFixed = $('body').width() < 992 && offset < 170 || $('body').width() >= 992 && offset < 100;
    $('body').toggleClass('fixed-floating-button', shouldFloatingButtonBeFixed);
  });
}

function initializeHeaderNav($) {
  var $mainContainer = $('#main-container');
  var $headerNavbarContainer = $('.header-navbar-container');
  $headerNavbarContainer.on('show.bs.collapse', function() {
    var windowScrollTop = parseInt($(window).scrollTop());
    $mainContainer.addClass('header-navbar-on-open').append($('<div>').addClass('header-mobile-menu-overlay')).css('top', -windowScrollTop + 'px');
  }).on('hidden.bs.collapse', function() {
    var windowScrollTop = parseInt($mainContainer.css('top'));
    $mainContainer.removeClass('header-navbar-on-open').css('top', '').find('.header-mobile-menu-overlay').remove();
    $(window).scrollTop(-windowScrollTop);
  });

  // var $header = $('.header');
  $(window).on('scroll', function() {
    if ($mainContainer.hasClass('header-navbar-on-open'))
      return;
    var scrollTrigger = 1;
    var scrollTop = $(window).scrollTop();
    if (scrollTop > scrollTrigger || scrollTop > 810) {
      $('.header').addClass('header-on-scroll');
      $('.header').css('width','100%');
    } else {
      $('.header').removeClass('header-on-scroll');
    }
  });

  $mainContainer.on('click', '.header-mobile-menu-overlay', function() {
    $headerNavbarContainer.collapse('hide');
  });

  $('.dropdown-submenu').on('click', '.dropdown', function(event) {
    event.stopPropagation();
    $(this).addClass('open');
  }).on('click', '.dropdown-submenu .back', function(event) {
    event.stopPropagation();
    $(this).closest('.open').removeClass('open');
  });

  $('.header-center-navbar-item.dropdown>a, .header-right-navbar-item.dropdown>a').on('touchstart', function(event) {
    event.preventDefault();
    event.stopPropagation();
    $(this).parent().addClass('on-touch').addClass('open');
  }).on('click', function(event) {
    if ($(this).parent().hasClass('on-touch')) {
      event.preventDefault();
      event.stopPropagation();
    } else {
      if ($(this).attr('href'))
        window.location.assign($(this).attr('href'));
    }
  }).parent().on('hidden.bs.dropdown', function() {
    $(this).removeClass('on-touch');
  });
}

function initializeOverlay($) {
  $('.overlay-modal').each(function() {
    var $overlay = $(this);
    var $overlayForm = $overlay.find('.overlay-form');
    if ($overlayForm.length) {
      $overlayForm.validate({
        errorElement: 'p',
        errorPlacement: function(error) {
          $('#' + $overlayForm.next().attr('id')).html(error);
        },
        success: function() {
          $('#' + $overlayForm.next().attr('id')).empty();
        }
      });
      var $input = $overlayForm.find('.input-field');
      $overlay.find('.button.red').on('click', function() {
        if ($overlayForm.valid()) {
          var url = '//' + $input.val() + $input.data('url');
          window.open(url);
        }
      });
      $overlay.find("input[name='join-now-username']").keypress(function (e) {
        if (e.which == 13) {
          if ($overlayForm.valid()) {
            var url = '//' + $input.val() + $input.data('url');
            window.open(url);
            return false;
          }
        }
      });
      $overlay.find("input[name='shop-now-username']").keypress(function (e) {
        if (e.which == 13) {
          if ($overlayForm.valid()) {
            var url = '//' + $input.val() + $input.data('url');
            window.open(url);
            return false;
          }
        }
      });
    }
  });

  var $copyLinkPopupContainer = $('.copy-link-popup-container');
  var copyLink = new Clipboard($('.social-overlay-icon-copy-link').parent().get(0), {
    text: function() {
      return window.location.href;
    }
  });
  copyLink.on('success', function() {
    $copyLinkPopupContainer.show().fadeOut(3000);
  });

  $('.social-overlay-icon-facebook, .social-overlay-icon-mail, .social-overlay-icon-twitter').each(function() {
    var $icon = $(this);
    var twitterDescription = $('meta[property="twitter:description"]').attr('content');
    var twitterTitle = $('meta[property="twitter:title"]').attr('content');
    $icon.closest('a').on('click', function(event) {
      event.preventDefault();
      var currentUrl = window.location.href;
      if (currentUrl.indexOf('#') !== -1) {
        currentUrl = currentUrl.substring(0, currentUrl.indexOf('#'));
      }
      if ($icon.hasClass('social-overlay-icon-facebook')) {
        window.open($(this).attr('href') + encodeURIComponent(currentUrl));
      } else if($icon.hasClass('social-overlay-icon-mail')) {
        window.location.href = $(this).attr('href') + encodeURIComponent(currentUrl+'\r\n'+twitterTitle+'\r\n'+twitterDescription)+'&subject='+encodeURIComponent(twitterTitle);
      } else {
        window.open($(this).attr('href') + encodeURIComponent(twitterTitle+'\r\n' +currentUrl));
      }
    });
  });
}

function initializeLearnMore($) {
  $('.learn-more').each(function() {
    var $hoverImageHover = $('.hover-image', this).first().addClass('hover-image-hover');
    window.setInterval(function() {
      var $nextHoverImageHover = $hoverImageHover.removeClass('hover-image-hover').next();
      if ($nextHoverImageHover.length)
        $hoverImageHover = $nextHoverImageHover;
      else
        $hoverImageHover = $hoverImageHover.parent().find('.hover-image').first();
      $hoverImageHover.addClass('hover-image-hover');
    }, 5000);
  });
}

function initializeInfoBlock($) {
  $('.info-block').each(function() {
    var backgroundColor = $(this).css('background-color');
    $(this).find('.info-block-up-arrow').css('border-bottom-color', backgroundColor);
    $(this).find('.info-block-left-arrow').css('border-right-color', backgroundColor);
    $(this).find('.info-block-right-arrow').css('border-left-color', backgroundColor);
  });
}

function initializeSwiper($) {
  var swiperDesktop = null;
  var $swiperDesktop = $('.swiper-desktop');
  var swiperMobile = null;
  var $swiperMobile = $('.swiper-mobile');

  function getSwiperConfig($container, config) {
    if (!$container.length)
      return;
    var htmlDataConfig = Object.keys($container.data()).filter(function(key) {
      return key.indexOf('swiper') === 0;
    }).reduce(function(config, key) {
      var configName = key.substr(6);
      if (configName) {
        configName = configName[0].toLowerCase() + configName.substr( 1 )
        config[configName] = $container.data(key);
      }
      return config;
    }, {});
    return Object.assign({}, htmlDataConfig, config);
  }

  function createSwiperInstance($container) {
    $container.addClass('swiper-container');
    $container.find($container.data('swiper-wrapper')).addClass('swiper-wrapper');
    $container.find($container.data('swiper-slide')).addClass('swiper-slide');
    return $container.swiper(getSwiperConfig($container, {
      paginationClickable:true,
      onSlideChangeStart: function(swiper) {
        var colorArr = [
          '#D9BA8C',
          '#FFC766',
          '#9AB57D',
        ];
        $('.testimonials-bg-color').css('background-color',colorArr[swiper.realIndex]);
        if (swiper.realIndex === 0) {
          $(swiper.prevButton).addClass('inactive');
        } else {
          $(swiper.prevButton).removeClass('inactive');
        }
        if (swiper.params.loop && swiper.realIndex === swiper.slides.length - 3 ||
          !swiper.params.loop && swiper.realIndex === swiper.slides.length) {
          $(swiper.nextButton).addClass('inactive');
        } else {
          $(swiper.nextButton).removeClass('inactive');
        }
      }
    }));
  }

  function destroySwiperInstance($container, instance) {
    instance.destroy(true, true);
    $container.removeClass('swiper-container');
    $container.find($container.data('swiper-wrapper')).removeClass('swiper-wrapper');
    $container.find($container.data('swiper-slide')).removeClass('swiper-slide');
  }

  $.fixPosition(function(screenType) {
    if (screenType === 'MOBILE') {
      if ($swiperDesktop.length !== 0 && swiperDesktop) {
        destroySwiperInstance($swiperDesktop, swiperDesktop);
        swiperDesktop = null;
      }
      if ($swiperMobile.length !== 0 && !swiperMobile) {
        swiperMobile = createSwiperInstance($swiperMobile);
      }
    } else {
      if ($swiperMobile.length !== 0 && swiperMobile) {
        destroySwiperInstance($swiperMobile, swiperMobile);
        swiperMobile = null;
      }
      if ($swiperDesktop.length !== 0 && !swiperDesktop) {
        swiperDesktop = createSwiperInstance($swiperDesktop);
      }
    }
  });

  createSwiperInstance($('.swiper'));
}

function initializeGoogleAnalyticsTracking($) {
  var locale = $('html').attr('lang');
  $('.ga-click-tracking').on('click', function() {
    function retrieveEventCategory(url) {
      url = url.substring(1, url.length);
      return url.substring(locale.length, url.length);
    }
    var gaLabel = $(this).data('ga-label');
    ga(function(tracker) {
      ga('send', 'event', retrieveEventCategory(window.location.pathname), 'click', gaLabel, {
        'dimension1': tracker.get('clientId')
      });
    });
  });
  $('.ga-focus-tracking').on('focus', function() {
    var gaLabel = $(this).data('ga-label');
    ga(function(tracker) {
      ga('send', 'event', retrieveEventCategory(window.location.pathname), 'onfocus', gaLabel, {
        'dimension1': tracker.get('clientId')
      });
    });
  });
}

function equal_cols(el)
{
    var h = 0;
    jQuery(el).each(function(){
        jQuery(this).css({'height':'auto'});
        if(jQuery(this).outerHeight() > h)
        {
            h = jQuery(this).outerHeight();
        }
    });
    jQuery(el).each(function(){
        jQuery(this).css({'height':h});
    });
}
