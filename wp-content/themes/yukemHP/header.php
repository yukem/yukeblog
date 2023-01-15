<!DOCTYPE html>
<html lang="ja">

<head>

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
    })(window, document, 'script', 'dataLayer', 'GTM-5LT24GH');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-favicon.png">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/android-chrome-192x192-favicon.png">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;400;500;700&family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <script>
    (function(d) {
      var config = {
          kitId: 'efr0ggp',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
  <script src="https://kit.fontawesome.com/4e1643a9da.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css\swiper-bundle.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.min.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LT24GH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php wp_body_open(); ?>

  <!-- floating icon -->
  <div class="floating under">
    <div><a href="#form"><i class="fas fa-envelope yureru-j f-mail"></i></a></div>
    <div><a href="https://twitter.com/game_yukemu" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter yureru-j f-twitter"></i></a></div>
  </div>
  <div class="return-top"><a id="page_top" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/top-arrow.svg"></a></div>
  <!-- header -->
  <header id="global-nav" class="header-pc">
    <!-- header-left -->
    <a class="header-left" href="https://yukeblog.org/">
      <svg xmlns="http://www.w3.org/2000/svg" width="233" height="58" viewBox="0 0 231 49">
        <g id="グループ_257" data-name="グループ 257" transform="translate(-480 -279)">
          <text id="yukemu.page" transform="translate(530 310)" fill="#fff" font-size="27" font-family="Arial-BoldMT, Arial" font-weight="700">
            <tspan x="0" y="0">yukemu.page</tspan>
          </text>
          <g id="グループ_22" data-name="グループ 22" transform="translate(-12)">
            <circle id="楕円形_1" data-name="楕円形 1" cx="20" cy="20" r="20" transform="translate(492 282)" fill="#0db900" />
            <text id="Y" transform="translate(495 320)" fill="#fff" font-size="38" font-family="Arial-BoldMT, Arial" font-weight="700">
              <tspan x="0" y="0">Y</tspan>
            </text>
          </g>
        </g>
      </svg>
    </a>
    <!-- header-right【PC】 -->
    <ul class="header-right">
      <li class="parent-menu">
        <a href="https://yukeblog.org/profile/" class="profile">プロフィール</a>
      </li>
      <li class="parent-menu">
        <a class="portfolio parent">ポートフォリオ</a>
        <ul class="children-menu fast" id="fast">
          <li class="single-menu"> <a href="https://yukeblog.org/illustration/" class="">イラスト<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <path d="M10,0A10,10,0,1,0,20,10,10.011,10.011,0,0,0,10,0Zm5.742,8.311L9.46,14.593a1.414,1.414,0,0,1-2,0l-3.2-3.2a1.414,1.414,0,1,1,2-2l2.2,2.2,5.282-5.282a1.414,1.414,0,0,1,2,2Z" />
              </svg></a></li>
          <li class="single-menu"> <a href="https://yukeblog.org/dtp/" class="">DTP<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <path d="M10,0A10,10,0,1,0,20,10,10.011,10.011,0,0,0,10,0Zm5.742,8.311L9.46,14.593a1.414,1.414,0,0,1-2,0l-3.2-3.2a1.414,1.414,0,1,1,2-2l2.2,2.2,5.282-5.282a1.414,1.414,0,0,1,2,2Z" />
              </svg></a></li>
          <li class="single-menu"> <a href="https://yukeblog.org/web/" class="">WEB制作<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <path d="M10,0A10,10,0,1,0,20,10,10.011,10.011,0,0,0,10,0Zm5.742,8.311L9.46,14.593a1.414,1.414,0,0,1-2,0l-3.2-3.2a1.414,1.414,0,1,1,2-2l2.2,2.2,5.282-5.282a1.414,1.414,0,0,1,2,2Z" />
              </svg></a></li>
          <li class="single-menu"> <a href="https://yukeblog.org/portfolio/">yukemu.page制作<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <path d="M10,0A10,10,0,1,0,20,10,10.011,10.011,0,0,0,10,0Zm5.742,8.311L9.46,14.593a1.414,1.414,0,0,1-2,0l-3.2-3.2a1.414,1.414,0,1,1,2-2l2.2,2.2,5.282-5.282a1.414,1.414,0,0,1,2,2Z" />
              </svg></a></li>
        </ul>
      </li>
      <li class="parent-menu">
        <a class="activities parent">活動</a>
        <ul class="children-menu second" id="second">
          <li class="single-menu"> <a href="#" class="hide">クラウドソーシング<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <path id="パス_7" data-name="パス 7" d="M18.116,1.884A6.442,6.442,0,0,0,7.431,8.426L.173,15.685A.585.585,0,0,0,0,16.1v3.315A.586.586,0,0,0,.587,20H3.9a.585.585,0,0,0,.414-.172L5.145,19a.586.586,0,0,0,.168-.482l-.1-.89,1.234-.116a.585.585,0,0,0,.528-.528l.116-1.234.89.1a.577.577,0,0,0,.457-.144.587.587,0,0,0,.2-.438V14.179H9.7a.585.585,0,0,0,.414-.172l1.5-1.483A6.346,6.346,0,0,0,18.116,11,6.453,6.453,0,0,0,18.116,1.884ZM16.459,6.028a1.758,1.758,0,1,1,0-2.486A1.759,1.759,0,0,1,16.459,6.028Z" transform="translate(-0.001 0)" />
              </svg></a></li>
          <li class="single-menu"> <a href="#" class="hide">ラジオ<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <path id="パス_7" data-name="パス 7" d="M18.116,1.884A6.442,6.442,0,0,0,7.431,8.426L.173,15.685A.585.585,0,0,0,0,16.1v3.315A.586.586,0,0,0,.587,20H3.9a.585.585,0,0,0,.414-.172L5.145,19a.586.586,0,0,0,.168-.482l-.1-.89,1.234-.116a.585.585,0,0,0,.528-.528l.116-1.234.89.1a.577.577,0,0,0,.457-.144.587.587,0,0,0,.2-.438V14.179H9.7a.585.585,0,0,0,.414-.172l1.5-1.483A6.346,6.346,0,0,0,18.116,11,6.453,6.453,0,0,0,18.116,1.884ZM16.459,6.028a1.758,1.758,0,1,1,0-2.486A1.759,1.759,0,0,1,16.459,6.028Z" transform="translate(-0.001 0)" />
              </svg></a></li>
          <li class="single-menu"> <a href="#" class="hide">コンビ活動<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <path id="パス_7" data-name="パス 7" d="M18.116,1.884A6.442,6.442,0,0,0,7.431,8.426L.173,15.685A.585.585,0,0,0,0,16.1v3.315A.586.586,0,0,0,.587,20H3.9a.585.585,0,0,0,.414-.172L5.145,19a.586.586,0,0,0,.168-.482l-.1-.89,1.234-.116a.585.585,0,0,0,.528-.528l.116-1.234.89.1a.577.577,0,0,0,.457-.144.587.587,0,0,0,.2-.438V14.179H9.7a.585.585,0,0,0,.414-.172l1.5-1.483A6.346,6.346,0,0,0,18.116,11,6.453,6.453,0,0,0,18.116,1.884ZM16.459,6.028a1.758,1.758,0,1,1,0-2.486A1.759,1.759,0,0,1,16.459,6.028Z" transform="translate(-0.001 0)" />
              </svg></a></li>
          <li class="single-menu"> <a href="https://yukeblog.org/activities/">YouTube<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <path d="M10,0A10,10,0,1,0,20,10,10.011,10.011,0,0,0,10,0Zm5.742,8.311L9.46,14.593a1.414,1.414,0,0,1-2,0l-3.2-3.2a1.414,1.414,0,1,1,2-2l2.2,2.2,5.282-5.282a1.414,1.414,0,0,1,2,2Z" />
              </svg></a></li>
        </ul>
      </li>
      <li class="parent-menu">
        <a href="https://yukeblog.org/blog/" class="blog">ブログ</a>
      </li>
    </ul>
    <div class="search">
      <i id="search" class="fas fa-search"></i>
      <div id="search-wrap">
        <form method="get" id="searchform" value="<?php the_search_query(); ?>" action="<?php bloginfo('url'); ?>">
          <input type="text" name="s" id="search-text" class="search-box-text-input js-search-box-text-input" placeholder="キーワードで検索" />
          <button id="searchsubmit" type="submit"></button>
        </form>
      </div>
    </div>
    <div class="header-sp">
      <div class="openbtn1"><span></span><span></span><span></span></div>
    </div>
    <nav class="g-menu-sp">
      <ul>
        <li>
          <div class="search-sp">
            <div id="search-sp-wrap">
              <form method="get" id="searchform" value="<?php the_search_query(); ?>" action="<?php bloginfo('url'); ?>">
                <input type="text" name="s" id="search-text" class="search-box-text-input js-search-box-text-input" placeholder="キーワードで検索" />
                <button id="searchsubmit" type="submit"></button>
              </form>
            </div>
          </div>
        </li>
        <li><a href="https://yukeblog.org/profile/">プロフィール</a></li>
        <li>
          <input id="acd-check" class="acd-check" type="checkbox">
          <label class="acd-label" for="acd-check">ポートフォリオ</label>
          <div class="acd-content">
            <a href="https://yukeblog.org/illustration/"
            class="acd-content-single ">イラスト</a>
            <a href="https://yukeblog.org/dtp/"
            class="acd-content-single ">DTP</a>
            <a href="https://yukeblog.org/web/"
            class="acd-content-single ">WEB制作</a>
            <a href="https://yukeblog.org/portfolio/" class="acd-content-single">yukemu.page制作</a>
          </div>
        </li>
        <li>
          <input id="acd-check2" class="acd-check" type="checkbox">
          <label class="acd-label" for="acd-check2">活動</label>
          <div class="acd-content">
            <a class="acd-content-single hide">クラウドソーシング</a>
            <a class="acd-content-single hide">ラジオ</a>
            <a class="acd-content-single hide">コンビ活動</a>
            <a href="https://yukeblog.org/activities/" class="acd-content-single">YouTube</a>
          </div>
        </li>
        <li><a href="https://yukeblog.org/blog/">ブログ</a></li>
        <li><a href="#form" id="contact">お問い合わせ</a></li>
      </ul>
    </nav>
    <div class=" mask hidden"></div>
  </header>