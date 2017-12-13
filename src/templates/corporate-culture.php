{% extends "base.php" %}


{% block header_css %}
<link rel="stylesheet" type="text/css" href="../../css/corporate-culture.css">
{% endblock %}

{% block main_content %}
  {% include 'header.php' %}
<section id="corporate-culture" class="subpages">
  {% include 'component/subpage-banner.php' with {
    'title':'corporate-culture.banner-title',
    'haveMask':false,
    'imgURL':'../../img/corporate-culture/banner.jpg'
  } %}

  {% include 'component/page-title.php' with {
    'title':'corporate-culture.subpage-title',
    'subtitle':'corporate-culture.subpage-subtitle',
    'bgImgURL':'../../img/bg.png'
  } %}

  <section class="three-elements-container container news-section">
    <div class="row">
      <div class="row-height row-no-padding">
        <div class="col-md-4 col-md-height element-container">
          <div class="element-image-container newsBG">
            <div class="vertical-center">
              <img src="../../img/corporate-culture/helicopter-view.jpg" alt="Helicopter View" class="element-image">
              <p class="info-title">
                {{ 'corporate-culture.three-elememnt.title.0'|trans }}
              </p>
            </div>
          </div>
          <div class="element-text-container newsBG">
            <div class="vertical-center">
              <span class="element-arrow"></span>
              <p class="info-text">{{ 'corporate-culture.three-elememnt.content.0'|trans|raw }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-md-height element-container">
          <div class="element-image-container hidden-md hidden-lg newsBG">
            <div class="vertical-center">
              <img src="../../img/corporate-culture/thinking-from-others-perspectives.jpg" alt="Thinking From Others’ Perspectives" class="element-image">
              <p class="info-title">{{ 'corporate-culture.three-elememnt.title.1'|trans }}</p>
            </div>
          </div>
          <div class="element-text-container newsBG">
            <div class="vertical-center">
              <span class="element-arrow"></span>
              <p class="info-text">{{ 'corporate-culture.three-elememnt.content.1'|trans|raw }}</p>
            </div>
          </div>
          <div class="element-image-container hidden-sm hidden-xs newsBG" >
            <div class="vertical-center">
              <img src="../../img/corporate-culture/thinking-from-others-perspectives.jpg" alt="Thinking From Others’ Perspectives" class="element-image">
              <p class="info-title">{{ 'corporate-culture.three-elememnt.title.1'|trans }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-md-height element-container">
          <div class="element-image-container newsBG">
            <div class="vertical-center">
              <img src="../../img/corporate-culture/caring-about-others-feelings.jpg" alt="Caring About Others’ Feelings" class="element-image">
              <p class="info-title">{{ 'corporate-culture.three-elememnt.title.2'|trans }}</p>
            </div>
          </div>
          <div class="element-text-container newsBG">
            <div class="vertical-center">
              <span class="element-arrow"></span>
              <p class="info-text">{{ 'corporate-culture.three-elememnt.content.2'|trans|raw }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--<section class="leadership-container">
    <img src="../../img/corporate-culture/leadership-background.jpg" alt="Leadership background" class="leadership-image">
    <div class="leadership-content-container">
      <p class="leadership-title">{{ 'corporate-culture.leadership.title'|trans }}</p>
      <p class="leadership-description">{{ 'corporate-culture.leadership.description'|trans }}</p>
      <div class="six-element-container">
        <div class="six-element-column">
          <p class="six-element-text">{{ 'corporate-culture.leadership.six-element.0'|trans }}</p>
          <p class="six-element-text">{{ 'corporate-culture.leadership.six-element.1'|trans }}</p>
          <p class="six-element-text">{{ 'corporate-culture.leadership.six-element.2'|trans }}</p>
        </div>
        <div class="six-element-column">
          <p class="six-element-text">{{ 'corporate-culture.leadership.six-element.3'|trans }}</p>
          <p class="six-element-text">{{ 'corporate-culture.leadership.six-element.4'|trans }}</p>
          <p class="six-element-text">{{ 'corporate-culture.leadership.six-element.5'|trans }}</p>
        </div>
      </div>
    </div>
  </section>-->

  <section class="container">
    <div class="row">
      <div class="row-height row-no-padding">
        <div class="col-md-6 col-md-height col-md-push-6">
          <img src="../../img/corporate-culture/constant-entrepreneurship.png" alt="Constant Entrepreneurship" class="responsive-image">
        </div>
        <div class="col-md-6 col-md-height col-md-pull-6 article-text-container">
          <div class="article-text-container-left">
            <p class="section-title">{{ 'corporate-culture.entrepreneurship.title'|trans }}</p>
            <p class="content">{{ 'corporate-culture.entrepreneurship.content'|trans|raw|nl2br }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
{% endblock %}
