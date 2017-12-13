{% extends "base.php" %}


{% block header_css %}
<link rel="stylesheet" type="text/css" href="../../css/quality-assurance.css">
{% endblock %}

{% block main_content %}
  {% include 'header.php' %}
<section id="quality-assurance" class="subpages">
  {% include 'component/subpage-banner.php' with {
    'title':'quality-assurance.banner-title',
    'haveMask':false,
    'imgURL':'../../img/quality-assurance/banner.jpg'
  } %}


  {% include 'component/page-title.php' with {
    'title':'quality-assurance.subpage-title',
    'subtitle':'quality-assurance.subpage-subtitle',
    'bgImgURL':'../../img/bg.png'
  } %}

  <section class="certificate-container container">
      <div class="certificate-icon-container img-show-lg">
        <div class="res-img-con">
          <img src="../../img/quality-assurance/qaicons.png" alt="" class="res-img">
        </div>
      </div>
      <div class="certificate-icon-container img-show-sm">
        <div class="res-img-con">
          <img src="../../img/quality-assurance/qaicons-res.png" alt="" class="res-img">
        </div>
      </div>

    <div class="row">
      <div class="certificate-text-row row-no-padding row-height">
        <div class="col-md-6 col-md-height">
          <div class="certificate-text-container">
            <p class="content">{{ 'quality-assurance.certificate.0'|trans|raw }}</p>
          </div>
        </div>
        <div class="col-md-6 col-md-height">
          <div class="certificate-text-container">
            <p class="content">{{ 'quality-assurance.certificate.1'|trans|raw }}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="certificate-text-row row-no-padding row-height">
        <div class="col-md-6 col-md-height">
          <div class="certificate-text-container">
            <p class="content">{{ 'quality-assurance.certificate.2'|trans|raw }}</p>
          </div>
        </div>
        <div class="col-md-6 col-md-height">
          <div class="certificate-text-container">
            <p class="content">{{ 'quality-assurance.certificate.3'|trans|raw }}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="certificate-text-row row-no-padding row-height">
        <div class="col-md-12 col-md-height">
          <div class="certificate-text-container">
            <p class="content">{{ 'quality-assurance.certificate.4'|trans|raw }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="manufacturing-container manufacturing-section container">
    <p class="light-title" id="section-title">{{ 'quality-assurance.manufacturing.title'|trans }}</p>
    <p class="subtitle">{{ 'quality-assurance.manufacturing.description'|trans }}</p>
    <div class="site-container clearfix">
      <div class="site-image-container">
        <img src="../../img/quality-assurance/xinhui-production-base.jpg" alt="Xinhui Production Base" class="responsive-image">
      </div>
      <div class="site-text-container">
        <div class="vertical-center-container">
          <div class="vertical-center">
            <div class="paragraph">
              <p class="light-title">{{ 'quality-assurance.manufacturing.site.title.0'|trans }}</p>
              <p class="content">{{ 'quality-assurance.manufacturing.site.content.0'|trans|raw }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-container clearfix">
      <div class="site-image-container">
        <img src="../../img/quality-assurance/yingkou-production-base.jpg" alt="Yingkou Production Base" class="responsive-image">
      </div>
      <div class="site-text-container">
        <div class="vertical-center-container">
          <div class="vertical-center">
            <div class="paragraph">
              <p class="light-title">{{ 'quality-assurance.manufacturing.site.title.1'|trans }}</p>
              <p class="content">{{ 'quality-assurance.manufacturing.site.content.1'|trans|raw }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="feature-container feature-section">
      <p class="light-title">{{ 'quality-assurance.feature.title'|trans }}</p>
      <div class="content">{{ 'quality-assurance.feature.content.0'|trans|raw }}</div>
      <div class="content">{{ 'quality-assurance.feature.content.1'|trans|raw }}</div>
      <!--<div class="feature-text">{{ 'quality-assurance.feature.content.2'|trans|raw }}</div>-->
    </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="row-no-padding row-height">
        <div class="col-md-6 col-md-push-6 col-md-height col-md-top">
          <img src="../../img/quality-assurance/cultivation.png" alt="Cultivation" class="responsive-image">
        </div>
        <div class="col-md-6 col-md-pull-6 col-md-height col-md-middle article-text-container">
          <div class="article-text-container-left">
            <p class="section-title">{{ 'quality-assurance.cultivation.title'|trans }}</p>
            <p class="content">{{ 'quality-assurance.cultivation.content'|trans|raw|nl2br }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--<section class="unification-container swiper-mobile" data-swiper-wrapper=".unification-slide-container" data-swiper-slide=".unification-slide" data-swiper-pagination=".unification-pager-container" data-swiper-bullet-class="unification-pager-bullet" data-swiper-bullet-active-class="unification-pager-bullet-active" data-swiper-direction="horizontal" data-swiper-pagination-clickable="true" data-swiper-centered-slides="true" data-swiper-slides-per-view="auto" data-swiper-space-between="10">
    <p class="unification-title">{{ 'quality-assurance.unification.title'|trans }}</p>
    <div class="unification-slide-container">
      <div class="unification-slide">
        <div class="unification-text">
          <div class="vertical-center-container">
            <div class="vertical-center">{{ 'quality-assurance.unification.content.title.0'|trans }}</div>
          </div>
        </div>
        <div class="unification-subtext">
          <div class="vertical-center-container">
            <div class="vertical-center">{{ 'quality-assurance.unification.content.content.0'|trans }}</div>
          </div>
        </div>
      </div>
      <div class="unification-slide">
        <div class="unification-text">
          <div class="vertical-center-container">
            <div class="vertical-center">{{ 'quality-assurance.unification.content.title.1'|trans }}</div>
          </div>
        </div>
        <div class="unification-subtext">
          <div class="vertical-center-container">
            <div class="vertical-center">{{ 'quality-assurance.unification.content.content.1'|trans }}</div>
          </div>
        </div>
      </div>
      <div class="unification-slide">
        <div class="unification-text">
          <div class="vertical-center-container">
            <div class="vertical-center">{{ 'quality-assurance.unification.content.title.2'|trans }}</div>
          </div>
        </div>
        <div class="unification-subtext">
          <div class="vertical-center-container">
            <div class="vertical-center">{{ 'quality-assurance.unification.content.content.2'|trans }}</div>
          </div>
        </div>
      </div>
      <div class="unification-slide">
        <div class="unification-text">
          <div class="vertical-center-container">
            <div class="vertical-center">{{ 'quality-assurance.unification.content.title.3'|trans }}</div>
          </div>
        </div>
        <div class="unification-subtext">
          <div class="vertical-center-container">
            <div class="vertical-center">{{ 'quality-assurance.unification.content.content.3'|trans }}</div>
          </div>
        </div>
      </div>
      <div class="unification-slide">
        <div class="unification-text">
          <div class="vertical-center-container">
            <div class="vertical-center">{{ 'quality-assurance.unification.content.title.4'|trans }}</div>
          </div>
        </div>
        <div class="unification-subtext">
          <div class="vertical-center-container">
            <div class="vertical-center">{{ 'quality-assurance.unification.content.content.4'|trans }}</div>
          </div>
        </div>
      </div>
    </div>
    <div class="unification-pager-container"></div>
  </section>-->
</section>
{% endblock %}
