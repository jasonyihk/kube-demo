{% extends "base.php" %}

{% block header_css %}
<link rel="stylesheet" type="text/css" href="../../css/milestone.css">
{% endblock %}

{% block header_js %}
{% endblock %}

{% block main_content %}

  {% include 'header.php' %}
  <section class="subpages milestone">
    {% include 'component/subpage-banner.php' with {
      'title':'milestone.banner-title',
      'haveMask':false,
      'imgURL':'../../img/milestone/banner.jpg'
    } %}
    {% include 'component/page-title.php' with {
      'title':'milestone.subpage-title',
      'subtitle':'',
      'bgImgURL':'../../img/bg.png'
    } %}
    <div class="milestone-container" id="swiper_top">
        <div class="swiper-container swiper-container-horizontal swiper-container-android">
            <div class="swiper-wrapper">
                {% for i in range(0, ('milestone.total-year-number')|trans - 1) %}
                  <div class="swiper-slide">
                      <span>{{('milestone.timeline.'~i~'.year')|trans }}</span>
                  </div>
                {% endfor %}
            </div>
            <div class="swiper-scrollbar">
            </div>
        </div>
    </div>
    {% for i in range(0, ('milestone.total-year-number')|trans - 1) %}

      <div class="wrapper Events_ba {% if i == 0 %}ev_on{% endif %} milestone_{{i}}">
          <div class="container">
              <div class="Events clearfix">
                  <div class="left">
                    {% for j in range(0, ('milestone.timeline.'~i~'.content.total')|trans - 1) %}
                      {% if j%2==0 %}
                      <div class="time">
                          <div class="img"><img src="{{('milestone.timeline.'~i~'.content.detail.'~j~'.image')|trans }}" alt="Image Missing"></div>
                          <div class="txt">
                              {{('milestone.timeline.'~i~'.content.detail.'~j~'.title')|trans }}
                          </div>
                      </div>
                      {% endif %}
                    {% endfor %}
                  </div>
                  <div class="con">
                      <div class="line"><span></span></div>
                  </div>
                  <div class="right">
                    {% for k in range(0, ('milestone.timeline.'~i~'.content.total')|trans - 1) %}
                      {% if k%2!=0 %}
                      <div class="time">
                          <div class="img"><img src="{{('milestone.timeline.'~i~'.content.detail.'~k~'.image')|trans }}" alt="Image Missing"></div>
                          <div class="txt">
                              {{('milestone.timeline.'~i~'.content.detail.'~k~'.title')|trans }}
                          </div>
                      </div>
                      {% endif %}
                    {% endfor %}
                  </div>
                  {% if i+1 != 'milestone.total-year-number'|trans %}
                  <a href="#" class="eve_button" onclick="return preYear({{i+1}})">{{('milestone.timeline.'~i~'.year')|trans - 1 }}</a>
                  {% endif %}
              </div>
          </div>
      </div>
    {% endfor %}
  </seciton>
  <script>

  var mySwiper = new Swiper('.swiper-container', {
                    slidesPerView:'auto',
                    spaceBetween:30,
                    centeredSlides:'true',
                    onSlideChangeStart:function(sw) {
                        $('.ev_on').removeClass('ev_on');
                        $('.milestone_'+sw.realIndex).addClass('ev_on');
                    },
                    slideToClickedSlide:true,
                    scrollbar: '.swiper-scrollbar',
                 });
   function preYear(index){
     mySwiper.slideTo(index);
     $("body").animate({ scrollTop: $('.milestone-container').offset().top - $('.header-navbar').outerHeight() }, 600);
     return false;
   }

  </script>
{% endblock %}
