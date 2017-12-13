{% extends "base.php" %}



{% block header_css %}
<link rel="stylesheet" type="text/css" href="../../css/business-opportunity-detail.css">
{% endblock %}

{% block main_content %}
  {% include 'header.php' %}
<section id="business-opportunity-detail" class="subpages">
  {% include 'component/subpage-banner.php' with {
    'title':'business-opportunity-detail.banner-title',
    'haveMask':false,
    'imgURL':'../../img/business-opportunity-detail/banner.jpg'
  } %}
  <!--<section id="why-infinitus" class="background-image" data-background-image-src="../../img/bg-large.png">
    <div class="vertical-center-container">
      <div class="vertical-center text-center">
        <p class="subpage-title">{{ 'business-opportunity-detail.subpage-title'|trans|raw }}</p>
        <p class="subpage-subtitle">{{ 'business-opportunity-detail.subpage-subtitle'|trans|raw }}</p>
        <div class="subpage-list">
          <p class="subpage-list-item">{{ 'business-opportunity-detail.subpage-list-item.0'|trans|raw }}</p>
          <p class="subpage-list-item">{{ 'business-opportunity-detail.subpage-list-item.1'|trans|raw }}</p>
          <p class="subpage-list-item">{{ 'business-opportunity-detail.subpage-list-item.2'|trans|raw }}</p>
          <p class="subpage-list-item">{{ 'business-opportunity-detail.subpage-list-item.3'|trans|raw }}</p>
          <p class="subpage-list-item">{{ 'business-opportunity-detail.subpage-list-item.4'|trans|raw }}</p>
        </div>
      </div>
    </div>
  </section>

  <section id="business-potential" class="container-fluid">
    <div class="row">
      <div class="row-height row-no-padding">
        <div class="col-md-6 col-md-height">
          <img src="../../img/business-opportunity-detail/promising-potential.png" alt="The Promising Potential" class="responsive-image">
        </div>
        <div class="col-md-6 col-md-height article-text-container">
          <div class="article-text-container-right">
            <p class="brand-article-title">{{ 'business-opportunity-detail.promising-potential.title'|trans|nl2br }}</p>
            <p class="brand-article-text">{{ 'business-opportunity-detail.promising-potential.content'|trans|raw }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>-->

  <section id="rewards" class="health-prosperity-container container-fluid">
    {% include 'component/page-title.php' with {
      'title':'business-opportunity-detail.rewards.answer',
      'subtitle':'business-opportunity-detail.rewards.enjoy.title',
    } %}

    <div class="health-prosperity-enjoy-row row">
      <div class="row-height">
        <div class="health-prosperity-enjoy-container col-md-3 col-md-height">
          <span class="health-prosperity-enjoy-icon"></span>
          <p class="content">{{ 'business-opportunity-detail.rewards.enjoy.content.0'|trans }}</p>
        </div>
        <div class="health-prosperity-enjoy-container col-md-3 col-md-height">
          <span class="health-prosperity-enjoy-icon"></span>
          <p class="content">{{ 'business-opportunity-detail.rewards.enjoy.content.1'|trans }}</p>
        </div>
        <div class="health-prosperity-enjoy-container col-md-3 col-md-height">
          <span class="health-prosperity-enjoy-icon"></span>
          <p class="content">{{ 'business-opportunity-detail.rewards.enjoy.content.2'|trans }}</p>
        </div>
        <div class="health-prosperity-enjoy-container col-md-3 col-md-height">
          <span class="health-prosperity-enjoy-icon"></span>
          <p class="content">{{ 'business-opportunity-detail.rewards.enjoy.content.3'|trans }}</p>
        </div>
      </div>
    </div>
    <div class="health-prosperity-enjoy-row row">
      <div class="row-height">
        <div class="health-prosperity-enjoy-container col-md-3 col-md-height">
          <span class="health-prosperity-enjoy-icon"></span>
          <p class="content">{{ 'business-opportunity-detail.rewards.enjoy.content.4'|trans }}</p>
        </div>
        <div class="health-prosperity-enjoy-container col-md-3 col-md-height">
          <span class="health-prosperity-enjoy-icon"></span>
          <p class="content">{{ 'business-opportunity-detail.rewards.enjoy.content.5'|trans }}</p>
        </div>
        <div class="health-prosperity-enjoy-container col-md-3 col-md-height">
          <span class="health-prosperity-enjoy-icon"></span>
          <p class="content">{{ 'business-opportunity-detail.rewards.enjoy.content.6'|trans }}</p>
        </div>
        <div class="health-prosperity-enjoy-container col-md-3 col-md-height">
          <span class="health-prosperity-enjoy-icon"></span>
          <p class="content">{{ 'business-opportunity-detail.rewards.enjoy.content.7'|trans }}</p>
        </div>
      </div>
    </div>
  </section>

  <section class="ready-to-start-container background-image ready-to-start-section contact-us" data-background-image-src="../../img/business-opportunity-detail/ready-to-start-background.png">
    <p class="title">{{ 'business-opportunity-detail.ready-to-start.title'|trans|nl2br }}</p>
    <p class="subtitle">{{ 'business-opportunity-detail.ready-to-start.content'|trans|raw }}</p>
    <button data-ga-label="why_infinitus_join_now" class="ga-click-tracking btn button white" data-toggle="modal" data-target=".join-now-overlay">{{ 'button.join-now'|trans }}</button>
  </section>
</section>
{% endblock %}
