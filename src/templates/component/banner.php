<section class="banner">
  <div class="containers col-md-12">
    <div class="center">
      <p class="title">{{ title|trans|raw|nl2br }}</p>
      <p class="subtitle">{{ subtitle|trans|nl2br }}</p>
      {% if hyperLink != '' %}
      <a data-ga-label="{{ ga_label }}" class="ga-click-tracking" href="../{{ hyperLink }}/">
        <button class="btn button red">{{ 'button.tell-me-more'|trans|nl2br }}</button>
      </a>
      {% endif %}
    </div>
  </div>
</section>
