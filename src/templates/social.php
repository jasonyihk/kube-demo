<div class="container">
  <div class="overlay-modal modal fade share-overlay" role="dialog" aria-labelledby="share">
    <div class="overlay-modal-dialog modal-dialog" role="document">
      <button  data-ga-label="quit" type="button" class="close-button-container close ga-click-tracking" data-dismiss="modal" aria-label="Close">
        <span class="close-button" aria-hidden="true"></span>
      </button>
      <div class="overlay-modal-content modal-content clearfix">
        <p class="overlay-article-title">{{ 'share'|trans }}</p>
        <div class="row">
          <div class="col-md-3">
            <a class="ga-click-tracking" data-ga-label="share_fb" href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank">
              <p class="overlay-article-text">
                <span class="icon social-icon social-overlay-icon-facebook"></span>
                <span class="share-social-media-text">Facebook</span>
              </p>
            </a>
          </div>
          <div class="col-md-3">
            <a class="ga-click-tracking" data-ga-label="share_mail" href="mailto:?body=">
              <p class="overlay-article-text">
                <span class="icon social-icon social-overlay-icon-mail"></span>
                <span class="share-social-media-text">{{ 'mail'|trans }}</span>
              </p>
            </a>
          </div>
          <div class="col-md-3">
            <a class="ga-click-tracking" data-ga-label="share_tt" href="https://twitter.com/intent/tweet?text=" target="_blank">
              <p class="overlay-article-text">
                <span class="icon social-icon social-overlay-icon-twitter"></span>
                <span class="share-social-media-text">Twitter</span>
              </p>
            </a>
          </div>
          <div class="col-md-3">
            <p class="overlay-article-text">
              <span class="icon social-icon social-overlay-icon-copy-link"></span>
              <span data-ga-label="share_" class="share-social-media-text ga-click-tracking">{{ 'copylink'|trans }}</span>
            </p>
          </div>
          <div class="col-md-3 col-md-offset-9">
            <div class="copy-link-popup-container">
              <p class="copy-link-popup-text">{{ 'link-copied'|trans }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="social-icon-container">
    <a class="icon social-icon social-icon-share ga-click-tracking" data-ga-label="share" data-toggle="modal" data-target=".share-overlay"></a>
  </div>
</div>
