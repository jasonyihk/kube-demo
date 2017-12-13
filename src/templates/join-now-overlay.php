<section id="join-now-overlay" class="container">
  <div class="overlay-modal modal fade join-now-overlay" tabindex="-1" role="dialog" aria-labelledby="join-now">
    <div class="overlay-modal-dialog modal-dialog" role="document">
      <button type="button" class="close-button-container close" data-dismiss="modal" aria-label="Close">
        <span class="close-button" aria-hidden="true"></span>
      </button>
      <div class="overlay-modal-content modal-content clearfix row">
        <div class="col-md-6 no-padding">
          <div class="vertical-center-container">
            <div class="join-now-text-container vertical-center">
              <p class="subtitle">{{ 'join-now-overlay.title'|trans }}</p>
              <p class="content">{{ 'join-now-overlay.input'|trans }}</p>
              <form class="overlay-form">
                <input value="{{ referrer }}" data-ga-label="user_name" class="ga-select-tracking input-field form-control" type="text" name="join-now-username" placeholder="{{ 'join-now-overlay.username'|trans }}" data-url="{{ eWorkplace_url }}/{{ 'eWorkplace_lang'|trans }}/#join" data-rule-required="true" data-msg-required="{{ 'join-now-overlay.blankusername'|trans }}">
                <label for="join-now-username">{{ eWorkplace_url }}/#join</label>
              </form>
              <div id="join-now-username-error" class="form-error-container"></div>
              <button data-ga-label="go_shop" class="ga-click-tracking btn button red">{{ 'join-now-overlay.go'|trans }}</button>
              <p class="content">{{ 'join-now-overlay.note'|trans|raw }}<a data-ga-label="no_user_name" class="ga-click-tracking overlay-article-link" href="{{igi_url}}/{{ 'contact-us.url'|trans }}" target="_blank">{{ 'join-now-overlay.click'|trans|raw }}</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 hidden-xs hidden-sm no-padding">
          <div class="vertical-center-container">
            <div class="vertical-center">
              <img src="../../img/join-now.png" class="responsive-image">
            </div>
          </div>
        </div>
        <div class="join-now-image-container visible-xs-block visible-sm-block">
          <img src="../../img/join-now.png" class="responsive-image">
        </div>
      </div>
    </div>
  </div>
</section>
