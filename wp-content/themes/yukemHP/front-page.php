<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- GTM設置 -->
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
  <!-- IE対策 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- レスポンシブ対応 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Googleフォント読み込み -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;400;500;700&family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <!-- fontawesome読み込み -->
  <script src="https://kit.fontawesome.com/4e1643a9da.js" crossorigin="anonymous"></script>
  <!-- ファビコン(shortcutでIE8以下対応) -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
  <!-- ファビコンiPhone対応 -->
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-favicon.png">
  <!-- ファビコンandroid対応 -->
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/android-chrome-192x192-favicon.png">
  <!-- デフォルトのCSSをリセット -->
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <!-- ローディングアニメーション -->
  <!-- <script>
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
  </script> -->
  <!-- CSS読み込み -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.min.css">
  <!-- WPテンプレートタグ -->
  <?php wp_head(); ?>
</head>
<!-- WPテンプレートタグ 記事毎のクラスが付与される-->

<body <?php body_class(); ?>>
  <!-- GTM設置 -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LT24GH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- 実行タイミング処理のためのフック(今回は利用していない) -->
  <?php wp_body_open(); ?>
  <!-- OPのロゴアニメーション（jsで操作） -->
  <div id="splash">
    <div id="splash_logo">
      <svg id="mask" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 229.064 40">
        <g id="グループ_263" data-name="グループ 263" transform="translate(-480 -282)">
          <circle id="楕円形_1" data-name="楕円形 1" cx="20" cy="20" r="20" transform="translate(480 282)" fill="#0db900" />
          <path id="y" data-name="パス 109" d="M9.908,0V-11.448L-.056-27.2H6.383l6.4,10.762L19.056-27.2h6.327l-10,15.79V0Z" transform="translate(483 320)" fill="#fff" />
          <path id="パス_108" data-name="パス 108" d="M3.456,6.075c3.375,0,5-2.052,6.318-5.616L15.147-15.12H11.34L9.261-8.1c-.351,1.4-.729,2.862-1.08,4.266H8.046C7.614-5.292,7.236-6.75,6.777-8.1l-2.4-7.02h-4L6.264-.27l-.27.891a2.894,2.894,0,0,1-2.835,2.3,4.066,4.066,0,0,1-1.053-.189L1.377,5.778A6.4,6.4,0,0,0,3.456,6.075ZM22.113.378A6.077,6.077,0,0,0,26.946-2.16h.108l.3,2.16h3.24V-15.12H26.622V-4.914c-1.026,1.35-1.836,1.89-3.078,1.89-1.458,0-2.106-.81-2.106-3.159V-15.12H17.469v9.45C17.469-1.89,18.873.378,22.113.378ZM34.83,0h3.861V-3.78l2.187-2.484L44.55,0h4.293L43.119-8.937l5.238-6.183h-4.32L38.8-8.586h-.108v-12.96H34.83ZM56.943.378A9.538,9.538,0,0,0,62.235-1.3l-1.35-2.43a6.232,6.232,0,0,1-3.4,1.053A3.973,3.973,0,0,1,53.3-6.453h9.315A7.376,7.376,0,0,0,62.8-8.262c0-4.185-2.16-7.236-6.318-7.236-3.618,0-7.047,3.051-7.047,7.965C49.437-2.565,52.731.378,56.943.378Zm-3.7-9.45c.3-2.214,1.7-3.348,3.294-3.348,1.944,0,2.862,1.3,2.862,3.348ZM66.069,0h3.942V-10.4a4.412,4.412,0,0,1,2.916-1.7c1.431,0,2.106.837,2.106,3.159V0H79V-10.4a4.412,4.412,0,0,1,2.916-1.7c1.431,0,2.106.837,2.106,3.159V0h3.969V-9.423c0-3.807-1.485-6.075-4.7-6.075-1.971,0-3.429,1.188-4.806,2.646A4.115,4.115,0,0,0,74.331-15.5a6.366,6.366,0,0,0-4.644,2.4h-.108l-.27-2.025h-3.24Zm30.51.378a6.077,6.077,0,0,0,4.833-2.538h.108l.3,2.16h3.24V-15.12h-3.969V-4.914c-1.026,1.35-1.836,1.89-3.078,1.89-1.458,0-2.106-.81-2.106-3.159V-15.12H91.935v9.45C91.935-1.89,93.339.378,96.579.378Zm14.958,0a2.487,2.487,0,0,0,2.484-2.592,2.487,2.487,0,0,0-2.484-2.592,2.481,2.481,0,0,0-2.457,2.592A2.481,2.481,0,0,0,111.537.378Zm6.534,5.427h3.942V1.215l-.108-2.484A5.62,5.62,0,0,0,125.658.378c3.321,0,6.426-3,6.426-8.181,0-4.644-2.214-7.7-5.94-7.7a7.178,7.178,0,0,0-4.455,1.944h-.108l-.27-1.566h-3.24Zm6.7-8.694a4.231,4.231,0,0,1-2.754-1.134v-6.642a4.263,4.263,0,0,1,3-1.566c2.079,0,3,1.593,3,4.482C128.007-4.455,126.6-2.889,124.767-2.889ZM138.807.378a7.11,7.11,0,0,0,4.563-2h.081l.3,1.62h3.24V-8.829c0-4.374-1.971-6.669-5.8-6.669a12.079,12.079,0,0,0-6.318,2l1.431,2.619a8.543,8.543,0,0,1,4.158-1.431c1.863,0,2.511,1.134,2.565,2.619-6.075.648-8.694,2.349-8.694,5.589A4.3,4.3,0,0,0,138.807.378Zm1.3-3.105c-1.161,0-2-.513-2-1.7,0-1.35,1.242-2.349,4.914-2.835v3.051A4.008,4.008,0,0,1,140.1-2.727Zm16.254,9.288c5.049,0,8.208-2.322,8.208-5.373,0-2.646-1.971-3.78-5.616-3.78h-2.565c-1.782,0-2.376-.432-2.376-1.242a1.506,1.506,0,0,1,.648-1.3,6.439,6.439,0,0,0,1.944.351c3.24,0,5.832-1.728,5.832-5.13a3.8,3.8,0,0,0-.7-2.3h2.592V-15.12h-5.454A7.113,7.113,0,0,0,156.6-15.5c-3.213,0-6.1,1.917-6.1,5.481a5,5,0,0,0,2,3.942v.108a3.752,3.752,0,0,0-1.674,2.835A2.866,2.866,0,0,0,152.2-.594v.135a3.671,3.671,0,0,0-2.16,3.132C150.039,5.346,152.793,6.561,156.357,6.561Zm.243-13.8c-1.323,0-2.376-1-2.376-2.781S155.25-12.8,156.6-12.8s2.349,1,2.349,2.781S157.923-7.236,156.6-7.236Zm.351,11.286c-2.214,0-3.618-.729-3.618-2a2.268,2.268,0,0,1,1-1.755,8.534,8.534,0,0,0,2.106.216h1.836c1.62,0,2.511.27,2.511,1.35C160.785,3.051,159.219,4.05,156.951,4.05ZM173.205.378A9.538,9.538,0,0,0,178.5-1.3l-1.35-2.43a6.232,6.232,0,0,1-3.4,1.053,3.973,3.973,0,0,1-4.185-3.78h9.315a7.376,7.376,0,0,0,.189-1.809c0-4.185-2.16-7.236-6.318-7.236-3.618,0-7.047,3.051-7.047,7.965C165.7-2.565,168.993.378,173.205.378Zm-3.7-9.45c.3-2.214,1.7-3.348,3.294-3.348,1.944,0,2.862,1.3,2.862,3.348Z" transform="translate(530 310)" fill="#fff" />
        </g>
      </svg>
    </div>
  </div>
  <!---OP背景（左→右）-->
  <div class="splashbg"></div>
  <div id="contents">
    <!-- TOP上部のFV -->
    <div class="fixed">
      <div class="fv-box">
        <div class="fv-bg"><img src="<?php echo get_template_directory_uri(); ?>/img/fv01.jpg"></div>
        <div class="fv-bg"><video src="<?php echo get_template_directory_uri(); ?>/img/fv02.mp4" playsinline autoplay loop muted></video></div>
      </div>
    </div>
    <!-- floating icon -->
    <div class="floating">
      <!-- アンカーリンク（問い合わせ） -->
      <div><a href="#form"><i class="fas fa-envelope yureru-j f-mail"></i></a>
      </div>
      <!-- リンク（Twitter） -->
      <div><a href="https://twitter.com/game_yukemu" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter yureru-j f-twitter"></i></a>
      </div>
    </div>
    <!-- TOPへ戻る -->
    <div class="return-top"><a id="page_top" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/top-arrow.svg"></a></div>
    <!-- グロナビ -->
    <header id="global-nav" class="header-pc">
      <!-- header-left（ロゴ） -->
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
      <!-- header-right（メニュー）【PC】 -->
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
            <li class="single-menu"> <a href="https://yukeblog.org/activities">YouTube<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                  <path d="M10,0A10,10,0,1,0,20,10,10.011,10.011,0,0,0,10,0Zm5.742,8.311L9.46,14.593a1.414,1.414,0,0,1-2,0l-3.2-3.2a1.414,1.414,0,1,1,2-2l2.2,2.2,5.282-5.282a1.414,1.414,0,0,1,2,2Z" />
                </svg></a></li>
          </ul>
        </li>
        <li class="parent-menu">
          <a href="https://yukeblog.org/blog/" class="blog">ブログ</a>
        </li>
      </ul>
      <!-- 検索ボックス【PC】 -->
      <div class="search">
        <i id="search" class="fas fa-search"></i>
        <div id="search-wrap">
          <form method="get" id="searchform" value="<?php the_search_query(); ?>" action="<?php bloginfo('url'); ?>">
            <input type="text" name="s" id="search-text" class="search-box-text-input js-search-box-text-input" placeholder="キーワードで検索" />
            <button id="searchsubmit" type="submit"></button>
          </form>
        </div>
      </div>
      <!-- ハンバーガーメニュー -->
      <div class="header-sp">
        <div class="openbtn1"><span></span><span></span><span></span></div>
      </div>
      <!-- グロナビ【SP】 -->
      <nav class="g-menu-sp">
        <ul>
          <li>
            <!-- 検索ボックス【SP】 -->
            <div class="search-sp">
              <div id="search-sp-wrap">
                <form method="get" id="searchform" value="<?php the_search_query(); ?>" action="<?php bloginfo('url'); ?>">
                  <input type="text" name="s" id="search-text" class="search-box-text-input js-search-box-text-input" placeholder="キーワードで検索" />
                  <button id="searchsubmit" type="submit"></button>
                </form>
              </div>
            </div>
          </li>
          <!-- メニュー【SP】 -->
          <li><a href="https://yukeblog.org/profile/">プロフィール</a></li>
          <li>
            <input id="acd-check" class="acd-check" type="checkbox">
            <label class="acd-label" for="acd-check">ポートフォリオ</label>
            <div class="acd-content">
              <a href="https://yukeblog.org/illustration/" class="acd-content-single">イラスト</a>
              <a href="https://yukeblog.org/dtp/" class="acd-content-single">DTP</a>
              <a href="https://yukeblog.org/web/" class="acd-content-single">WEB制作</a>
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

    <main>
      <section class="mv-pc">
        <!-- scrollアニメーション（TOPのみ） -->
        <div class="scrolldown1"><span>Scroll</span></div>
        <div class="container">
          <div class="mv-left">
            <h1>
              YUKE<br><span>BLOG</span>
            </h1>
            <div class="wrapper">
              <p>Wordpressテーマのコーディング<br class="smart-wrap">
                から行った自作のHPになります。<br class="smart-wrap">
              </p>
              <img src="<?php echo get_template_directory_uri(); ?>/img/yukem-icon.png">
            </div>
          </div>
          <div class="mv-right">
            <div class="wrapper">
              <div class="mv01"><a href="https://yukeblog.org/blog/"><img src="<?php echo get_template_directory_uri(); ?>/img/mv-blog.jpg" alt="MV画像"></a></div>
              <div class="btn">
                <a href="https://yukeblog.org/blog/">ブログ一覧<i class="far fa-arrow-alt-circle-right"></i></a>
              </div>
            </div>
            <div class="wrapper">
              <div class="mv01"><a href="https://www.youtube.com/channel/UC4q1AanILgOIUAwaFSSH1dQ" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/img/mv01.jpg" alt="MV画像"></a></div>
              <div class="btn">
                <a href="https://www.youtube.com/channel/UC4q1AanILgOIUAwaFSSH1dQ" target="_blank" rel="noopener noreferrer">YouTube<i class="far fa-arrow-alt-circle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php get_footer(); ?>