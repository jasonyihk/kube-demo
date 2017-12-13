{% extends "base.php" %}

{% block header_css %}
<link rel="stylesheet" type="text/css" href="../../css/news-detail.css">
{% endblock %}
{% block header_meta %}
{% endblock %}

{% block main_content %}
  {% include 'header.php' %}
<section id="news-detail">


  <section class="container">
    <div class="news-detail-title-container">
      <p class="news-detail-date">{{ news.news_date|date('Y.m.d') }}</p>
      <p class="title dot-ellipsis dot-resize-update">{{ news.title }}</p>
    </div>
    <section class="news-detail-image-container swiper" data-swiper-wrapper=".news-detail-image-slide-wrapper" data-swiper-slide=".news-detail-image" data-swiper-pagination=".pager" data-swiper-bullet-class="news-detail-pager-bullet" data-swiper-bullet-active-class="news-detail-pager-bullet-active" data-swiper-direction="horizontal" data-swiper-loop="true" data-swiper-pagination-clickable="true">
      <div class="news-detail-image-slide-wrapper">
        {% if news.video.s3 %}
        <div class="swiper-slide">
            <video style="width:100%;height:100%" controls controlsList="nodownload" autoplay>
                <source src="{{ news.video.s3 }}" type="video/mp4">
            Your browser does not support the video tag.
            </video>
        </div>
        {% endif %}
        {% for image in news.album %}
              <img src="{{ image.s3 }}" alt="" class="news-detail-image responsive-image">
        {% endfor %}
      </div>
    </section>
    <div class="pager"></div>
    <div class="news-detail-content-container">
      <div class="content">{{ news.product_details|raw|nl2br }}</div>
      <p class="news-detail-more-news-text">{{ ('news-detail.more-news')|trans }}</p>
    </div>
    <section class="news-other news-section">
      <div class="news-detail-more-news-container desktop">
        {% for relatedNews in relatedNewsList %}
        <div class="news-detail-more-news-row">
          <a href="../news/{{ relatedNews.id }}">
            <div class="news-detail-more-news-content">
              <div class="news-detail-more-news-text-container" data-index="{{ loop.index % 4}}">
                <div class="vertical-center-container">
                  <div class="info-block-text-container vertical-center">
                    <p class="info-subtext">{{ relatedNews.news_date|date('Y.m.d') }}</p>
                    <p class="info-text">{{ relatedNews.title }}</p>
                  </div>
                </div>
              </div>
              <div class="news-detail-more-news-image-container">
                <img src="{{ relatedNews.cover.s3_m }}" alt="" class="responsive-image">
              </div>
            </div>
          </a>
        </div>
        {% endfor %}
<!--
        <div class="news-detail-more-news-row">
          <div class="news-detail-more-news-content">
            <a href="../news-detail-{{ ('news-detail.' ~ target ~ '.more-news-url.1')|trans }}/">
              <div class="news-detail-more-news-text-container" data-index="{{ (('news-detail.' ~ target ~ '.index')|trans + 2) % 4}}">
                <div class="vertical-center-container">
                  <div class="info-block-text-container vertical-center">
                    <p class="info-subtext">{{ ('news-detail.' ~ target ~ '.more-news-date.1')|trans }}</p>
                    <p class="info-text">{{ ('news-detail.' ~ target ~ '.more-news-title.1')|trans }}</p>
                  </div>
                </div>
              </div>
              <div class="news-detail-more-news-image-container">
                <img src="../../img/{{ ('news-detail.' ~ target ~ '.more-news-image.1')|trans }}" alt="" class="responsive-image">
              </div>
            </a>
          </div>
        </div> -->
      </div>
      <div class="news-detail-more-news-container row mobile">
        <div class="col-md-6 no-padding">
          <a data-ga-label="{{gaLabel}}" class="ga-click-tracking" href="../news-detail-{{ ('news-detail.' ~ target ~ '.more-news-url.0')|trans }}/">
            <div class="row no-margin">
              <div class="background-image col-md-6 col-xs-12 right newsBG" data-background-image-src="../../img/{{ ('news-detail.' ~ target ~ '.more-news-image.0')|trans }}"></div>
              <div class="col-md-6 col-xs-12 left newsContent info-block-text-container" style="background-color: #BE2A28;">
                <p class="info-subtext">{{ ('news-detail.' ~ target ~ '.more-news-date.0')|trans }}</p>
                <p class="info-text">{{ ('news-detail.' ~ target ~ '.more-news-title.0')|trans }}</p>
                <span class="arrow" style="border-right-color: #BE2A28;"></span>
                <span class="arrow mobile" style="border-bottom-color:#BE2A28"></span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 no-padding">
          <a data-ga-label="{{gaLabel}}" class="ga-click-tracking" href="../news-detail-{{ ('news-detail.' ~ target ~ '.more-news-url.1')|trans }}/">
            <div class="row no-margin">
              <div class="background-image col-md-6 col-xs-12 right newsBG" data-background-image-src="../../img/{{ ('news-detail.' ~ target ~ '.more-news-image.1')|trans }}"></div>
              <div class="col-md-6 col-xs-12 left newsContent info-block-text-container" style="background-color: #FFCF66;">
                <p class="info-subtext">{{ ('news-detail.' ~ target ~ '.more-news-date.1')|trans }}</p>
                <p class="info-text">{{ ('news-detail.' ~ target ~ '.more-news-title.1')|trans }}</p>
                <span class="arrow" style="border-right-color: #FFCF66;"></span>
                <span class="arrow mobile" style="border-bottom-color:#FFCF66"></span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>
  </section>
</section>
{% endblock %}
