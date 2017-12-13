<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="{{ locale }}">
  <head>
    {% block header_meta %}{% endblock %}
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="keywords" content="{{(keywords)|trans}}">
    <meta property="og:title" content="{{(meta_title)|trans }}">
    <meta property="og:description" content="{{ (description_key)|trans }}">
    <meta property="og:type" content="website">
    <meta property="og:image" itemprop="image" content="{{ baseUrl }}{{ (image_Facebook)|trans }}">
    <meta property="og:image:width" content="470">
    <meta property="og:image:height" content="246">
    <meta property="og:image" itemprop="image" content="{{ baseUrl }}{{ (image_Google)|trans }}">
    <meta property="og:image:width" content="426">
    <meta property="og:image:height" content="426">
    <meta property="og:image" itemprop="image" content="{{ baseUrl }}{{ (image_WeChat)|trans }}">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:image" itemprop="image" content="{{ baseUrl }}{{ (image_Whatsapp)|trans }}">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="200">
    <meta property="og:url" content="{{ baseUrl ~ path }}">
    <meta property="twitter:description" content="{{ (description_key)|trans}}">
    <meta property="twitter:title" content="{{ (meta_title)|trans }}">
    <meta name="twitter:image" content="{{ baseUrl }}{{ (image_Twitter)|trans }}">
    <meta name="twitter:card" content="summary_large_image">
    <title>{{ (meta_title)|trans }}</title>


    <link rel="icon" type="image/png" href="../../img/favicons/16x16_favicons.png" sizes="16x16">
    <link rel="icon" type="image/png" href="../../img/favicons/32x32_favicons.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../../img/favicons/96x96_favicons.png" sizes="96x96">
    <link rel="icon" type="image/png" href="../../img/favicons/144x144_tileicon.png" sizes="144x144">
    <link rel="icon" type="image/png" href="../../img/favicons/152x152_apple_touch_icon.png" sizes="152x152">
    <link rel="icon" type="image/png" href="../../img/favicons/310x310_msapplication_icon.png" sizes="310x310">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">

    {% block header_css %}{% endblock %}
    <script src="../../js/modernizr-custom.js"></script>
    <script src="../../js/touchpolyfill.min.js"></script>
    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="../../js/jquery.dotdotdot.min.js"></script>
    <script src="../../js/jquery.validate.min.js"></script>
    <script src="../../js/swiper.min.js"></script>
    <script src="../../js/swiper.jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/clipboard.min.js"></script>
    <script src="../../js/mq.genie.min.js"></script>
    <script src="../../js/global.js"></script>
    <script src="../../js/responsive-tabs.js"></script>
    {% block header_js %}{% endblock %}
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-63091955-4', 'auto');
    ga(function(tracker) {
    ga('send', 'pageview', {'dimension1': tracker.get('clientId')});
    });
    </script>

  </head>
  <body>
    <div class="page-background">
      <div id="main-container">
        {% block main_content %}
        {% endblock main_content %}
        {% include 'social.php' %}
        {% include 'footer.php' %}
      </div>

      <div class="back-to-top-container">
        <div class="icon back-to-top-button"></div>
      </div>
      {% include 'join-now-overlay.php' %}
      {% include 'shop-now-overlay.php' %}

    </div>
  </body>
</html>
