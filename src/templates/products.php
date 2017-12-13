{% extends "base.php" %}


{% block header_css %}
<link rel="stylesheet" type="text/css" href="../../css/products-style.css">
{% endblock %}

{% block main_content %}
<section id="products">
  <section class="banner background-image" data-background-image-src="../../img/pd-header.jpg">
    {% include 'header.php' %}
    <div class="row">
      {% include 'component/banner.php' with {
        'title':'products.banner-title',
        'subtitle':'products.banner-subtitle',
        'hyperLink':'product-detail-qi-premium-nutrient-herbal-essence',
        'gaLabel':'more_product'
      } %}
      <div class="scroll-indicator">
        <span></span>
      </div>
      <a href="../health-concept/" class="previous-button"></a>
      <a href="../business-opportunity/" class="next-button"></a>
    </div>
  </section>

  <section class="featuer-product" style="background-color:#fefdf9;">
    <section class="container">
      <div class="row">
        <div class="swiper-desktop feature-product" data-swiper-wrapper=".product-slide-wrapper" data-swiper-slide=".product-main-container" data-swiper-pagination=".product-slide-pager-container" data-swiper-prev-button=".product-slide-previous-button" data-swiper-next-button=".product-slide-next-button" data-swiper-direction="horizontal" data-swiper-autoplay="30000">
            <div class="product-slide-wrapper">
              <div class="product-main-container brand-container">
                <div class="horizontal-half-container-right product-special-paddingr">
                  <div class="vertical-center-container">
                    <div class="vertical-center">
                      <img src="../../img/product-detail/royal-lingzhi-plus.png" class="responsive-image product-photo-large">
                    </div>
                  </div>
                </div>
                <div class="horizontal-half-container-right product-special-paddingl">
                  <div class="vertical-center-container">
                    <div class="vertical-center">
                      <p class="product-title">{{ ('product-detail.royal-lingzhi-plus.title')|trans }}</p>
                      <p class="product-subtitle">{{ ('product-detail.royal-lingzhi-plus.subtitle')|trans }}</p>
                      <p class="product-description">{{ ('product-detail.royal-lingzhi-plus.text')|trans|raw }}</p>
                      <p class="product-price">
                        <span class="product-price-prefix">{{ 'products.retailprice'|trans|nl2br }}</span>
                        <span class="product-price-value">{{ ('product-detail.royal-lingzhi-plus.price')|trans}}</span>
                        <br>
                        <span class="product-price-prefix">{{ 'products.memberprice'|trans|nl2br }}</span>
                        <span class="product-price-value">{{ ('product-detail.royal-lingzhi-plus.mprice')|trans }}</span>
                      </p>
                      <div class="button-center-container">
                        <a data-ga-label="more_product_royal_lingzhi_plus" class="ga-click-tracking" href="../product-detail-royal-lingzhi-plus/">
                          <button class="btn button white">{{ 'button.learn-more'|trans|nl2br }}</button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-main-container brand-container">
                <div class="horizontal-half-container-right product-special-paddingr">
                  <div class="vertical-center-container">
                    <div class="vertical-center">
                      <img src="../../img/product-detail/qi-premium-nutrient-herbal-essence.png" class="responsive-image product-photo-large">
                    </div>
                  </div>
                </div>
                <div class="horizontal-half-container-right product-special-paddingl">
                  <div class="vertical-center-container">
                    <div class="vertical-center">
                      <p class="product-title">{{ ('product-detail.qi-premium-nutrient-herbal-essence.title')|trans }}</p>
                      <p class="product-subtitle">{{ ('product-detail.qi-premium-nutrient-herbal-essence.subtitle')|trans }}</p>
                      <p class="product-description">{{ ('product-detail.qi-premium-nutrient-herbal-essence.text')|trans|raw }}</p>
                      <p class="product-price">
                        <span class="product-price-prefix">{{ 'products.retailprice'|trans|nl2br }}</span>
                        <span class="product-price-value">{{('product-detail.qi-premium-nutrient-herbal-essence.price')|trans }}</span>
                        <br>
                        <span class="product-price-prefix">{{ 'products.memberprice'|trans|nl2br }}</span>
                        <span class="product-price-value">{{('product-detail.qi-premium-nutrient-herbal-essence.mprice')|trans }}</span>
                      </p>
                      <div class="button-center-container">
                        <a data-ga-label="more_premium_nutrients_for_better_health" class="ga-click-tracking" href="../product-detail-qi-premium-nutrient-herbal-essence/">
                          <button class="btn button white">{{ 'button.learn-more'|trans|nl2br }}</button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a data-ga-label="prviouus_product" class="product-slide-previous-button previous-button hidden-xs hidden-sm ga-click-tracking"></a>
            <a data-ga-label="next_product" class="product-slide-next-button next-button hidden-xs hidden-sm ga-click-tracking"></a>
            <div class="product-slide-pager-container hidden-xs hidden-sm"></div>
        </div>
      </div>
    </section>
  </section>

  <section class="normal-product">
    <div class="product-row-container row two-color">
      <div class="container">
        {% include 'component/product-list.php' with {
          'title':'product-detail.b-circulation-aid.title',
          'subtitle':'product-detail.b-circulation-aid.subtitle',
          'url':'../product-detail-b-circulation-aid/',
          'imgURL':'../../img/product-detail/b-circulation-aid.png',
          'price':'product-detail.b-circulation-aid.price',
          'mprice':'product-detail.b-circulation-aid.mprice',
          'right':'true',
        } %}
        {% include 'component/product-list.php' with {
          'title':'product-detail.schisandra-plus.title',
          'subtitle':'product-detail.schisandra-plus.subtitle',
          'url':'../product-detail-schisandra-plus/',
          'imgURL':'../../img/product-detail/schisandra-plus.png',
          'price':'product-detail.schisandra-plus.price',
          'mprice':'product-detail.schisandra-plus.mprice',
        } %}
      </div>
    </div>
    <div class="product-row-container row anti-two-color">
      <div class="container">
        {% include 'component/product-list.php' with {
          'title':'product-detail.phytocare-toothpaste-twin-pack.title',
          'subtitle':'product-detail.phytocare-toothpaste-twin-pack.subtitle',
          'url':'../product-detail-phytocare-toothpaste-twin-pack/',
          'imgURL':'../../img/product-detail/phytocare-toothpaste-twin-pack.png',
          'price':'product-detail.phytocare-toothpaste-twin-pack.price',
          'mprice':'product-detail.phytocare-toothpaste-twin-pack.mprice',
          'push':'true',
        } %}
        {% include 'component/product-list.php' with {
          'title':'product-detail.dried-tangerine-peel-puer-tea.title',
          'subtitle':'product-detail.dried-tangerine-peel-puer-tea.subtitle',
          'url':'../product-detail-dried-tangerine-peel-puer-tea/',
          'imgURL':'../../img/product-detail/dried-tangerine-peel-puer-tea.png',
          'price':'product-detail.dried-tangerine-peel-puer-tea.price',
          'mprice':'product-detail.dried-tangerine-peel-puer-tea.mprice',
          'pull':'true',
          'right':'true',
        } %}
      </div>
    </div>
    <div class="product-row-container row two-color">
      <div class="container">
        {% include 'component/product-list.php' with {
          'title':'product-detail.beautrio-series.title',
          'subtitle':'product-detail.beautrio-series.subtitle',
          'url':'../product-detail-beautrio-series/',
          'imgURL':'../../img/product-detail/beautrio-series.png',
          'noprice':'true',
          'right':'true',
        } %}
        {% include 'component/product-list.php' with {
          'title':'product-detail.vitabelle-hydrating-lotion.title',
          'subtitle':'product-detail.vitabelle-hydrating-lotion.subtitle',
          'url':'../product-detail-vitabelle-hydrating-lotion/',
          'imgURL':'../../img/product-detail/vitabelle-hydrating-lotion.png',
          'price':'product-detail.vitabelle-hydrating-lotion.price',
          'mprice':'product-detail.vitabelle-hydrating-lotion.mprice',
        } %}
      </div>
    </div>

  </section>
  <!--<div class="banner-note-container hidden-md hidden-lg">
    <p class="banner-note">
      Euromonitor International Limited; Herbal % Traditional Products;<br> % retail value share, 2015-2016 data. CH2017ed.
    </p>
  </div>-->
</section>
{% endblock %}
