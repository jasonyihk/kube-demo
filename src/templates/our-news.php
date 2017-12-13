{% extends "base.php" %}
{% block header_css %}
<link rel="stylesheet" type="text/css" href="../../css/our-news.css">
{% endblock %}
{% block main_content %}
  {% include 'header.php' %}
<section id="our-news" class="subpages">
  {% include 'component/subpage-banner.php' with {
    'title':'our-news.banner-title',
    'haveMask':true,
    'imgURL':'../../img/news-header.png'
  } %}

  {% include 'component/page-title.php' with {
    'title':'our-news.subpage-title',
    'subtitle':'',
    'bgImgURL':'../../img/bg.png'
  } %}

  <section class="news-container container news-section">
    <div class="row news">
    {% if(newsList.contents is null)%}
      <div class="text-center">
        <h3 class="subtitle">{{'no_result'|trans}}</h3>
      </div>
    {% else %}
      {% for news in newsList.contents %}
          {% include 'component/news-intro.php' with {
                  'newsURL':'../news/' ~ news.id,
                  'date':news.news_date|date('Y.m.d'),
                  'desc':news.title,
                  'imgURL':news.cover.s3_m,
                  'bgColor':(loop.index%4 == 1) ? '#9AB57D' : ((loop.index%4 == 2) ? '#D9BA8C' : (loop.index%4 == 3) ? '#BE2A28' : '#FFCF66'),
                  'contentPos': (loop.index%4 in [1,2]) ? 'right' : 'left',
                  'bgPos': (loop.index%4 in [1,2]) ? 'left' : 'right ',
                  'gaLabel':'news_' ~ news.news_date|date('Ymd'),
                  'mobileSize':'12'
          } %}
      {% endfor %}
    {% endif %}
    </div>
  </section>
</section>
{% endblock %}
