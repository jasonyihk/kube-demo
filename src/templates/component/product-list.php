
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 product-container {% if push == 'true' %} col-md-push-6 {% endif %} {% if pull == 'true' %} col-md-pull-6 {% endif %}">
      <a data-ga-label="more_schisandra_plus" class="ga-click-tracking" href="{{url}}">
        <div class="horizontal-half-container-left product-res-container">
          <div class="vertical-center-container">
            <div class="product-text-container vertical-center">
              <p class="product-name">{{ title|trans }}</p>
              <p class="product-subtitle">{{subtitle|trans }}
              </p>
            </div>
            <div class="product-price-container vertical-center">
              {% if noprice != 'true' %}
              <p class="product-price">
                <span class="product-price-prefix">{{ 'products.retailprice'|trans|nl2br }}</span>
                <span class="product-price-value">{{ price|trans|nl2br }}</span>
                <span class="product-price-prefix">{{ 'products.memberprice'|trans|nl2br }}</span>
                <span class="product-price-value">{{ mprice|trans }}</span>
              </p>
              {% endif %}
            </div>
          </div>
        </div>
        <div class="horizontal-half-container-left product-special-paddingr">
          <div class="product-image-container">
            <div class="vertical-center-container">
              <div class="vertical-center">
                <img src="{{imgURL}}" class="responsive-image product-img">
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
