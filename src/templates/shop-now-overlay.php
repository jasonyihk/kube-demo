<section id="shop-now-overlay" class="container">
  <div class="overlay-modal modal fade shop-now-overlay" tabindex="-1" role="dialog" aria-labelledby="shop-now">
    <div class="overlay-modal-dialog modal-dialog" role="document">
      <button type="button" class="close-button-container close" data-dismiss="modal" aria-label="Close">
        <span class="close-button" aria-hidden="true"></span>
      </button>
      <div class="overlay-modal-content modal-content clearfix row">
        <div class="col-md-6 no-padding">
          <div class="vertical-center-container">
            <div class="shop-now-text-container vertical-center">
              <p class="subtitle">{{ 'shop-now-overlay.title'|trans }}</p>
              <p class="content">{{ 'shop-now-overlay.input'|trans }}</p>
              <form class="overlay-form">
                <input value="{{ referrer }}" data-ga-label="user_name" class="ga-select-tracking input-field form-control" type="text" name="shop-now-username" placeholder="{{ 'shop-now-overlay.username'|trans }}" data-url="{{ eWorkplace_url }}/{{ 'eWorkplace_lang'|trans }}/eshop" data-rule-required="true" data-msg-required="{{ 'shop-now-overlay.blankusername'|trans }}">
                <label for="shop-now-username">{{ eWorkplace_url }}/eshop</label>
              </form>
              <div id="shop-now-username-error" class="form-error-container"></div>
              <button data-ga-label="go_shop" class="ga-click-tracking btn button red dia-button">{{ 'shop-now-overlay.go'|trans }}</button>
              <p class="content">
                {{ 'shop-now-overlay.note'|trans|raw }}<a data-ga-label="no_user_name" class="ga-click-tracking overlay-article-link" href="{{igi_url}}/{{ 'contact-us.url'|trans }}" target="_blank">{{ 'shop-now-overlay.click'|trans|raw }}</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 no-padding">
          <div class="vertical-center-container">
            <div class="shop-now-image-container vertical-center">
              <img src="../../img/prod1.png" class="img-responsive" style="position:absolute">
              <img src="../../img/join-now.png" class="img-responsive" style="visibility:hidden">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
