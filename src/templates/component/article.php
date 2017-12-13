<section class="article container">
  <div class="row" style="background-color: {{bgColor}};">
    {% if contentPos=='right'%}
    <div class="col-md-6 no-padding">
      <div>
        <img src="{{imgURL}}" class="img-responsive">
      </div>
    </div>
    {% endif %}
    <div class="col-md-6 no-padding">
      <div class="contents">
        <p class="title">{{ title|trans|nl2br }}</p>
        <p class="content">{{ content|trans|raw }}</p>
        <a {% if(buttonLink) %} href="{{buttonLink}}" {% endif %} >
          {% if(noButton!=true) %}
            <button data-ga-label="{{gaLabel}}" class="ga-click-tracking btn button white" data-toggle="modal" {% if(dataTarget) %}data-target="{{dataTarget}}"{% endif %}>{{ button|trans }}</button>
          {% endif %}
        </a>
      </div>
    </div>
    {% if contentPos=='left'%}
    <div class="col-md-6 no-padding">
      <div>
        <img src="{{imgURL}}" class="img-responsive">
      </div>
    </div>
    {% endif %}
  </div>
</section>
