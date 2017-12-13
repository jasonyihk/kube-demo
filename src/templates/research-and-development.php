{% extends "base.php" %}


{% block header_css %}
<link rel="stylesheet" type="text/css" href="../../css/research-and-development.css">
{% endblock %}

{% block main_content %}
  {% include 'header.php' %}
<section id="research-and-development" class="subpages">
  {% include 'component/subpage-banner.php' with {
    'title':'research-and-development.banner-title',
    'haveMask':false,
    'imgURL':'../../img/research-and-development/banner.jpg'
  } %}

  {% include 'component/page-title.php' with {
    'title':'research-and-development.subpage-title',
    'subtitle':'research-and-development.description.0',
    'bgImgURL':'../../img/bg.png'
  } %}


  <section class="description-container container">
    <div class="row">
      <div class="col-md-4">
        <p class="description-text description-left">{{ 'research-and-development.description.1'|trans|raw }}</p>
      </div>
      <div class="col-md-4">
        <p class="description-text">{{ 'research-and-development.description.2'|trans|raw }}</p>
      </div>
      <div class="col-md-4">
        <p class="description-text description-right">{{ 'research-and-development.description.3'|trans|raw }}</p>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="row-height row-no-padding">
        <div class="col-md-6 col-md-height">
          <img src="../../img/research-and-development/patented-technologies_485x810.jpg" alt="Patented Technologies" class="responsive-image">
        </div>
        <div class="col-md-6 col-md-height article-text-container">
          <div class="article-text-container-right">
            <p class="section-title">{{ 'research-and-development.patented-technologies.title'|trans }}</p>
            <p class="content">{{ 'research-and-development.patented-technologies.content'|trans|raw|nl2br }}</p>
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-6 number">
                <div class="number-box-content newsBG">
                  <p class="number-box-number">18</p>
                  <p class="number-box-caption">{{ 'research-and-development.number-box-caption.0'|trans }}</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-6 number">
                <div class="number-box-content newsBG">
                  <p class="number-box-number">35</p>
                  <p class="number-box-caption">{{ 'research-and-development.number-box-caption.1'|trans }}</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-6 number">
                <div class="number-box-content newsBG">
                  <p class="number-box-number">8</p>
                  <p class="number-box-caption">{{ 'research-and-development.number-box-caption.2'|trans }}</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-6 number">
                <div class="number-box-content newsBG">
                  <p class="number-box-number">2</p>
                  <p class="number-box-caption">{{ 'research-and-development.number-box-caption.3'|trans }}</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-6 number">
                <div class="number-box-content newsBG">
                  <p class="number-box-number">2</p>
                  <p class="number-box-caption">{{ 'research-and-development.number-box-caption.4'|trans }}</p>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-6 number">
                <div class="number-box-content newsBG">
                  <p class="number-box-number">559</p>
                  <p class="number-box-caption">{{ 'research-and-development.number-box-caption.5'|trans }}</p>
                </div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
{% endblock %}
