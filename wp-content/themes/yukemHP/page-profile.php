<?php get_header(); ?>
<!-- main -->
<main>
  <div class="profile-mv-pc">
    <div class="top">
      <h1>PRO<br>FILE</h1>
    </div>
    <!-- fadeUpTriggerで初期値透明 -->
    <div class="bottom fadeUpTrigger">
      <div class="container">
        <div class="wrapper fadeUpTrigger">
          <div class="text01">
            <!-- smart-wrapで改行 -->
            <p class="appeal">ゆけむのプロフィールページです。<br class="smart-wrap">
              色々な職種を渡り歩いたので、経験豊富なところが長所です。<br class="smart-wrap">
              Web制作関連の業務は一通り出来ます(/・ω・)/<br class="smart-wrap"></p>
            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/yukem-icon.png">
          </div>
          <div class="text02">
            <p>PROFILE<br>
              12月23日生まれ<br>
              出身地　：　大阪<br>
              現住所　：　東京<br><br>
              略歴<br>
              1.着物業界で販売<br>
              2.大手デベロッパーで営業<br>
              3.SIerでjaveプログラマー<br>
              4.事業会社でデザイナー<br>
              5.制作会社でディレクター<br>
              6.非公開</p>
          </div>
        </div>
        <img class="photo fadeUpTrigger" src="<?php echo get_template_directory_uri(); ?>/img/yuke.jpg">
      </div>
    </div>
  </div>
  <section class="p-list">
    <div class="youtube fadeUpTrigger02">
      <div class="youtube-left">
        <div class="youtube-01" alt="youtube-01">
          <img class="youtube-icon" src="<?php echo get_template_directory_uri(); ?>/img/youtube-icon.png">
        </div>
      </div>
      <div class="youtube-right">
        <h2>YouTube</h2>
        <p>YouTube活動をしています！
          ゲームの実況やリクエストにあったことを投稿しています。
          ジャンルはバラバラで統一感がないですが気ままに頑張っております。
          何か見てみたい動画があれば是非メッセージください(/・ω・)/
          撮れそうならチャレンジしますよー♪</p>
        <a class="btn" href="https://www.youtube.com/channel/UC4q1AanILgOIUAwaFSSH1dQ" target="_blank" rel="noopener noreferrer">YouTube<i class="far fa-arrow-alt-circle-right"></i></a>
      </div>
    </div>
    <div class="container">
      <div class="wrapper">
        <div class="contents-left">
          <div class="list-single bgextend bgLRextendTrigger">
            <div class="bgappearTrigger">
              <h2>ラジオ</h2>
              <p><span>Radio<img src="<?php echo get_template_directory_uri(); ?>/img/radio.svg"></span></p>
              <p>ラジオ活動をしています！
                約3年間頑張っています♪
                コンビでお話ししてます(/・ω・)/</p>
            </div>
          </div>
          <div class="list-single bgextend bgLRextendTrigger">
            <div class="bgappearTrigger">
              <h2>お仕事</h2>
              <p><span>Work<img src="<?php echo get_template_directory_uri(); ?>/img/work.png"></span></p>
              <p>空き時間にライティングをしています！
                たまにクラウドソーシングでお仕事をしたりしています！
                動画編集やコーディング（HTML,CSS,Wordpress,javascript,php)、デザイン、ライティング、ディレクション案件ならご相談ください。
                これからの目標は自分でどんどんコーディングしていくことです ！
                要件定義から、納品まで全て一人で完結することができます♪</p>
            </div>
          </div>
          <div class="list-single bgextend bgLRextendTrigger">
            <div class="bgappearTrigger">
              <h2>趣味</h2>
              <p><span>Hobby<img src="<?php echo get_template_directory_uri(); ?>/img/hobby.png"></span></p>
              <p>趣味はゲームと将棋、筋トレ、お菓子作りです！
                クラッシュロワイヤルというゲームをずっとしていて、
                現在はトロフィー7300です(/・ω・)/将棋は2級です。</p>
            </div>
          </div>
        </div>
        <!-- スライダー（Swiper）を利用 -->
        <div class="contents-right">
          <div class="swiper-container swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/radio-thumbnail.jpg"></div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/radio-thumbnail02.jpg"></div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/radio-thumbnail03.jpg"></div>
            </div>
            <div class="swiper-pagination swiper-pagination-black"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>