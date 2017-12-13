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

  <section class="news-container container-fluid news-section">
    <div class="row news">
      {% include 'component/news-intro.php' with {
        'newsURL':'../news-detail-lkk-health-products-group-acquires-landmark-office-building-at-20-fenchurch-street-in-london-for-gbp1.2825-billion/',
        'date':'news-detail.lkk-health-products-group-acquires-landmark-office-building-at-20-fenchurch-street-in-london-for-gbp1.2825-billion.date-number',
        'desc':'news-detail.lkk-health-products-group-acquires-landmark-office-building-at-20-fenchurch-street-in-london-for-gbp1.2825-billion.title',
        'imgURL':'../../img/news-detail/lkk-health-products-group-acquires-landmark-office-building-at-20-fenchurch-street-in-london-for-gbp1.2825-billion/02_360x405.jpg',
        'bgColor':'#9AB57D',
        'contentPos':'right',
        'bgPos':'left',
        'gaLabel':'news_20170727',
        'mobileSize':'12'
      } %}
      {% include 'component/news-intro.php' with {
        'newsURL':'../news-detail-infinitus-leads-chinese-herbal-health-product-brands-with-a-brand-value-of-rmb-65.869-billion/',
        'date':'news-detail.infinitus-leads-chinese-herbal-health-product-brands-with-a-brand-value-of-rmb-65.869-billion.date-number',
        'desc':'news-detail.infinitus-leads-chinese-herbal-health-product-brands-with-a-brand-value-of-rmb-65.869-billion.title',
        'imgURL':'../../img/news-detail/infinitus-leads-chinese-herbal-health-product-brands-with-a-brand-value-of-rmb-65.869-billion/01_360x405.jpg',
        'bgColor':'#D9BA8C',
        'contentPos':'right',
        'bgPos':'left',
        'gaLabel':'news_20170727',
        'mobileSize':'12'
      } %}

      {% include 'component/news-intro.php' with {
        'newsURL':'../news-detail-infinitus-cooperates-with-nobel-laureate-to-advance-immune-regulation-with-tcm/',
        'date':'news-detail.infinitus-cooperates-with-nobel-laureate-to-advance-immune-regulation-with-tcm.date-number',
        'desc':'news-detail.infinitus-cooperates-with-nobel-laureate-to-advance-immune-regulation-with-tcm.title',
        'imgURL':'../../img/ph-bot1.png',
        'bgColor':'#BE2A28',
        'contentPos':'left',
        'bgPos':'right',
        'gaLabel':'news_20170308',
        'mobileSize':'12'
      } %}
      {% include 'component/news-intro.php' with {
        'newsURL':'../news-detail-shanghai-corporate-avenue-3-officially-named-infinitus-tower/',
        'date':'news-detail.shanghai-corporate-avenue-3-officially-named-infinitus-tower.date-number',
        'desc':'news-detail.shanghai-corporate-avenue-3-officially-named-infinitus-tower.title',
        'imgURL':'../../img/News-02.png',
        'bgColor':'#FFCF66',
        'contentPos':'left',
        'bgPos':'right',
        'gaLabel':'news_20161217',
        'mobileSize':'12'
      } %}

      {% include 'component/news-intro.php' with {
        'newsURL':'../news-detail-guangzhou-infinitus-plaza-designed-by-zaha-hadid-breaks-ground/',
        'date':'news-detail.guangzhou-infinitus-plaza-designed-by-zaha-hadid-breaks-ground.date-number',
        'desc':'news-detail.guangzhou-infinitus-plaza-designed-by-zaha-hadid-breaks-ground.title',
        'imgURL':'../../img/news4.png',
        'bgColor':'#9AB57D',
        'contentPos':'right',
        'bgPos':'left',
        'gaLabel':'news_20161115',
        'mobileSize':'12'
      } %}
      {% include 'component/news-intro.php' with {
        'newsURL':'../news-detail-infinitus-products-reawarded-quality-labels-by-monde-selection/',
        'date':'news-detail.infinitus-products-reawarded-quality-labels-by-monde-selection.date-number',
        'desc':'news-detail.infinitus-products-reawarded-quality-labels-by-monde-selection.title',
        'imgURL':'../../img/ph-bot3.png',
        'bgColor':'#D9BA8C',
        'contentPos':'right',
        'bgPos':'left',
        'gaLabel':'news_20160530',
        'mobileSize':'12'
      } %}

      {% include 'component/news-intro.php' with {
        'newsURL':'../news-detail-cambridge-infinitus-research-center-officially-founded/',
        'date':'news-detail.cambridge-infinitus-research-center-officially-founded.date-number',
        'desc':'news-detail.cambridge-infinitus-research-center-officially-founded.title',
        'imgURL':'../../img/news5.png',
        'bgColor':'#BE2A28',
        'contentPos':'left',
        'bgPos':'right',
        'gaLabel':'news_20150905',
        'mobileSize':'12'
      } %}
      {% include 'component/news-intro.php' with {
        'newsURL':'../news-detail-infinitus-honoured-with-internationally-renowned-quality-awards-by-monde-selection/',
        'date':'news-detail.infinitus-honoured-with-internationally-renowned-quality-awards-by-monde-selection.date-number',
        'desc':'news-detail.infinitus-honoured-with-internationally-renowned-quality-awards-by-monde-selection.title',
        'imgURL':'../../img/news6.png',
        'bgColor':'#FFCF66',
        'contentPos':'left',
        'bgPos':'right',
        'gaLabel':'news_20150604',
        'mobileSize':'12'
      } %}
    </div>
  </section>
</section>
{% endblock %}
