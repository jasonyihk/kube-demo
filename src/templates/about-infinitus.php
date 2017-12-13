{% extends "base.php" %}


{% block header_css %}
<link rel="stylesheet" type="text/css" href="../../css/about-infinitus.css">
{% endblock %}

{% block main_content %}
  {% include 'header.php' %}
<section id="about-infinitus" class="subpages">
  {% include 'component/subpage-banner.php' with {
    'title':'about-infinitus.banner-title',
    'haveMask':false,
    'imgURL':'../../img/about-infinitus/banner.jpg'
  } %}

  <!--<section class="background-image text-center" data-background-image-src="../../img/bg.jpg">
    <div class="vertical-center-container">
      <div class="vertical-center text-center">
        <p class="subpage-title">
          {{ 'about-infinitus.subpage-title'|trans }}
        </p>
        <p class="subpage-subtitle">
          {{ 'about-infinitus.subpage-subtitle'|trans|raw }}
        </p>
      </div>
    </div>
  </section>-->

  <section class="about-us-container container-fluid background-image" data-background-image-src="../../img/repeat-bg.jpg">
    <div class="container">
      <div class="row-height row-no-padding">
        <div class="col-md-6 col-md-height article-text-container">
          <div class="article-text-container-left">
            <!--<p class="brand-article-title about-us-text">
              {{ 'about-infinitus.about-us.title'|trans }}
            </p>-->
            <p class="content">
              {{ 'about-infinitus.about-us.content'|trans|raw|nl2br }}
            </p>
          </div>
        </div>
        <div class="col-md-6 col-md-height">
          <img src="../../img/about-infinitus/about-us.jpg" alt="About Us" class="responsive-image">
        </div>
      </div>
    </div>
  </section>
</section>
{% endblock %}
