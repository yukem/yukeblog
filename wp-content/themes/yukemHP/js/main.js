
// =========================
// jQuery
// =========================
// webページのモーダルウィンドウ
$(function () {
  $('.web').click(function () {
    $('.mask').removeClass('i-hidden-modal');
    $(this).next().removeClass('i-hidden');
    scrollPosition = $(window).scrollTop();
    $('body').addClass('fixed no-scroll').css({ 'top': -scrollPosition });
  });
});
// Illustratorページのモーダルウィンドウ
$(function () {
  $('.illustration').click(function () {
    $('.mask').removeClass('i-hidden-modal');
    $(this).next().removeClass('i-hidden');
    scrollPosition = $(window).scrollTop();
    $('body').addClass('fixed no-scroll').css({ 'top': -scrollPosition });
  });
});
// モーダルタップで非表示
$(function () {
  $('.mask,.close').click(function () {
    $('.mask').addClass('i-hidden-modal');
    $('.i-content').addClass('i-hidden');
    $('body').removeClass('fixed no-scroll').css({ 'top': 0 });
    window.scrollTo(0, scrollPosition);
  });
});
// illustrationページのスワイパー
$(function () {
  $('.swiper-button-prev').click(function () {
    var element = document.getElementById('s-active');
    var classes = element.classList.value;
    if (classes == "slide-text s-02") {
      element.removeAttribute("id");
      $('.s-01').attr('id', 's-active');
    } else if (classes == "slide-text s-03") {
      element.removeAttribute("id");
      $('.s-02').attr('id', 's-active');
    } else {
      ;
    }
  });
});
$(function () {
  $('.swiper-button-next').click(function () {
    var element = document.getElementById('s-active');
    var classes = element.classList.value;
    if (classes == "slide-text s-01") {
      element.removeAttribute("id");
      $('.s-02').attr('id', 's-active');
    } else if (classes == "slide-text s-02") {
      element.removeAttribute("id");
      $('.s-03').attr('id', 's-active');
    } else {
      ;
    }
  });
});
$(function () {
  $('.slide-btn').click(function () {
    var element = document.getElementById('s-active');
    var className = event.target.className;
    if (className == "icon1") {
      element.removeAttribute("id");
      $('.s-01').attr('id', 's-active');
    } else if (className == "icon2") {
      element.removeAttribute("id");
      $('.s-02').attr('id', 's-active');
    } else if (className == "icon3") {
      element.removeAttribute("id");
      $('.s-03').attr('id', 's-active');
    } else {
      ;
    }
  });
});
// 最新記事のカルーセル
$(function () {
  $('#new-next').click(function () {
    var style = window.getComputedStyle($('#hidden1').get(0));
    var matrix = new WebKitCSSMatrix(style.webkitTransform);
    console.log(matrix.m41);
    if (matrix.m41 == 0) {
      $('.hidden1').css('transform', 'translateX(-286px)');
    } else if (matrix.m41 == -286) {
      $('.hidden1').css('transform', 'translateX(-573px)');
    } else {
      ;
    }
  });
  $('#new-prev').click(function () {
    var style = window.getComputedStyle($('#hidden1').get(0));
    console.log(style);
    var matrix = new WebKitCSSMatrix(style.webkitTransform);
    console.log(matrix.m41);
    if (matrix.m41 == -286) {
      $('.hidden1').css('transform', 'translate(0)');
    } else if (matrix.m41 == -573) {
      $('.hidden1').css('transform', 'translateX(-286px)');
    } else {
      ;
    }
  });
  // 関連記事のカルーセル
  $('#connection-next').click(function () {
    var style = window.getComputedStyle($('#hidden2').get(0));
    var matrix = new WebKitCSSMatrix(style.webkitTransform);
    console.log(matrix.m41);
    if (matrix.m41 == 0) {
      $('.hidden2').css('transform', 'translateX(-286px)');
    } else if (matrix.m41 == -286) {
      $('.hidden2').css('transform', 'translateX(-573px)');
    } else {
      ;
    }
  });
});
$('#connection-prev').click(function () {
  var style = window.getComputedStyle($('#hidden2').get(0));
  var matrix = new WebKitCSSMatrix(style.webkitTransform);
  console.log(matrix.m41);
  if (matrix.m41 == -286) {
    $('.hidden2').css('transform', 'translate(0)');
  } else if (matrix.m41 == -573) {
    $('.hidden2').css('transform', 'translateX(-286px)');
  } else {
    ;
  }
});
// ハンバーガーメニュー
$(function () {
  $('.header-sp').click(function () {
    $(this).toggleClass('active');
    if ($(this).hasClass('active')) {
      $('.g-menu-sp').addClass('active');
      $('.mask').removeClass('hidden');
      scrollPosition = $(window).scrollTop();
      $('body').addClass('fixed').css({ 'top': -scrollPosition });

    } else {
      $('.g-menu-sp').removeClass('active');
      $('.mask').addClass('hidden');
      $('body').removeClass('fixed').css({ 'top': 0 });
      window.scrollTo(0, scrollPosition);
    }
  });
});
// ハンバーガーメニューのモーダルタップ非表示
$(function () {
  $('.mask').click(function () {
    $('.g-menu-sp').removeClass('active');
    $('.mask').addClass('hidden');
    $('.header-sp').removeClass('active');
    $('.openbtn1').removeClass('active');
    $('body').removeClass('fixed').css({ 'top': 0 });
    window.scrollTo(0, scrollPosition);
  });
});
// お問い合わせクリックでハンバーガーメニューを非表示
$(function () {
  $('#contact').click(function () {
    $('.g-menu-sp').removeClass('active');
    $('.mask').addClass('hidden');
    $('.header-sp').removeClass('active');
    $('.openbtn1').removeClass('active');
  });
});
$(function () {
  $(".openbtn1").click(function () {
    $(this).toggleClass('active');
  });
});
// ポートフォリオ（yukemu.page制作ページ）のフローアニメーション
$(function () {
  function FlowAnime() {
    $('.heading').each(function () {
      var elemPos = $(this).offset().top + 350;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight) {
        $(this).attr('id', 'now');
      } else {
        $(this).attr('id', 'stn');
      }
    });
    $('.line-flow').each(function () {
      var elemPos = $(this).offset().top + 350;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight) {
        $(this).attr('id', 'line');
      } else {
        $(this).attr('id', 'line-stn');
      }
    });
  }
  $(window).scroll(function () {
    FlowAnime();
  });
});
// BOXアニメーション
$(function () {
  function fadeAnime() {
    $('.fadeUpTrigger').each(function (i) {
      var elemPos = $(this).offset().top + 50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight) {
        var target = this;
        setTimeout(function () {
          $(target).addClass('fadeUp');
        }, 300 * i);
      } else {
      }
    });
  }
  $(window).scroll(function () {
    fadeAnime();
  });
});
$(function () {
  function fadeAnime02() {
    $('.fadeUpTrigger02').each(function () {
      var elemPos = $(this).offset().top + 50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight) {
        $(this).addClass('fadeUp');
      } else {
      }
    });
  }
  $(window).scroll(function () {
    fadeAnime02();
  });

});
// h2アニメーション
$(function () {
  // 前面のアニメーション
  function BgFadeAnime() {
    $('.bgLRextendTrigger').each(function () {
      var elemPos = $(this).offset().top + 50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight) {
        $(this).addClass('bgLRextend');
      } else {
        // $(this).removeClass('bgLRextend');// 表示する度に動かしたい場合はコメント解除
      }
    });
    // 文字の表示
    $('.bgappearTrigger').each(function () {
      var elemPos = $(this).offset().top + 50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight) {
        $(this).addClass('bgappear');
      } else {
        // $(this).removeClass('bgappear');// 表示する度に動かしたい場合はコメント解除
      }
    });
  }
  $(window).scroll(function () {
    BgFadeAnime();
  });

});
//ロゴアニメーションの描画
$(function () {
  var stroke;
  stroke = new Vivus('mask', {//アニメーションをするIDの指定
    start: 'manual',//自動再生をせずスタートをマニュアルに
    type: 'scenario-sync',// アニメーションのタイプを設定
    duration: 40,//アニメーションの時間設定。数字が小さくなるほど速い
    forceRender: false,//パスが更新された場合に再レンダリングさせない
    animTimingFunction: Vivus.EASE,//動きの加速減速設定
  }, function () {
    $("#mask").attr("class", "done");//描画が終わったらdoneというクラスを追加
  });
  $(window).on('load', function () {
    stroke.play();//SVGアニメーションの実行
    $("#splash_logo").delay(6000).fadeOut('slow');//ロゴを3秒（3000ms）待機してからフェイドアウト
    $("#splash").delay(2000).fadeOut('slow', function () {
      $('body').addClass('appear');//フェードアウト後bodyにappearクラス付与
    });//ローディング画面を3秒（3000ms）待機してからフェイドアウト
    //=====ここから背景が伸びた後に動かしたいJSをまとめたい場合は
    $('.splashbg').on('animationend', function () {
      //この中に動かしたいJSを記載
    });
  });
});
$(function () {
  // グローバルメニュー子要素
  $('.portfolio,.fast').hover(
    function () {
      $('#fast').addClass('active');
    },
    function () {
      $('#fast').removeClass('active');
    }
  );
  $('.activities,.second').hover(
    function () {
      $('#second').addClass('active');
    },
    function () {
      $('#second').removeClass('active');
    }
  );
  // 検索ボックス
  $('#search').click(function () {
    $("#search-wrap").toggleClass('panelactive');
    $('#search-text').focus();
    if ($(this).hasClass('fa-search')) {
      $(this).removeClass('fa-search');
      $(this).addClass('fa-times');
    } else if ($(this).hasClass('fa-times')) {
      $(this).removeClass('fa-times');
      $(this).addClass('fa-search');
    }
  });
  //背景画像のパララックス
  $(window).on('scroll', function () {
    var position = $('#app').offset();
    var scrollTop = $(window).scrollTop();
    var position = position.top - 1000;
    console.log(position);
    var relative = position - scrollTop;
    var bgPosition = relative / 2;
    if (bgPosition) {
      $('#app').css('background-position', 'center top ' + bgPosition + 'px');
    }
  });
  // TOPへ戻るボタンフェードイン
  $(function () {
    var appear = false;
    var pagetop = $('#page_top');
    $(window).scroll(function () {
      if ($(this).scrollTop() > 171) {  
        if (appear == false) {
          appear = true;
          pagetop.stop().animate({
            'bottom': '20px' 
          }, 300); 
        }
      } else {
        if (appear) {
          appear = false;
          pagetop.stop().animate({
            'bottom': '-80px' 
          }, 300); 
        }
      }
    });
  });
  // youtubeu埋め込み・軽量化
  $(function () {
    $('.youtube').each(function () {
      var iframe = $(this).children('iframe');
      var url = iframe.attr('data-src');
      var id = url.match(/[\/?=]([a-zA-Z0-9_-]{11})[&\?]?/)[1];
      iframe.before('<img src="http://img.youtube.com/vi/' + id + '/mqdefault.jpg" />').remove();
      $(this).on('click', function () {
        $(this).after('<div class="youtube"><iframe src="https://www.youtube.com/embed/' + id + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>').remove();
      });
    });
  });
  // アンカーリンクスクロール
  $('a[href^="#"]').click(function () {
    var headerHight = 56;
    var speed = 500; 
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - headerHight;
    $('html,body').animate({ scrollTop: position }, speed, 'swing');
    return false;
  });
  // ヘッダー固定用
  var navPos = jQuery('#global-nav').offset().top; //位置
  var navHeight = jQuery('#global-nav').outerHeight(); //高さ
  jQuery(window).on('scroll', function () {
    if (jQuery(this).scrollTop() > navPos) {
      jQuery('body').css('padding-top', navHeight);
      jQuery('#global-nav').addClass('g-fixed');
    } else {
      jQuery('body').css('padding-top', 0);
      jQuery('#global-nav').removeClass('g-fixed');
    }
  });
});
// =========================
// javascript
// =========================
// 厳格モード※jquery上部に設置すると挙動がおかしくなるので注意
'use strict'
{
  //スワイパーオプション
  const mySwiper = new Swiper('.swiper', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,
    speed: 500,
    centeredSlides: true,
    autoplay: {
      delay: 2000,
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: 'true',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 1,
        spaceBetween: 0,
        autoplay: {
          delay: 2000,
        }
      },
    },
  });
  const mySwiper1 = new Swiper('.swiper-thumb', {
    slidesPerView: 3,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,

  });
  const mySwiper2 = new Swiper('.swiper-main', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      768: {
        pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable: 'true',
        },

      },
    },
    thumbs: {
      swiper: mySwiper1
    }
  });
}