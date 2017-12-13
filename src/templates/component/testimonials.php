<div class="col-md-12 {{visibility}} slide">
  <div class="row no-margin">
    <div class="background-image col-md-4 col-xs-{{mobileSize}} {{bgPos}}" data-background-image-src="{{imgURL|trans}}"></div>
    <div class="col-md-8 col-xs-{{mobileSize}} {{contentPos}}" style="background-color: {{bgColor|trans}};">
      <div class="vcenter">
        <p class="desc">{{ content|trans|raw }}</p>
        <hr>
        <p class="name">{{ name|trans }}</p>
        <p class="title">{{ title|trans }}</p>
      </div>
      <span class="arrow" style="border-{{contentPos}}-color: {{bgColor|trans}};"></span>
      <span class="arrow mobile" style="border-bottom-color:{{bgColor|trans}}"></span>
      <div class="product-slide-pager-container"></div>
    </div>
  </div>
</div>
