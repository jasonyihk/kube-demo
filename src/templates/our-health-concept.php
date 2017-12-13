{% extends "base.php" %}


{% block header_css %}
<link rel="stylesheet" type="text/css" href="../../css/our-health-concept.css">
{% endblock %}

{% block main_content %}
  {% include 'header.php' %}
  <section id="our-health-concept" class="subpages">
    <section id="traditional-chinese-health-concept" class="anchor">
    </section>

    {% include 'component/subpage-banner.php' with {
      'title':'our-health-concept.banner-title',
      'haveMask':false,
      'imgURL':'../../img/our-health-concept/our-health-concept-ban.jpg'
    } %}

    <section class="background-image intro" data-background-image-src="../../img/repeat-bg.png">
      <div class="vertical-center-container">
        <div class="vertical-center text-center">
          <div class="container">
            <p class="title">{{ 'our-health-concept.subpage-title'|trans }}</p>
            <p class="subtitle">{{ 'our-health-concept.subpage-subtitle'|trans|raw|nl2br }}</p>
          </div>
        </div>
      </div>
    </section>

    <section id="four-plus-three-our-health-concept" class="anchor">
    </section>

    <section class="philosophy container">
    <div class="text-center">
      <p class="title">{{ 'our-health-concept.philosophy.title'|trans }}</p>
      <p  class="subtitle">{{ 'our-health-concept.philosophy.subtitle'|trans|raw }}</p>
    </div>
    <div class="philosophy-container ">
      <div class="row">
        <div class="col-md-4">
          <div class="philosophy-description-container">
            <p class="description-name">{{ 'our-health-concept.philosophy.description.0.title'|trans }}</p>
            <hr class="philosophy-description-hr">
            <p class="description-content">{{ 'our-health-concept.philosophy.description.0.content'|trans|raw }}</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="philosophy-description-container">
            <p class="description-name">{{ 'our-health-concept.philosophy.description.1.title'|trans }}</p>
            <hr class="philosophy-description-hr">
            <p class="description-content">{{ 'our-health-concept.philosophy.description.1.content'|trans|raw }}</b>
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="philosophy-description-container">
            <p class="description-name">{{ 'our-health-concept.philosophy.description.2.title'|trans }}</p>
            <hr class="philosophy-description-hr">
            <p class="description-content">{{ 'our-health-concept.philosophy.description.2.content'|trans|raw }}</p>
          </div>
        </div>
      </div>
    </div>
    </section>
    <section class="healthy-life-container">
      <img src="../../img/healthconceptBG.jpg" alt="Healthy Life" class="healthy-life-image">
      <div class="title main">
        {{ 'our-health-concept.philosophy.description.1.title'|trans }}
      </div>
      <div id="circular-health-concepts">
        <div class="white circle"></div>
      </div>
      <div id="dot-1" class="dot-content">
          <div class="dot"></div>
          <div class="title">{{ 'our-health-concept.dot-content.0.title'|trans|raw }}</div>
          <div class="underline"></div>
          <div class="description">{{ 'our-health-concept.dot-content.0.description'|trans|raw }}</div>
      </div>
      <div id="dot-2" class="dot-content">
          <div class="dot"></div>
          <div class="title">{{ 'our-health-concept.dot-content.1.title'|trans|raw }}</div>
          <div class="underline"></div>
          <div class="description">{{ 'our-health-concept.dot-content.1.description'|trans|raw }}</div>
      </div>
      <div id="dot-3" class="dot-content">
          <div class="dot"></div>
          <div class="title">{{ 'our-health-concept.dot-content.2.title'|trans|raw }}</div>
          <div class="underline"></div>
          <div class="description">{{ 'our-health-concept.dot-content.2.description'|trans|raw }}</div>
      </div>
      <!--<img src="../../img/our-health-concept/healthy-life-text-desktop.gif" alt="Healthy Life Text" class="healthy-life-image healthy-life-image-gif hidden-xs hidden-sm locale-en" data-locale="{{ locale }}">-->
      <!--<img src="../../img/our-health-concept/en_health.png" alt="Healthy Life Text" class="healthy-life-image healthy-life-image-gif hidden-xs hidden-sm locale-en" data-locale="{{ locale }}">-->
      <!--<img src="../../img/our-health-concept/healthy-life-text-mobile.gif" alt="Healthy Life Text" class="healthy-life-image healthy-life-image-gif hidden-md hidden-lg locale-en" data-locale="{{ locale }}">-->
      <!--<img src="../../img/our-health-concept/healthy-life-text-desktop-zh-cn.gif" alt="Healthy Life Text" class="healthy-life-image healthy-life-image-gif hidden-xs hidden-sm locale-zh-cn" data-locale="{{ locale }}">-->
      <!--<img src="../../img/our-health-concept/sc_health.png" alt="Healthy Life Text" class="healthy-life-image healthy-life-image-gif hidden-xs hidden-sm locale-zh-cn" data-locale="{{ locale }}">-->
      <!--<img src="../../img/our-health-concept/healthy-life-text-mobile-zh-cn.gif" alt="Healthy Life Text" class="healthy-life-image healthy-life-image-gif hidden-md hidden-lg locale-zh-cn" data-locale="{{ locale }}">-->
    </section>
    <section class="healthy-life-container-mobile">
      <img src="../../img/healthconceptBG.jpg" alt="Healthy Life" class="healthy-life-image">
      <div class="title main">
        {{ 'our-health-concept.philosophy.description.1.title'|trans }}
      </div>
      <div id="healthy-life-image-mobile">
        <img class="healthy-life-image-1" {{'our-health-concept.helthy_life_animation_img_1'|trans|raw }} />
        <img class="healthy-life-image-2" {{'our-health-concept.helthy_life_animation_img_2'|trans|raw }} />
        <img class="healthy-life-image-3" {{'our-health-concept.helthy_life_animation_img_3'|trans|raw }} />
      </div>
    </section>
    <section class="habit-restoration-container habit-restoration">
      <p class="habit-restoration-main-title hidden-xs hidden-sm">
        {{ 'our-health-concept.healthy-life.title'|trans|raw }}
      </p>
      <div class="habit-restoration-text-table">
        <div class="habit-restoration-text-column-wrapper">
          <div class="habit-restoration-text-column">
            <p class="habit-restoration-main-title hidden-md hidden-lg hidden-rt">{{ 'our-health-concept.healthy-life.4-habits.title'|trans }}</p>
            <div class="habit-restoration-text-container">
              <p class="title">{{ 'our-health-concept.healthy-life.4-habits.content.0.title'|trans|raw|nl2br }}</p>
              <p class="subtitle">{{ 'our-health-concept.healthy-life.4-habits.content.0.content'|trans|raw|nl2br }}</p>
            </div>
            <div class="habit-restoration-text-container">
              <p class="title">{{ 'our-health-concept.healthy-life.4-habits.content.1.title'|trans|raw|nl2br }}</p>
              <p class="subtitle">{{ 'our-health-concept.healthy-life.4-habits.content.1.content'|trans|raw|nl2br }}</p>
            </div>
            <div class="habit-restoration-text-container">
              <p class="title">{{ 'our-health-concept.healthy-life.4-habits.content.2.title'|trans|raw|nl2br }}</p>
              <p class="subtitle">{{ 'our-health-concept.healthy-life.4-habits.content.2.content'|trans|raw|nl2br }}</p>
            </div>
            <div class="habit-restoration-text-container">
              <p class="title">{{ 'our-health-concept.healthy-life.4-habits.content.3.title'|trans|raw|nl2br }}</p>
              <p class="subtitle">{{ 'our-health-concept.healthy-life.4-habits.content.3.content'|trans|raw|nl2br }}</p>
            </div>
          </div>
        </div>
        <div class="habit-restoration-text-column-wrapper">
          <div class="habit-restoration-text-column">
            <p class="habit-restoration-main-title hidden-md hidden-lg hidden-rt">{{ 'our-health-concept.healthy-life.3-restorations.title'|trans }}
            </p>
            <div class="habit-restoration-text-container">
              <p class="title">{{ 'our-health-concept.healthy-life.3-restorations.content.0.title'|trans|raw|nl2br }}</p>
              <p class="subtitle">{{ 'our-health-concept.healthy-life.3-restorations.content.0.content'|trans|raw|nl2br }}</p>
            </div>
            <div class="habit-restoration-text-container">
              <p class="title">{{ 'our-health-concept.healthy-life.3-restorations.content.1.title'|trans|raw|nl2br }}</p>
              <p class="subtitle">{{ 'our-health-concept.healthy-life.3-restorations.content.1.content'|trans|raw|nl2br }}</p>
            </div>
            <div class="habit-restoration-text-container">
              <p class="title">{{ 'our-health-concept.healthy-life.3-restorations.content.2.title'|trans|raw|nl2br }}</p>
              <p class="subtitle">{{ 'our-health-concept.healthy-life.3-restorations.content.2.content'|trans|raw|nl2br }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contact-us-container contact-us">
      <p class="title">{{ 'our-health-concept.healthy-life.intrigue.title'|trans|raw|nl2br }}</p>
      <a data-ga-label="contantus" class="ga-click-tracking" href=../products/>
        <button class="btn button white">{{ 'our-health-concept.healthy-life.intrigue.contact'|trans|raw|nl2br }}</button>
      </a>
    </section>
</section>
{% endblock %}
