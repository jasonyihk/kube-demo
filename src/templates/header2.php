<header class="header {{ header_class }}">
  <nav class="header-navbar navbar navbar-custom">
  <div class="vertical-center-container ">
    <div class="navbar-header page-scroll vertical-center">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".header-navbar-container" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../" class="header-navbar-brand navbar-brand ga-click-tracking" data-ga-label="home"></a>
    </div>
    <div class="header-navbar-container collapse navbar-collapse pull-right vertical-center ">
      <ul class="header-right-navbar-container nav navbar-nav desktop-header">
        <li class="nav-item small-item dropdown">
          <a href="../about-infinitus/" class="ga-click-tracking" aria-haspopup="true" aria-expanded="false" data-ga-label="about">{{ 'about.header'|trans }}</a>
          <ul class="dropdown-menu">
            <li class="item small display-on-touch">
              <a href="../about-infinitus/" class="ga-click-tracking" data-ga-label="about_main">{{ 'about.item.0'|trans }}</a>
            </li>
            <li class="item small-item">
              <a href="../corporate-culture/" class="ga-click-tracking" data-ga-label="corporate_culture">{{ 'about.item.1'|trans }}</a>
            </li>
          <!--  <li class="header-navbar-item-dropdown-itemsmall">
              <a href="../milestone/" class="ga-click-tracking" data-ga-label="milestone">{{ 'about.item.2'|trans }}</a>
            </li>-->
            <li class="item small-item">
              <a href="../research-and-development/" class="ga-click-tracking" data-ga-label="r_and_d">{{ 'about.item.3'|trans }}</a>
            </li>
            <li class="header-navbar-item-dropdown-itemsmall">
              <a href="../quality-assurance/" class="ga-click-tracking" data-ga-label="quality_assurance">{{ 'about.item.4'|trans }}</a>
            </li>
          </ul>
        </li>
        <li class="nav-item small-item">
          <a href="../our-news/" class="ga-click-tracking" data-ga-label="news">{{ 'news.header'|trans }}</a>
        </li>
        <li class="nav-item small-item" data-toggle="modal" data-target=".shop-now-overlay">
          <a class="ga-click-tracking" data-ga-label="shop">{{ 'shop'|trans }}</a>
        </li>
        <li class="nav-item small-item ga-click-tracking" data-toggle="modal" data-target=".join-now-overlay">
          <a class="ga-click-tracking" data-ga-label="join">{{ 'join'|trans }}</a>
        </li>
        <li class="nav-item small-item header-right-navbar-item-lang dropdown">
          <a class="ga-focus-tracking" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-ga-label="language"> {{ 'lang'|trans}} <b class="caret"></b></a>
          <ul class="header-navbar-item-dropdown dropdown-menu">
            <li class="header-navbar-item-dropdown-itemsmall">
              <a href="../../en/{{ locale_path }}/" class="ga-click-tracking" data-ga-label="en">English</a>
            </li>
            <li class="header-navbar-item-dropdown-itemsmall">
              <a href="../../zh-cn/{{ locale_path }}/" class="ga-click-tracking" data-ga-label="sc">简体中文</a>
            </li>
          </ul>
        </li>
        <li class="nav-item small-item">
          <a href="https://register{{ eWorkplace_url }}{{ 'loginlink.header'|trans }}" class="ga-click-tracking" data-ga-label="login" target="_blank">
            <div class="login-img-hover">
            </div>
          </a>
        </li>
      </ul>
      <ul class="header-mobile-navbar-container nav navbar-nav">
        <li class="nav-item mobile">
          <a class="ga-click-tracking" target="_blank" data-ga-label="login" href="https://register{{ eWorkplace_url }}{{ 'loginlink.header'|trans }}">{{ 'login'|trans }}</a>
        </li>
        <li class="nav-item mobile" data-toggle="modal" data-target=".shop-now-overlay">
          <a class="ga-click-tracking" data-ga-label="shop" data-toggle="collapse" data-target=".header-navbar-container">{{ 'shop'|trans }}</a>
        </li>
        <li class="nav-item mobile" data-toggle="modal" data-target=".join-now-overlay">
          <a class="ga-click-tracking" data-ga-label="join" data-toggle="collapse" data-target=".header-navbar-container">{{ 'join'|trans }}</a>
        </li>
        <li class="nav-item mobile dropdown">
          <a data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            {{ 'health-concept.header'|trans }}
            <div class="header-mobile-navbar-item-arrow-container vertical-align-center">
              <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-right"></span>
            </div>
          </a>
          <ul class="dropdown-menu mobile dropdown-submenu">
            <li class="nav-item">
              <a  class="header-mobile-navbar-item-dropdown-item-header" data-toggle="collapse" role="button">
                <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-left"></span>
                {{ 'back'|trans }}
              </a>
            </li>
            <li class="nav-item">
              <a class="ga-click-tracking" data-ga-label="our_health_concept_main" href="../health-concept/" data-toggle="collapse" data-target=".header-navbar-container">{{ 'health-concept.item.0'|trans }}</a>
            </li>
            <li  class="nav-item">
              <a class="ga-click-tracking" data-ga-label="whats_our_health_concept" href="../our-health-concept/#traditional-chinese-health-concept" data-toggle="collapse" data-target=".header-navbar-container">{{ 'health-concept.item.1'|trans }}</a>
            </li>
            <li class="nav-item">
              <a class="ga-click-tracking" data-ga-label="4+3_health_philosphy" href="../our-health-concept/#four-plus-three-our-health-concept" data-toggle="collapse" data-target=".header-navbar-container">{{ 'health-concept.item.2'|trans }}</a>
            </li>
          </ul>
        </li>
        <li class="nav-item mobile dropdown">
          <a data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            {{ 'products.header'|trans }}
            <div class="header-mobile-navbar-item-arrow-container vertical-align-center">
              <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-right"></span>
            </div>
          </a>
          <ul class="dropdown-menu mobile dropdown-submenu">
            <li class="nav-item">
              <a class="header-mobile-navbar-item-dropdown-item-header" data-toggle="collapse" role="button">
                <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-left"></span>
                {{ 'back'|trans }}
              </a>
            </li>
            <li class="nav-item">
              <a class="ga-click-tracking" data-ga-label="product_family" href="../products/">{{ 'products.item.0'|trans }}</a>
            </li>
            <li class="nav-item dropdown">
              <a class="ga-click-tracking" data-ga-label="infinitus_health_food" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                {{ 'products.product-type.0'|trans }}
                <div class="header-mobile-navbar-item-arrow-container vertical-align-center">
                  <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-right"></span>
                </div>
              </a>
              <ul class="dropdown-menu mobile dropdown-submenu">
                <li class="nav-item">
                  <a class="back" data-toggle="collapse" role="button">
                    <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-left"></span>
                    {{ 'back'|trans }}
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../product-detail-qi-premium-nutrient-herbal-essence/" data-toggle="collapse" data-target=".header-navbar-container">{{('product-detail.qi-premium-nutrient-herbal-essence.title')|trans }}</a>
                </li>
                <li class="nav-item">
                  <a href="../product-detail-royal-lingzhi-plus/" data-toggle="collapse" data-target=".header-navbar-container">{{('product-detail.royal-lingzhi-plus.title')|trans }}</a>
                </li>
                <li class="nav-item">
                  <a href="../product-detail-dried-tangerine-peel-puer-tea/" data-toggle="collapse" data-target=".header-navbar-container">{{('product-detail.dried-tangerine-peel-puer-tea.title')|trans }}</a>
                </li>
                <li class="nav-item">
                  <a href="../product-detail-b-circulation-aid/" data-toggle="collapse" data-target=".header-navbar-container">{{('product-detail.b-circulation-aid.title')|trans }}</a>
                </li>
                <li class="nav-item">
                  <a href="../product-detail-schisandra-plus/" data-toggle="collapse" data-target=".header-navbar-container">{{('product-detail.schisandra-plus.title')|trans }}</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="ga-click-tracking" data-ga-label="phytocare_personal_care" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                {{ 'products.product-type.1'|trans }}
                <div class="header-mobile-navbar-item-arrow-container vertical-align-center">
                  <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-right"></span>
                </div>
              </a>
              <ul class="dropdown-menu mobile dropdown-submenu">
                <li class="nav-item">
                  <a class="back" data-toggle="collapse" role="button">
                    <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-left"></span>
                    {{ 'back'|trans }}
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../product-detail-phytocare-toothpaste-twin-pack/" data-toggle="collapse" data-target=".header-navbar-container">{{('product-detail.phytocare-toothpaste-twin-pack.title')|trans}}</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="ga-click-tracking" data-ga-label="beautrio_skin_care_products" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                {{ 'products.product-type.2'|trans }}
                <div class="header-mobile-navbar-item-arrow-container vertical-align-center">
                  <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-right"></span>
                </div>
              </a>
              <ul class="dropdown-menu mobile dropdown-submenu">
                <li class="nav-item">
                  <a class="back" data-toggle="collapse" role="button">
                    <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-left"></span>
                    {{ 'back'|trans }}
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../product-detail-beautrio-series/" data-toggle="collapse" data-target=".header-navbar-container">{{('product-detail.beautrio-series.title')|trans}}</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="ga-click-tracking" data-ga-label="vitabelle_skin_care_products" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                {{ 'products.product-type.3'|trans }}
                <div class="header-mobile-navbar-item-arrow-container vertical-align-center">
                  <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-right"></span>
                </div>
              </a>
              <ul class="dropdown-menu mobile dropdown-submenu">
                <li class="nav-item">
                  <a class="back" data-toggle="collapse" role="button">
                    <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-left"></span>
                    {{ 'back'|trans }}
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../product-detail-vitabelle-hydrating-lotion/" data-toggle="collapse" data-target=".header-navbar-container">{{('product-detail.vitabelle-hydrating-lotion.title')|trans}}</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item mobile">
          <a class="ga-click-tracking" data-ga-label="business_opportunity" href="../business-opportunity/">{{ 'business-opportunity.header'|trans }}</a>
        </li>
        <!--<li class="header-mobile-navbar-item dropdown">
          <a data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            {{ 'business-opportunity.header'|trans }}
            <div class="header-mobile-navbar-item-arrow-container vertical-align-center">
              <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-right"></span>
            </div>
          </a>
          <ul class="dropdown-menu mobile">
            <li class="item">
              <a class="header-mobile-navbar-item-dropdown-item-header" data-toggle="collapse" role="button">
                <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-left"></span>
                {{ 'back'|trans }}
              </a>
            </li>
            <li class="item">
              <a class="ga-click-tracking" data-ga-label="business_opportunity_main" href="../business-opportunity/" data-toggle="collapse" data-target=".header-navbar-container">{{ 'business-opportunity.item.0'|trans }}</a>
            </li>-->
            <!--<li class="item">
              <a class="ga-click-tracking" data-ga-label="why_infinitus" href="../business-opportunity-detail/#why-infinitus" data-toggle="collapse" data-target=".header-navbar-container">{{ 'business-opportunity.item.1'|trans }}</a>
            </li>
            <li class="item">
              <a class="ga-click-tracking" data-ga-label="business_potential" href="../business-opportunity-detail/#business-potential" data-toggle="collapse" data-target=".header-navbar-container">{{ 'business-opportunity.item.2'|trans }}</a>
            </li>-->
            <!--<li class="item">
              <a class="ga-click-tracking" data-ga-label="rewards" href="../business-opportunity-detail/" data-toggle="collapse" data-target=".header-navbar-container">{{ 'business-opportunity.item.3'|trans }}</a>
            </li>-->
          <!--</ul>
        </li>-->
        <li class="nav-item mobile">
          <a class="ga-click-tracking" data-ga-label="news" href="../our-news/">{{ 'news.header'|trans }}</a>
        </li>
        <li class="nav-item mobile dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            {{ 'about.header'|trans }}
            <div class="header-mobile-navbar-item-arrow-container vertical-align-center">
              <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-right"></span>
            </div>
          </a>
          <ul class="dropdown-menu mobile dropdown-submenu">
            <li class="nav-item">
              <a class="header-mobile-navbar-item-dropdown-item-header" data-toggle="collapse" role="button">
                <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-left"></span>
                {{ 'back'|trans }}
              </a>
            </li>
            <li class="nav-item">
              <a class="ga-click-tracking" data-ga-label="corporate_culture" href="../about-infinitus/" data-toggle="collapse" data-target=".header-navbar-container">{{ 'about.item.0'|trans }}</a>
            </li>
            <li class="nav-item">
              <a class="ga-click-tracking" data-ga-label="milestone" href="../corporate-culture/" data-toggle="collapse" data-target=".header-navbar-container">{{ 'about.item.1'|trans }}</a>
            </li>
           <!-- <li class="item">
              <a class="ga-click-tracking" data-ga-label="r_and_d" href="../milestone/" data-toggle="collapse" data-target=".header-navbar-container">{{ 'about.item.2'|trans }}</a>
            </li>-->
            <li class="nav-item">
              <a class="ga-click-tracking" data-ga-label="quality_assurance" href="../research-and-development/" data-toggle="collapse" data-target=".header-navbar-container">{{ 'about.item.3'|trans }}</a>
            </li>
            <li class="nav-item">
              <a class="ga-click-tracking" data-ga-label="quality_assurance" href="../quality-assurance/" data-toggle="collapse" data-target=".header-navbar-container">{{ 'about.item.4'|trans }}</a>
            </li>
          </ul>
        </li>
        <li class="nav-item mobile dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
             {{ 'lang-overlay'|trans}}
            <div class="header-mobile-navbar-item-arrow-container vertical-align-center">
              <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-right"></span>
            </div>
          </a>
          <ul class="dropdown-menu mobile dropdown-submenu">
            <li class="nav-item" data-toggle="collapse" role="button">
              <a class="header-mobile-navbar-item-dropdown-item-header">
                <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-left"></span>
                {{ 'back'|trans }}
              </a>
            </li>
            <li class="nav-item">
              <a class="ga-click-tracking" data-ga-label="en" href="../../en/{{ locale_path }}/" data-toggle="collapse" data-target=".header-navbar-container">English</a>
            </li>
            <li class="nav-item">
              <a class="ga-click-tracking" data-ga-label="cn" href="../../zh-cn/{{ locale_path }}/" data-toggle="collapse" data-target=".header-navbar-container">简体中文</a>
            </li>
          </ul>
        </li>
        <li class="footer-item">
          <a class="ga-click-tracking" data-ga-label="t_and_c" href="../../document/{{ 'terms-and-conditions.url'|trans }}" target="_blank">{{ 'terms-and-conditions.text'|trans }}</a>
        </li>
        <li class="footer-item">
          <a class="ga-click-tracking" data-ga-label="policy" href="../../document/{{ 'private-policy.url'|trans }}" target="_blank">{{ 'private-policy.text'|trans }}</a>
        </li>
        <li class="footer-item">
          <a class="ga-click-tracking" data-ga-label="faq" href="../../document/{{ 'contact-us.url'|trans }}" target="_blank">{{ 'contact-us.text'|trans }}</a>
        </li>
        <li class="footer-item">
          <a class="ga-click-tracking" data-ga-label="market" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            {{ 'markets.text'|trans }}
            <span class="glyphicon glyphicon-triangle-right"></span>
          </a>
          <ul class="dropdown-menu mobile dropdown-submenu">
            <li class="nav-item">
              <a class="header-mobile-navbar-item-dropdown-item-header" data-toggle="collapse" role="button">
                <span class="header-mobile-navbar-arrow header-mobile-navbar-arrow-left"></span>
                {{ 'back'|trans }}
              </a>
            </li>
            <li class="nav-item">
              <a href="http://www.infinitloginlinkus-int.com/" target="_blank" data-toggle="collapse" data-target=".header-navbar-container">
                {{ 'markets.global'|trans }}
              </a>
            </li>
            <!--<li class="item">
              <a href="http://ca.infinitus-int.com" target="_blank" data-toggle="collapse" data-target=".header-navbar-container">
                {{ 'markets.canada'|trans }}
              </a>
            </li>-->
            <li class="nav-item">
              <a href="http://www.infinitus.com.cn/" target="_blank" data-toggle="collapse" data-target=".header-navbar-container">
                {{ 'markets.china'|trans }}
              </a>
            </li>
            <li class="nav-item">
              <a href="http://www.infinitus-int.com.tw/" target="_blank" data-toggle="collapse" data-target=".header-navbar-container">
                {{ 'markets.taiwan'|trans }}
              </a>
            </li>
            <li class="nav-item">
              <a href="http://www.infinitus.com.hk/" target="_blank" data-toggle="collapse" data-target=".header-navbar-container">
                {{ 'markets.hongkong'|trans }}
              </a>
            </li>
            <li class="nav-item">
              <a href="http://sg.infinitus-int.com/" target="_blank" data-toggle="collapse" data-target=".header-navbar-container">
                {{ 'markets.singapore'|trans }}
              </a>
            </li>
            <li class="nav-item">
              <a href="http://www.infinitus.my/" target="_blank" data-toggle="collapse" data-target=".header-navbar-container">
                {{ 'markets.malaysia'|trans }}
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="header-center-container collapse pull-right vertical-center desktop-header">
      <ul class="header-center-navbar" >
        <li data-locale="{{ locale }}" class="nav-item text-regular
          {% if page == 'health-concept' %}
            selected
          {% endif %}
          dropdown ">
          <a href="../health-concept/" class="ga-click-tracking" aria-haspopup="true" aria-expanded="false" data-ga-label="our_health_concept">{{ 'health-concept.header'|trans }}</a>
          <ul class="dropdown-menu">
            <li class="item display-on-touch">
              <a href="../health-concept/" class="menu-text ga-click-tracking" data-ga-label="our_health_concept_main">{{ 'health-concept.item.0'|trans }}</a>
            </li>
            <li class="item">
              <a href="../our-health-concept/#traditional-chinese-health-concept" class="menu-text ga-click-tracking" data-ga-label="whats_our_health_concept">{{ 'health-concept.item.1'|trans }}</a>
            </li>
            <li class="item">
              <a href="../our-health-concept/#four-plus-three-our-health-concept" class="menu-text ga-click-tracking" data-ga-label="4+3_health_philosophy">{{ 'health-concept.item.2'|trans }}</a>
            </li>
          </ul>
        </li>
        <li data-locale="{{ locale }}" class="nav-item text-regular
          {% if page == 'products' %}
            selected
          {% endif %}
          dropdown">
          <a href="../products/" class="ga-click-tracking" aria-haspopup="true" aria-expanded="false" data-ga-label="products">{{ 'products.header'|trans }}</a>
          <ul class="dropdown-menu">
            <li class="item display-on-touch">
              <a href="../products/" class="menu-text" data-ga-label="product_family">{{ 'products.item.0'|trans }}</a>
            </li>
            <li class="item">
              <a href="../product-detail-qi-premium-nutrient-herbal-essence/" class="menu-text" data-ga-label="infinitus_health_food">{{('products.product-type.0')|trans}}</a>
            </li>
            <li class="item">
              <a href="../product-detail-phytocare-toothpaste-twin-pack/" class="menu-text" data-ga-label="phytocare_personal_care">{{('products.product-type.1')|trans}}</a>
            </li>
            <li class="item">
              <a href="../product-detail-beautrio-series/" class="menu-text" data-ga-label="beautrio-skin-care-products">{{('products.product-type.2')|trans}}</a>
            </li>
            <li class="item">
              <a href="../product-detail-vitabelle-hydrating-lotion/" class="menu-text" data-ga-label="phytocare_personal_care">{{('products.product-type.3')|trans}}</a>
            </li>
          </ul>
        </li>
        <li data-locale="{{ locale }}" class="nav-item text-regular
          {% if page == 'business-opportunity' %}
            selected
          {% endif %}
          dropdown">
          <a href="../business-opportunity/" class="ga-click-tracking" data-ga-label="business_opportunity">{{ 'business-opportunity.header'|trans }}</a>
          <!--<ul class="header-navbar-item-dropdown dropdown-menu">
            <li class="header-navbar-item-dropdown-item ">
              <a href="../business-opportunity/" class="menu-text" data-ga-label="business_opportunity_main">{{ 'business-opportunity.item.0'|trans }}</a>
            </li>-->
            <!--<li class="header-navbar-item-dropdown-item">
              <a href="../business-opportunity-detail/#why-infinitus" class="menu-text" data-ga-label="why_infinitus">{{ 'business-opportunity.item.1'|trans }}</a>
            </li>
            <li class="header-navbar-item-dropdown-item">
              <a href="../business-opportunity-detail/#business-potential" class="menu-text" data-ga-label="business_potential">{{ 'business-opportunity.item.2'|trans }}</a>
            </li>-->
            <!--<li class="header-navbar-item-dropdown-item">
              <a href="../business-opportunity-detail/" class="menu-text" data-ga-label="rewards">{{ 'business-opportunity.item.3'|trans }}</a>
            </li>-->
          <!--</ul>-->
        </li>
      </ul>
    </div>
  </nav>
  <div id="beta-icon">{{ 'betaVersion'|trans }}<div>
</header>
