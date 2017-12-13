{% extends "base.php" %}

{% block header_css %}
<link rel="stylesheet" type="text/css" href="../../css/product-detail.css">
{% endblock %}

{% block header_js %}
<script src="../../js/product-detail.js"></script>
{% endblock %}

{% block main_content %}
  {% include 'header.php' %}

  <section class="product-detail-menu-container">
    <div class="product-detail-item-container">
      <div class="product-detail-item-row row">
        <div class="row-height js-select" data-select-target-index="{{ ('product-detail.' ~ target ~ '.item')|trans }}" data-select-target-class="product-detail-item-selected">
          <div class="product-detail-item dropdown col-md-3 col-md-height">
            <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">{{('products.product-type.0')|trans|raw|nl2br}}</span>
            <ul class="product-detail-item-dropdown-menu dropdown-menu js-select" data-select-target-index="{{ ('product-detail.' ~ target ~ '.menu-item-0')|trans }}" data-select-target-class="product-detail-item-dropdown-item-selected">
              <li class="product-detail-item-dropdown-item">
                <div>
                  <a data-ga-label="product_qi_premium_nutrient_herbal_essence" class="ga-click-tracking" href="../product-detail-qi-premium-nutrient-herbal-essence/">
                    <img src="../../img/product-detail/qi-premium-nutrient-herbal-essence.png" alt="Premium Nutrients For Better Health" class="product-detail-item-dropdown-image">
                    <p lang="{{locale}}" class="product-detail-item-dropdown-item-text">{{('product-detail.qi-premium-nutrient-herbal-essence.title')|trans }}</p>
                  </a>
                </div>
              </li>
              <li class="product-detail-item-dropdown-item">
                <div>
                  <a data-ga-label="product_royal_lingzhi_plus" class="ga-click-tracking" href="../product-detail-royal-lingzhi-plus/">
                    <img src="../../img/product-detail/royal-lingzhi-plus.png" alt="Royal Lingzhi Plus" class="product-detail-item-dropdown-image">
                    <p lang="{{locale}}" class="product-detail-item-dropdown-item-text">{{('product-detail.royal-lingzhi-plus.title')|trans }}</p>
                  </a>
                </div>
              </li>
              <li class="product-detail-item-dropdown-item">
                <div>
                  <a data-ga-label="dried_tangerine_peel_puer_tea" class="ga-click-tracking" href="../product-detail-dried-tangerine-peel-puer-tea/">
                    <img src="../../img/product-detail/dried-tangerine-peel-puer-tea.png" alt="Dried Tangerine Peel Pu'er Tea" class="product-detail-item-dropdown-image">
                    <p lang="{{locale}}" class="product-detail-item-dropdown-item-text">{{('product-detail.dried-tangerine-peel-puer-tea.title')|trans }}</p>
                  </a>
                </div>
              </li>
              <li class="product-detail-item-dropdown-item">
                <div>
                  <a data-ga-label="b_circulation_aid" class="ga-click-tracking" href="../product-detail-b-circulation-aid/">
                    <img src="../../img/product-detail/b-circulation-aid.png" alt="D Circulation Aid" class="product-detail-item-dropdown-image">
                    <p lang="{{locale}}" class="product-detail-item-dropdown-item-text">{{('product-detail.b-circulation-aid.title')|trans }}</p>
                  </a>
                </div>
              </li>
              <li class="product-detail-item-dropdown-item">
                <div>
                  <a data-ga-label="schisandra_plus" class="ga-click-tracking" href="../product-detail-schisandra-plus/">
                    <img src="../../img/product-detail/schisandra-plus.png" alt="schisandra plus" class="product-detail-item-dropdown-image">
                    <p lang="{{locale}}" class="product-detail-item-dropdown-item-text">{{('product-detail.schisandra-plus.title')|trans }}</p>
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <div class="product-detail-item col-md-3 col-md-height">
            <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">{{('products.product-type.1')|trans|raw|nl2br }}</span>
            <ul class="product-detail-item-dropdown-menu dropdown-menu js-select" data-select-target-index="{{ ('product-detail.' ~ target ~ '.menu-item-1')|trans }}" data-select-target-class="product-detail-item-dropdown-item-selected">
              <li class="product-detail-item-dropdown-item">
                <div>
                  <a data-ga-label="phytocare-toothpaste-twin-pack" class="ga-click-tracking" href="../product-detail-phytocare-toothpaste-twin-pack/">
                    <img src="../../img/product-detail/phytocare-toothpaste-twin-pack.png" alt="Phytocare Personal Care" class="product-detail-item-dropdown-image">
                    <p lang="{{locale}}" class="product-detail-item-dropdown-item-text">{{('product-detail.phytocare-toothpaste-twin-pack.title')|trans}}</p>
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <div class="product-detail-item col-md-3 col-md-height">
            <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">{{('products.product-type.2')|trans|raw|nl2br }}</span>
            <ul class="product-detail-item-dropdown-menu dropdown-menu js-select" data-select-target-index="{{ ('product-detail.' ~ target ~ '.menu-item-2')|trans }}" data-select-target-class="product-detail-item-dropdown-item-selected">
              <li class="product-detail-item-dropdown-item">
                <div>
                  <a data-ga-label="beautrio_series" class="ga-click-tracking" href="../product-detail-beautrio-series/">
                    <img src="../../img/product-detail/beautrio-series.png" alt="Phytocare Personal Care" class="product-detail-item-dropdown-image">
                    <p lang="{{locale}}" class="product-detail-item-dropdown-item-text">
                    {{('product-detail.beautrio-series.title')|trans}}</p>
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <div class="product-detail-item col-md-3 col-md-height">
            <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">{{('products.product-type.3')|trans|raw|nl2br }}</span>
            <ul class="product-detail-item-dropdown-menu dropdown-menu js-select" data-select-target-index="{{ ('product-detail.' ~ target ~ '.menu-item-3')|trans }}" data-select-target-class="product-detail-item-dropdown-item-selected">
              <li class="product-detail-item-dropdown-item">
                <div>
                  <a data-ga-label="vitabelle_hydrating_lotion" class="ga-click-tracking" href="../product-detail-vitabelle-hydrating-lotion/">
                    <img src="../../img/product-detail/vitabelle-hydrating-lotion.png" alt="Phytocare Personal Care" class="product-detail-item-dropdown-image">
                    <p lang="{{locale}}" class="product-detail-item-dropdown-item-text">{{('product-detail.vitabelle-hydrating-lotion.title')|trans}}</p>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  {% include 'product-detail-' ~ template ~ '.php' %}
{% endblock %}
