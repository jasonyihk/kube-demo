{% extends "base.php" %}
{% block main_content %}
<section id="business-opportunity">
  <section class="banner background-image" data-background-image-src="../../img/bo-header.jpg">
    {% include 'header.php' %}
    <div class="row">
      {% include 'component/banner.php' with {
        'title':'business-opportunity.banner-title',
        'subtitle':'business-opportunity.banner-subtitle',
        'hyperLink':'',
        'gaLabel':''
      } %}
      <div class="scroll-indicator">
        <span></span>
      </div>
      <a href="../products/" class="previous-button"></a>
    </div>
  </section>
  <section class="learn-more-container container-fluid learn-more">
    <div class="row linear-color">
      <div class="page-row-10-col-4 col-md-12 background-image">
        <div class="vertical-center-container">
          <div class="vertical-center text-center">
            <p class="brand-main-title brand-main-subtitle2">{{ 'business-opportunity.mainpage-title'|trans }}</p>
                  <p class="brand-main-subtitle brand-main-subtitle2">{{ 'business-opportunity.mainpage-subtitle'|trans|raw|nl2br }}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row image-row">
        {% include 'component/image-intro.php' with {
          'title':'business-opportunity.learn-more.0',
          'bgImgURL':'../../img/bo-mid1.jpg',
          'learnMoreURL':'../about-infinitus/',
          'colSize':'6',
        } %}
        {% include 'component/image-intro.php' with {
          'title':'business-opportunity.learn-more.1',
          'bgImgURL':'../../img/bo-mid2.png',
          'learnMoreURL':'../corporate-culture/',
          'colSize':'6',
        } %}
      </div>
    </div>
  </section>
    {% include 'component/article.php' with {
      'title':'business-opportunity.article.0.title',
      'content':'business-opportunity.article.0.content',
      'imgURL':'../../img/bo-ban1.png',
      'gaLabel':'more_shop',
      'button':'button.join',
      'bgColor':'#f5f3ec',
      'contentPos':'left',
      'buttonLink':'../business-opportunity-detail/',
    } %}
    {% include 'component/article.php' with {
      'title':'business-opportunity.article.1.title',
      'content':'business-opportunity.article.1.content',
      'imgURL':'../../img/bo-ban2_485x640.jpg',
      'gaLabel':'more_shop',
      'button':'button.join-now',
      'bgColor':'#ffffff',
      'contentPos':'right',
      'dataTarget':'.join-now-overlay',
    } %}
    <section class="testimonials container">
      <div class="row">
        <section class="swiper-desktop swiper-mobile swiper-container swiper-container-horizontal swiper-container-android" data-swiper-wrapper=".slide-wrapper" data-swiper-slide=".slide" data-swiper-pagination=".product-slide-pager-container" data-swiper-direction="horizontal" data-swiper-autoplay="7000">
          <div class="slide-wrapper">
            {% for i in range(0,1) -%}
              {% include 'component/testimonials.php' with {
                'name':'testimonials.business.'~i~'.name',
                'title':'testimonials.business.'~i~'.title',
                'content':'testimonials.business.'~i~'.content',
                'imgURL':'testimonials.business.'~i~'.image',
                'bgColor':'testimonials.business-color.'~i,
                'contentPos':'left',
                'bgPos':'right',
                'gaLabel':'news_20170308',
                'mobileSize':'12'
              } %}
            {%- endfor %}
          </div>
        </section>
      </div>
    </section>
</section>
{% endblock %}
