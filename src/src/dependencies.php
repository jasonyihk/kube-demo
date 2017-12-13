<?php
session_start();
$container = $app->getContainer();

// Twig view
$container['view'] = function ($c) {
  $settings = $c->get('settings')['view'];

  $view = new \Slim\Views\Twig($settings['template_path'], [
    //'cache' => $settings['cache_path']
  ]);

  $eWorkplace_url_uat = '.smartinfinitus.org';
  $eWorkplace_url_prod = '.infinitusbiz.com';
  $corprorate_url_uat = 'ca-uat.infinitus-int.com';
  $corprorate_url_prod = 'ca.infinitus-int.com';
  $igi_fr_url_uat = 'http://uat-igi.ddns.net';
  $igi_fr_url_prod = 'http://www.infinitus-igi.com';
  if($_SERVER['SERVER_NAME']==$corprorate_url_prod){
    $eWorkplace_url = $eWorkplace_url_prod;
    $igi_url = $igi_fr_url_prod;
  }else{
    $eWorkplace_url = $eWorkplace_url_uat;
    $igi_url = $igi_fr_url_uat;
  }
  if(isset($_SESSION['referrer'])){
    $referrer = $_SESSION['referrer'];
  }else{
    $referrer = '';
  }
  $view->offsetSet('eWorkplace_url', $eWorkplace_url);
  $view->offsetSet('referrer', $referrer);
  $view->offsetSet('igi_url',$igi_url);
  return $view;
};

// Symfony translation
$container['translator'] = function ($c) {
  $settings = $c->get('settings')['translator'];
 $translator = new \Symfony\Component\Translation\Translator($settings['default_locale'], new \Symfony\Component\Translation\MessageSelector());
  $translator->setFallbackLocales([$settings['fallback_locale']]);
  $translator->addLoader('php', new \Symfony\Component\Translation\Loader\PhpFileLoader());
  foreach ($settings['locale'] as $locale) {
    foreach ($settings['files'] as $file) {
      $translator->addResource('php', $settings['locale_path'] . $locale . '/' . $file . '.php', $locale);
    }
  }
  $c->view->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($translator));
  return $translator;
};

// Monolog
$container['logger'] = function ($c) {
  $settings = $c->get('settings')['logger'];
  $logger = new Monolog\Logger($settings['name']);
  $logger->pushProcessor(new Monolog\Processor\UidProcessor());
  $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
  return $logger;
};
