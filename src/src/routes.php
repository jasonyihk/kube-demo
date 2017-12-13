<?php
session_start();

require_once 'lib/CaaSNewsGetter.php';
use CaaS\CaaSNewsGetter as CaaSNewsGetter;

$app->get('/', function ($request, $response, $args) {
    $defaultLocale = $this->get('settings')['translator']['default_locale'];
    $defaultPage = $this->get('settings')['view']['default_page'];
    if (isset($_GET['referrerdomain'])) {
        $_SESSION["referrer"] = htmlspecialchars($_GET['referrerdomain']);
    }
    if (isset($_GET['l']) || isset($_GET['lang'])) {
        $lang = isset($_GET['l']) ? $_GET['l'] : $_GET['lang'];
        switch ($lang) {
            case 'en' :
            case 'zh-cn' :
            case 'fr' :
                $defaultLocale = $lang;
                break;
            default :
                $defaultLocale = 'en';
        }
    }
    $url = $defaultLocale . '/' . $defaultPage . '/';

    return $this->response->withRedirect($url);
});

$localePath = implode('|', $app->getContainer()->get('settings')['translator']['locale']);

$app->get('/{locale:' . $localePath . '}/', function ($request, $response, $args) {
    $defaultPage = $this->get('settings')['view']['default_page'];
    $url = $defaultPage . '/';
    return $this->response->withRedirect($url);
});

$app->group('/{locale:' . $localePath . '}', function () {
    $settings = $this->getContainer()->get('settings');
    $targetPath = implode('|', $settings['view']['available_pages']['main_pages']) . '|' . implode('|', $settings['view']['available_pages']['sub_pages']);

    $this->get('/{target:' . $targetPath . '}/', function ($request, $response, $args) {
        $locale = $request->getAttribute('locale');
        $this->translator->setLocale($locale);

        $target = $request->getAttribute('target');
        $settings = $this->get('settings');
        $is_main_page = in_array($target, $settings['view']['available_pages']['main_pages']);
        $baseUrl = $request->getUri()->getBaseUrl();
        $model = [
            'description_key' => $target . '.desc',
            'page' => $is_main_page ? $target : '',
            'header_class' => $is_main_page ? '' : 'subpage',
            'locale_path' => $target,
            'locale' => $locale,
            'baseUrl' => $baseUrl,
            'baseMetaUrl' => $baseUrl,
            'path' => $request->getUri()->getPath(),
            'meta_title' => $target . '.meta-title',
            'image_Twitter' => $target . '.image-Twitter',
            'image_Facebook' => $target . '.image-Facebook',
            'image_Google' => $target . '.image-Google',
            'image_WeChat' => $target . '.image-WeChat',
            'image_Whatsapp' => $target . '.image-Whatsapp',
            'keywords' => $target . '.keywords',
        ];

        if ($target === 'our-news') {
            $caasSettings = $settings['caas'];
            $isEnableCaaSAPI = $caasSettings['enable'];

            if ($isEnableCaaSAPI) {
                $baseUri = $caasSettings['base_uri'];
                $apiKey = $caasSettings['api_key'];
                $market = $caasSettings['market'];
                $caaSNewsGetter = new CaaSNewsGetter($baseUri, $apiKey);
                $model['newsList'] = $caaSNewsGetter->getPublicNewsList($market, $locale);
            } else {
                $target = 'our-news-json-version';
            }
        }
        return $this->view->render($response, $target . '.php', $model);
    });
});

$app->group('/{locale:' . $localePath . '}/product-detail-', function () {
    $targetPath = implode('|', $this->getContainer()->get('settings')['view']['available_pages']['product-detail']['normal']) . '|' . implode('|', $this->getContainer()->get('settings')['view']['available_pages']['product-detail']['slide']);
    $this->get('{target:' . $targetPath . '}/', function ($request, $response, $args) {
        $locale = $request->getAttribute('locale');
        $this->translator->setLocale($locale);

        $target = $request->getAttribute('target');
        $is_main_page = false;

        $template = null;
        if (in_array($target, $this->get('settings')['view']['available_pages']['product-detail']['normal'])) {
            $template = 'normal';
        } else {
            $template = 'slide';
        }
        $baseUrl = $request->getUri()->getBaseUrl();
        $model = [
            'keywords' => 'product-detail.' . $target . '.keywords',
            'description_key' => 'product-detail.' . $target . '.desc',
            'page' => $is_main_page ? $target : '',
            'header_class' => $is_main_page ? '' : 'subpage',
            'target' => $target,
            'locale_path' => 'product-detail-' . $target,
            'locale' => $locale,
            'baseUrl' => $baseUrl,
            'baseMetaUrl' => $baseUrl,
            'path' => $request->getUri()->getPath(),
            'template' => $template,
            'image_Twitter' => 'product-detail.' . $target . '.image-Twitter',
            'image_Facebook' => 'product-detail.' . $target . '.image-Facebook',
            'image_Google' => 'product-detail.' . $target . '.image-Google',
            'image_WeChat' => 'product-detail.' . $target . '.image-WeChat',
            'image_Whatsapp' => 'product-detail.' . $target . '.image-Whatsapp',
            'meta_title' => 'product-detail.' . $target . '.meta-title',
            'keywords' => 'product-detail.' . $target . '.keywords',
        ];
        return $this->view->render($response, 'product-detail.php', $model);
    });
});

