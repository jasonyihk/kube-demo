<!-- {{ ('product-detail.' ~ target ~ '.subtext')|trans|raw|nl2br }}-->
<section class="product-detail-container clearfix" id="product-detail-normal">
  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <p lang="{{locale}}" class="product-title">{{ ('product-detail.' ~ target ~ '.title')|trans|raw|nl2br  }}</p>
        <p class="product-subtitle">{{ ('product-detail.' ~ target ~ '.subtitle')|trans }}</p>
        <p class="content">{{ ('product-detail.' ~ target ~ '.text')|trans|raw|nl2br }}</p>

      </div>
      <div class="col-md-6 images">
         <img src="../../img/product-detail/{{ target }}.png" alt="{{ ('product-detail.' ~ target ~ '.title')|trans }}" class="product-detail-image responsive-image">
         <p class="product-price">{{ 'products.retailprice'|trans|nl2br }} {{ ('product-detail.' ~ target ~ '.price')|trans|raw }}</p>
         <p class="product-price">{{ 'products.memberprice'|trans|nl2br }} {{ ('product-detail.' ~ target ~ '.mprice')|trans|raw }}</p>
         <span class="product-tax-remark">{{ 'products.tax-remark'|trans }}</span>
         <button data-ga-label="shop_now_{{ ('product-detail.' ~ target ~ '.ga')}}" class="ga-click-tracking btn button red" data-toggle="modal" data-target=".shop-now-overlay">
           {{ ('button.shop-now')|trans }}
         </button>
      </div>
    </div>
    <ul class="nav nav-tabs responsive" id="myTab">
      <li class="product-desc active product-tab"><a data-toggle="tab" href="#highlights" id="highlight-tab">{{ ('product-detail.description')|trans }}</a></li>
      <li class="product-desc product-tab"><a data-toggle="tab" href="#ingredients" id="ingredients-tab">{{ ('product-detail.ingredients')|trans }}</a></li>
      <li class="product-desc product-tab"><a data-toggle="tab" href="#dou" id="dou-tab">{{ ('product-detail.directions_for_use')|trans }}</a></li>
    </ul>

    <div class="tab-content responsive">
      <div class="tab-pane active" id="highlights">
        <p class="product-info-title">
          {{ ('product-detail.highlights')|trans }}
        </p>
        {{ ('product-detail.' ~ target ~ '.subtext')|trans|raw|nl2br }}
        {% if ('product-detail.' ~ target ~ '.NPN')|trans != 'product-detail.' ~ target ~ '.NPN' %}
          <p class="product-info-title">
            {{ ('product-detail.NPN')|trans }}
          </p>
          {{ ('product-detail.' ~ target ~ '.NPN')|trans|raw|nl2br }}
        {% endif %}
        <p class="product-info-title">
          {{ ('product-detail.QA')|trans }}
        </p>
        {{ ('product-detail.' ~ target ~ '.QA_desc')|trans|raw|nl2br }}
        <p class="product-info-title">
          {{ ('product-detail.size')|trans }}
        </p>
        <ul class="product-description stroke">
          <li>{{ ('product-detail.' ~ target ~ '.size')|trans|raw|nl2br }}</li>
        </ul>
      </div>
      <div class="tab-pane" id="ingredients">
        {% if (target!='vitabelle-hydrating-lotion') and (target!='phytocare-toothpaste-twin-pack') %}
        <p class="product-info-title">
          {{ ('product-detail.' ~ target ~ '.contain')|trans|raw|nl2br  }}
        </p>
        <p class="product-info-title">
          {{ ('product-detail.medicinal_ingredients')|trans }}
        </p>
        <div class="content">
          {{ ('product-detail.' ~ target ~ '.ingredients_table')|trans|raw|nl2br  }}
        </div>
        <p class="product-info-title">
          {{ ('product-detail.non-medicinal_ingredients')|trans }}
        </p>
        <p class="content">
          {{ ('product-detail.' ~ target ~ '.nonmedicinal_ingredients')|trans|raw|nl2br  }}
        </p>
        {% else %}
        <div class="content ingredients-content">
          {{ ('product-detail.' ~ target ~ '.ingredients')|trans|raw|nl2br  }}
        </div>
        {% endif %}
      </div>
      <div class="tab-pane" id="dou">
        <p class="content">{{ ('product-detail.' ~ target ~ '.directions_for_use')|trans|nl2br }}</p>
      </div>
    </div>
  </div>
</section>
<script>
(function($) {
    fakewaffle.responsiveTabs(['xs', 'sm']);
})(jQuery);
</script>
