<section id="product-detail-slide">
  <section class="product-detail-container">
    <div class="container">
      <div class='row'>
        <div class="row-height">
          <div class="col-md-6 col-md-height col-md-push-6 col-md-top">
            <img src="../../img/product-detail/beautrio-series.png" alt="" class="product-detail-image responsive-image">
          </div>
          <div class="col-md-6 col-md-height col-md-pull-6 col-md-top">
            <p lang="{{locale}}" class="product-title">{{('product-detail.beautrio-series.title')|trans}}</p>
            <p class="product-subtitle">{{('product-detail.beautrio-series.subtitle')|trans}}</p>
            <p class="product-description">{{('product-detail.beautrio-series.text')|trans|raw|nl2br}}</p>

          </div>
        </div>
      </div>
      <div class="product-detail-slide-button-container container-fluid text-center slide-section">
        <div class="row">
          <div class="row-height">
            <div class="col-md-2 col-md-height product-col">
              <div class="product-detail-slide-button product-detail-slide-button-selected subproduct-list">
                <img src="../../img/product-detail/bs-1.png" alt="" class="hidden-xs hidden-sm responsive-image">
                <p class="product-title">{{('product-detail.beautrio-series.sub-product1.title')|trans|nl2br}}</p>
              <img src="../../img/arrow-down.png" alt="" class="down-arrow" >
              </div>
            </div>
            <div class="col-md-2 col-md-height product-col">
              <div class="product-detail-slide-button subproduct-list">
                <img src="../../img/product-detail/bs-2.png" alt="" class="hidden-xs hidden-sm responsive-image">
                <p class="product-title">{{('product-detail.beautrio-series.sub-product2.title')|trans|nl2br}}</p>
                <img src="../../img/arrow-down.png" alt="" class="down-arrow">
              </div>
            </div>
            <div class="col-md-2 col-md-height product-col">
              <div class="product-detail-slide-button subproduct-list">
                <img src="../../img/product-detail/bs-3.png" alt="" class="hidden-xs hidden-sm responsive-image">
                <p class="product-title">{{('product-detail.beautrio-series.sub-product3.title')|trans|nl2br}}</p>
                <img src="../../img/arrow-down.png" alt="" class="down-arrow">
              </div>
            </div>
            <div class="col-md-2 col-md-height product-col">
              <div class="product-detail-slide-button subproduct-list">
                <img src="../../img/product-detail/bs-4.png" alt="" class="hidden-xs hidden-sm responsive-image">
                <p class="product-title">{{('product-detail.beautrio-series.sub-product4.title')|trans|nl2br}}</p>
                <img src="../../img/arrow-down.png" alt="" class="down-arrow">
              </div>
            </div>
            <div class="col-md-2 col-md-height product-col">
              <div class="product-detail-slide-button subproduct-list">
                <img src="../../img/product-detail/bs-5.png" alt="" class="hidden-xs hidden-sm responsive-image">
                <p class="product-title">{{('product-detail.beautrio-series.sub-product5.title')|trans|nl2br}}</p>
                <img src="../../img/arrow-down.png" alt="" class="down-arrow">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="product-detail-slides-container subproduct-detail-container image-section">
    <div class="container product-detail-slide-container product-detail-slide-container-selected">
      <div class='row'>
        <div class="row-height">
          <div class="col-md-6 col-md-height col-md-top text-center">
            <img src="../../img/product-detail/bs-1.png" alt="" class="product-detail-image responsive-image">
            <p class="product-price">{{ 'products.retailprice'|trans|nl2br }} {{ ('product-detail.' ~ target ~ '.sub-product1.price')|trans }}</p>
            <p class="product-price">{{ 'products.memberprice'|trans|nl2br }} {{ ('product-detail.' ~ target ~ '.sub-product1.mprice')|trans }}</p>
            <span class="product-tax-remark">{{ 'products.tax-remark'|trans }}</span>
            <button data-ga-label="shop_now_beautrio_essentials_refreshing_cleanser"  class="ga-click-tracking btn button red" data-toggle="modal" data-target=".shop-now-overlay">
              {{ ('button.shop-now')|trans }}
            </button>
          </div>
          <div class="col-md-6 col-md-height col-md-top product-description">{{('product-detail.beautrio-series.sub-product1.subtext')|trans|raw|nl2br}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="product-detail-slides-container subproduct-detail-container res-bg-color image-section">
    <div class="container product-detail-slide-container">
      <div class='row'>
        <div class="row-height">
          <div class="col-md-6 col-md-height col-md-top text-center">
            <img src="../../img/product-detail/bs-2.png" alt="" class="product-detail-image responsive-image">
            <p class="product-price">{{ 'products.retailprice'|trans|nl2br }} {{ ('product-detail.' ~ target ~ '.sub-product2.price')|trans }}</p>
            <p class="product-price">{{ 'products.memberprice'|trans|nl2br }} {{ ('product-detail.' ~ target ~ '.sub-product2.mprice')|trans }}</p>
            <span class="product-tax-remark">{{ 'products.tax-remark'|trans }}</span>
            <button data-ga-label="shop_now_beautrio_essentials_refreshing_toner" class="ga-click-tracking btn button red" data-toggle="modal" data-target=".shop-now-overlay">
              {{ ('button.shop-now')|trans }}
            </button>
          </div>
          <div class="col-md-6 col-md-height col-md-top product-description">
              {{('product-detail.beautrio-series.sub-product2.subtext')|trans|raw|nl2br}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="product-detail-slides-container subproduct-detail-container image-section">
    <div class="container product-detail-slide-container">
      <div class='row'>
        <div class="row-height">
          <div class="col-md-6 col-md-height col-md-top text-center">
            <img src="../../img/product-detail/bs-3.png" alt="" class="product-detail-image responsive-image">
            <p class="product-price">{{ 'products.retailprice'|trans|nl2br }} {{ ('product-detail.' ~ target ~ '.sub-product3.price')|trans }}</p>
            <p class="product-price">{{ 'products.memberprice'|trans|nl2br }} {{ ('product-detail.' ~ target ~ '.sub-product3.mprice')|trans }}</p>
            <span class="product-tax-remark">{{ 'products.tax-remark'|trans }}</span>
            <button data-ga-label="shop_now_beautrio_essentials_essence"  class="ga-click-tracking btn button red" data-toggle="modal" data-target=".shop-now-overlay">
              {{ ('button.shop-now')|trans }}
            </button>
          </div>
          <div class="col-md-6 col-md-height col-md-top product-description">
              {{('product-detail.beautrio-series.sub-product3.subtext')|trans|raw|nl2br}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="product-detail-slides-container subproduct-detail-container res-bg-color image-section">
    <div class="container product-detail-slide-container">
      <div class='row'>
        <div class="row-height">
          <div class="col-md-6 col-md-height col-md-top text-center">
            <img src="../../img/product-detail/bs-4.png" alt="" class="product-detail-image responsive-image">
            <p class="product-price">{{ 'products.retailprice'|trans|nl2br }} {{ ('product-detail.' ~ target ~ '.sub-product4.price')|trans }}</p>
            <p class="product-price">{{ 'products.memberprice'|trans|nl2br }} {{ ('product-detail.' ~ target ~ '.sub-product4.mprice')|trans }}</p>
            <span class="product-tax-remark">{{ 'products.tax-remark'|trans }}</span>
            <button data-ga-label="shop_now_beautrio_essentials_refreshing_night_emulsion" class="ga-click-tracking btn button red" data-toggle="modal" data-target=".shop-now-overlay">
              {{ ('button.shop-now')|trans }}
            </button>
          </div>
          <div class="col-md-6 col-md-height col-md-top product-description">
              {{('product-detail.beautrio-series.sub-product4.subtext')|trans|raw|nl2br}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="product-detail-slides-container subproduct-detail-container image-section">
    <div class="container product-detail-slide-container">
      <div class='row'>
        <div class="row-height">
          <div class="col-md-6 col-md-height col-md-top text-center">
            <img src="../../img/product-detail/bs-5.png" alt="" class="product-detail-image responsive-image">
            <p class="product-price">{{ 'products.retailprice'|trans|nl2br }} {{ ('product-detail.' ~ target ~ '.sub-product5.price')|trans }}</p>
            <p class="product-price">{{ 'products.memberprice'|trans|nl2br }} {{ ('product-detail.' ~ target ~ '.sub-product5.mprice')|trans }}</p>
            <span class="product-tax-remark">{{ 'products.tax-remark'|trans }}</span>
            <button data-ga-label="shop_now_beautrio_essentials_eye_Cream" class="ga-click-tracking btn button red" data-toggle="modal" data-target=".shop-now-overlay">
              {{ ('button.shop-now')|trans }}
            </button>
          </div>
          <div class="col-md-6 col-md-height col-md-top product-description">
              {{('product-detail.beautrio-series.sub-product5.subtext')|trans|raw|nl2br}}
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
