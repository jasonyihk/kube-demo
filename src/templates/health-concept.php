{% extends "base.php" %}
{% block header_css %}
<link rel="stylesheet" type="text/css" href="../../css/health-concept.css">
{% endblock %}
{% block header_js %}
<script src="../../js/testimonials.js"></script>
{% endblock %}
{% block main_content %}
<section id="health-concept">
  <section class="banner background-image" data-background-image-src="../../img/banner.jpg">
    {% include 'header.php' %}
    <div class="row">
      {% include 'component/banner.php' with {
        'title':'health-concept.banner-title',
        'subtitle':'health-concept.banner-subtitle',
        'hyperLink':'our-health-concept',
        'gaLabel':'more_healthphilosophy'
      } %}
      <div class="scroll-indicator">
        <span></span>
      </div>
      <a href="../products/" class="next-button ga-click-tracking" data-ga-label="more_[content_id]"></a>
    </div>
  </section>
  <section class="learn-more-container learn-more">
    {% include 'component/page-title.php' with {
      'title':'health-concept.mainpage-title',
      'subtitle':'health-concept.mainpage-subtitle',
    } %}
    <div class="container">
      <div class="row image-row">
        {% include 'component/image-intro.php' with {
          'title':'health-concept.learn-more.0',
          'bgImgURL':'../../img/brand1.jpg',
          'learnMoreURL':'../our-health-concept/#four-plus-three-our-health-concept',
          'colSize':'4',
        } %}
        {% include 'component/image-intro.php' with {
          'title':'health-concept.learn-more.1',
          'bgImgURL':'../../img/brand2.jpg',
          'learnMoreURL':'../our-health-concept/#four-plus-three-our-health-concept',
          'colSize':'4',
        } %}
        {% include 'component/image-intro.php' with {
          'title':'health-concept.learn-more.2',
          'bgImgURL':'../../img/brand3.jpg',
          'learnMoreURL':'../our-health-concept/#four-plus-three-our-health-concept',
          'colSize':'4',
        } %}
      </div>
    </div>
  </section>
  <section class="article">
      {% include 'component/article.php' with {
        'title':'health-concept.article.0.title',
        'content':'health-concept.article.0.content',
        'imgURL':'../../img/prod1.png',
        'gaLabel':'more_shop',
        'button':'button.shop-now',
        'bgColor':'#f5f3ec',
        'contentPos':'right',
        'dataTarget':'.shop-now-overlay',
      } %}
      {% include 'component/article.php' with {
        'title':'health-concept.article.1.title',
        'content':'health-concept.article.1.content',
        'imgURL':'../../img/ph-ban2_485x640.jpg',
        'gaLabel':'more_r_and_d',
        'button':'button.learn-more',
        'bgColor':'#ffffff',
        'contentPos':'left',
        'buttonLink':'../research-and-development/',
      } %}
  </section>
    <section class="testimonials container">
      <div class="row">
        <section class="swiper-desktop swiper-mobile swiper-container swiper-container-horizontal swiper-container-android" data-swiper-wrapper=".slide-wrapper" data-swiper-slide=".slide" data-swiper-pagination=".product-slide-pager-container" data-swiper-direction="horizontal" data-swiper-autoplay="7000" data-loop="true" loopAdditionalSlides="3">
          <div class="slide-wrapper">
            {% for i in range(0,2) -%}
              {% include 'component/testimonials.php' with {
                'name':'testimonials.product.'~i~'.name',
                'title':'testimonials.product.'~i~'.title',
                'content':'testimonials.product.'~i~'.content',
                'imgURL':'testimonials.product.'~i~'.image',
                'bgColor':'testimonials.product-color.'~i,
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
