<?php
  if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
      $protocol = 'http://';
  } else {
      $protocol = 'https://';
  }
  $BASE_URL = $protocol . $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);

  require_once 'inc/vendor/Mobile_Detect.php';
  $detect = new Mobile_Detect();

  $device = (!$detect->isMobile()) ? 'desktop' : ($detect->isTablet() ? 'tablet' : 'mobile');

  $device = (isset($_COOKIE['device']) && $_COOKIE['device']) ? $_COOKIE['device'] : $device;

  switch ($device) {
    case 'mobile':
      $viewport     = '640px';
      $viewportMeta = '640';
      break;
    case 'tablet':
      $viewport     = '1200px';
      $viewportMeta = '1200';
      break;
    case 'desktop':
    default:
      $viewport     = 'device-width';
      $viewportMeta = 'device-width';
      break;
  }
  $isHomepage = (basename($_SERVER['PHP_SELF']) == 'index.php');
  $title = ($isHomepage) ? $siteName : $pageName.' : '.$siteName;
?>
<!doctype html>
<html class="-device_<?php echo $device; ?> no-js" lang="">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title><?php echo $title; ?></title>
  <meta name="description" content="" />

  <!-- <meta property="og:image" content="<?php echo $BASE_URL; ?>/img/userfiles/og-image.png" /> -->

  <meta name="viewport" content="width=<?php echo $viewportMeta; ?>" />
  <style>
    @-ms-viewport {
      width: <?php echo $viewport; ?>;
    }
    @viewport {
      width: <?php echo $viewport; ?>;
    }
  </style>

  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="apple-touch-icon" href="apple-touch-icon.png" />

  <link rel="stylesheet" href="assets/css/main.min.css?<?php echo filemtime('assets/css/main.min.css'); ?>" />
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,400italic|Roboto+Slab&subset=latin,cyrillic" />

  <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <script>window.Modernizr || document.write('<script src="assets/js/vendor/modernizr-2.8.3.min.js"><\/script>')</script>

  <!--[if lte IE 8]>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
    <script src="js/legacy/ie8.js"></script>
  <![endif]-->
  <!--[if gte IE 9]><!-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.1.4.min.js"><\/script>')</script>
  <!--<![endif]-->
</head>
<body class="-page_<?php echo $uri; ?><?php echo (!$isHomepage) ? ' -page_inner' : ''; ?>">
  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <div class="l-wrapper">
    <header class="l-siteHeader" role="banner">
      <div class="b-siteHeader">
        <div class="l-siteLogo">
          <div class="b-siteLogo" itemscope itemtype="http://schema.org/Organization">
            <a class="b-siteLogo__link" href="http://ideus.biz" itemprop="url">
              <img class="b-siteLogo__icon" src="assets/img/siteLogo__icon.png" alt="iDeus" title="iDeus" itemprop="logo" />
            </a>
          </div>
        </div>

        <div class="b-siteInfo">
          <a class="b-siteInfo__link"<?php if(!$isHomepage): ?> href="index.html"<?php endif; ?>>
            <img class="b-siteInfo__logo" src="assets/img/siteInfo__logo.png" alt="<?php echo $siteName; ?>" />
          </a>
          <?php if($isHomepage): ?>
            <h1 class="b-siteInfo__title"><?php echo $siteName; ?></h1>
            <div class="b-siteInfo__descr">Веб-разработка, дизайн, юзабилити, мобильные приложения</div>
          <?php endif; ?>
        </div>

        <div class="l-siteSearch">
          <div class="b-siteSearch">
            <a class="b-siteSearch__link js-searchShow" href="#" title="Искать"><i class="fa fa-search"></i></a>
            <div class="b-siteSearch__form js-searchForm">
              <form role="search" action="#" method="get">
                <fieldset>
                  <input class="b-siteSearch__input" type="search" type="search" name="s" value="" spellcheck="true" placeholder="Искать…" />
                  <input class="b-siteSearch__submit" type="submit" value="Искать" />
                </fieldset>
              </form>
              <div class="b-siteSearch__close js-searchHide"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="l-siteSubHeader">
        <div class="b-siteSubHeader">
          <?php if($uri != 'single'): ?>
            <?php $tag = (!$isHomepage) ? 'h1' : 'div'; ?>
            <<?php echo $tag; ?> class="b-siteSubHeader__title"><?php echo $pageName; ?></<?php echo $tag; ?>>
          <?php endif; ?>

          <ul class="b-socialMenu -style_header">
            <li class="b-socialMenu__item -type_fb">
              <a href="https://www.facebook.com/ideus.interactive" class="b-socialMenu__link">Facebook</a>
            </li>
            <li class="b-socialMenu__item -type_twitter">
              <a href="https://twitter.com/iDeus_team" class="b-socialMenu__link">Twitter</a>
            </li>
            <li class="b-socialMenu__item -type_github">
              <a href="https://github.com/ideus-team" class="b-socialMenu__link">GitHub</a>
            </li>
          </ul>

          <nav class="l-siteNavigation" role="navigation">
            <ul class="b-mainNavigation">
              <li class="b-mainNavigation__item">
                <a class="b-mainNavigation__link" href="category.html">Events</a>
              </li>
              <li class="b-mainNavigation__item">
                <a class="b-mainNavigation__link" href="category.html">Work</a>
              </li>
              <li class="b-mainNavigation__item">
                <a class="b-mainNavigation__link" href="category.html">Порка</a>
              </li>
              <li class="b-mainNavigation__item">
                <a class="b-mainNavigation__link" href="category.html">Праздники</a>
              </li>
              <li class="b-mainNavigation__item">
                <a class="b-mainNavigation__link" href="category.html">Статьи</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <div class="l-content">