$app->group('/{locale:' . $localePath . '}/news-detail-', function () {
    $targetPath = implode('|', $this->getContainer()->get('settings')['view']['available_pages']['news-detail']);

    $this->get('{target:' . $targetPath . '}/', function ($request, $response, $args) {
        $locale = $request->getAttribute('locale');
        $this->translator->setLocale($locale);

        $target = $request->getAttribute('target');
        $is_main_page = false;
        $baseUrl = $request->getUri()->getBaseUrl();
        $model = [
            'description_key' => 'news-detail.' . $target . '.desc',
            'page' => $is_main_page ? $target : '',
            'header_class' => $is_main_page ? '' : 'subpage',
            'target' => $target,
            'locale_path' => 'news-detail-' . $target,
            'locale' => $locale,
            'baseUrl' => $baseUrl,
            'baseMetaUrl' => $baseUrl,
            'path' => $request->getUri()->getPath(),
            'meta_title' => 'news-detail.' . $target . '.meta-title',
            'keywords' => 'news-detail.' . $target . '.keywords',
            'image_Twitter' => 'news-detail.' . $target . '.image-Twitter',
            'image_Facebook' => 'news-detail.' . $target . '.image-Facebook',
            'image_Google' => 'news-detail.' . $target . '.image-Google',
            'image_WeChat' => 'news-detail.' . $target . '.image-WeChat',
            'image_Whatsapp' => 'news-detail.' . $target . '.image-Whatsapp',
        ];
        return $this->view->render($response, 'news-detail.php', $model);
    });
});

$app->get('/{locale:' . $localePath . '}/news/{id}', function ($request, $response, $args) {
    $locale = $request->getAttribute('locale');
    $this->translator->setLocale($locale);

    $target = $request->getAttribute('target');

    $caasSettings = $this->get('settings')['caas'];
    $baseUri = $caasSettings['base_uri'];
    $apiKey = $caasSettings['api_key'];
    $caaSNewsGetter = new CaaSNewsGetter($baseUri, $apiKey);
    $news = $caaSNewsGetter->getPublicNews($args['id']);
    $baseUrl = $request->getUri()->getBaseUrl();
    $market = $caasSettings['market'];
    $relatedNewsList = $caaSNewsGetter->getRelatedNewsList($market, $locale, $news);

    $defaultSocialImage = $news->cover->s3_m; // i.e. 500 x 500
    $model = [
        'description_key' => $news->meta_desciption,
        'page' => $target,
        'header_class' => 'subpage',
        'target' => $target,
        'locale_path' => 'news-detail-' . $target,
        'locale' => $locale,
        'baseUrl' => $baseUrl,
        'baseMetaUrl' => '',
        'path' => $request->getUri()->getPath(),
        'meta_title' => $news->meta_title,
        'keywords' => $news->meta_keywords,
        'image_Twitter' => empty($news->twitter_image->s3) ? $defaultSocialImage : $news->twitter_image->s3,
        'image_Facebook' => empty($news->facebook_image->s3) ? $defaultSocialImage : $news->facebook_image->s3,
        'image_Google' => empty($news->google_image->s3) ? $defaultSocialImage : $news->google_image->s3,
        'image_WeChat' => empty($news->wechat_image->s3) ? $defaultSocialImage : $news->wechat_image->s3,
        'image_Whatsapp' => empty($news->whatsapp_image->s3) ? $defaultSocialImage : $news->whatsapp_image->s3,
        'news' => $news,
        'relatedNewsList' => $relatedNewsList
    ];
    return $this->view->render($response, 'news-detail-caas.php', $model);
});
