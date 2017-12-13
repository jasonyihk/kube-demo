<div class="col-md-6 {{visibility}}">
  <a data-ga-label="{{gaLabel}}" class="ga-click-tracking" href="{{newsURL}}">
    <div class="row no-margin">
      <div class="background-image col-md-6 col-xs-{{mobileSize}} {{bgPos}} newsBG" data-background-image-src="{{imgURL}}"></div>
      <div class="col-md-6 col-xs-{{mobileSize}} {{contentPos}} newsContent" style="background-color: {{bgColor}};">
        <p class="date">{{ date|trans }}</p>
        <p class="desc">{{ desc|trans }}</p>
        <span class="arrow" style="border-{{contentPos}}-color: {{bgColor}};"></span>
        <span class="arrow mobile" style="border-bottom-color:{{bgColor}}"></span>
      </div>
    </div>
  </a>
</div>
