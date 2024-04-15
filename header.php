<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicon.svg" /> -->
  <meta name="keywords" content="複業職人 複業 ダブルワーク 副業 キャリア スキルセット リスキリング" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N2HQ4HD8');
  </script>
  <!-- End Google Tag Manager -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Noto+Sans+JP:wght@400;500;600;700;800&family=Noto+Sans:wght@500;700&family=Zen+Kaku+Gothic+Antique:wght@900&family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Jost:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Noto+Sans+JP:wght@400;500;600;700;800&family=Noto+Sans:wght@500;700&family=Zen+Kaku+Gothic+Antique:wght@900&family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Jost:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Noto+Sans+JP:wght@400;500;600;700;800&family=Noto+Sans:wght@500;700&family=Roboto:wght@500&family=Zen+Kaku+Gothic+Antique:wght@900&family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <!-- Google Searchconsole -->
  <meta name="google-site-verification" content="pLF-oeYLXkoAEPdp3E0-C3EaIJFNjNM14WlPBRJsLX8" />
  <!-- Fontawsome -->
  <script src="https://kit.fontawesome.com/8c26bedd20.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N2HQ4HD8" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php wp_body_open(); ?>
  <header class="header" id="header">
    <div class="inner">
      <div class="logo-area">
        <a class="logo-link" href="<?php echo home_url(); ?>">
          <img class="logo-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/header_logo.png" alt="logo">
        </a>
      </div>
      <div class="menu-area">
        <button class="contact-button" id="ga_contactHeaderButton">
          <a class="contact-link" href="<?php echo home_url(); ?>/contact">
            まずは無料で相談
          </a>
        </button>
        <button id="js-humberger" type="button" class="humberger" aria-controls="navigation" aria-expanded="false">
          <span class="humberger__line"></span>
          <!-- <span class="humberger__text"></span> -->
        </button>
        <div class="header__nav-area js-nav-area" id="navigation">
          <nav id="js-global-navigation" class="global-navigation">
            <ul class="global-navigation__list">
              <li class="menu-list">
                <a class="menu-link js-menu-link" href="<?php echo home_url(); ?>/#aboutFukugyou" class="global-navigation__link">
                  複業とは
                </a>
              </li>
              <li class="menu-list">
                <a class="menu-link js-menu-link" href="<?php echo home_url(); ?>/#aboutFukugyouShokunin" class="global-navigation__link">
                  複業職人とは
                </a>
              </li>
              <li class="menu-list">
                <a class="menu-link js-menu-link" href="<?php echo home_url(); ?>/#program" class="global-navigation__link">
                  プログラム
                </a>
              </li>
              <li class="menu-list">
                <a class="menu-link js-menu-link" href="<?php echo home_url(); ?>/#staff" class="global-navigation__link">
                  講師紹介
                </a>
              </li>
              <li class="menu-list">
                <a class="menu-link js-menu-link" href="<?php echo home_url(); ?>/#plan" class="global-navigation__link">
                  プラン
                </a>
              </li>
              <li class="menu-list">
                <a class="menu-link js-menu-link" href="<?php echo home_url(); ?>/#case" class="global-navigation__link">
                  受講者の声
                </a>
              </li>
              <li class="menu-list">
                <a class="menu-link js-menu-link" href="<?php echo home_url(); ?>/#news" class="global-navigation__link">
                  ニュース
                </a>
              </li>
            </ul>
            <div id="js-focus-trap" tabindex="0"></div>
          </nav>
        </div>
      </div>
    </div>
  </header>