<?php get_header(); ?>
  <!-- main -->
  <main>
    <div class="portfolio-mv-pc">
      <div class="top">
        <h1>PORT<br>FOLIO</h1>
      </div>
      <div class="bottom fadeUpTrigger">
        <div class="container">
          <div class="wrapper">
            <div class="text01 fadeUpTrigger">
              <p class="appeal-portfolio">Yukemu.page制作</p>
              <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/yukem-icon.png">
            </div>
            <div class="text02">
              <p>このホームページ「Yukemu.page」は、構成案からコーディングまで
                全て一人で制作しています。
                フラットなため、今回はXDのみでデザインしています！</p>
            </div>
          </div>
          <img class="photo fadeUpTrigger" src="<?php echo get_template_directory_uri(); ?>/img/portfolio01.jpg">
        </div>
      </div>
    </div>
    <section class="p-flow">
      <div class="container">
        <div id="stn" class="heading">
          <div id="line" class="line-flow">
            <h2 class="bgextend bgLRextendTrigger">
              <div class="bgappearTrigger"><span>01</span>スケジュール</div>
            </h2>
            <p>SCHEDULE</p>
          </div>
        </div>
        <p>スケジュールをスプレッドシート（エクセル）にて作成しました。
          一人で制作しているため、各工程の工数算出が容易になります！コミュニケーションコストが不要であることもメリットです(/・ω・)/
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/schedule.jpg" class="fadeUpTrigger">
        <div id="stn" class="heading">
          <div id="line" class="line-flow">
            <h2 class="bgextend bgLRextendTrigger">
              <div class="bgappearTrigger"><span>02</span>構成案・デザイン</div>
            </h2>
            <p>DESIGN</p>
          </div>
        </div>
        <p>今回はスピード重視でXDのみで完結しました！必要に応じて、IllustratorやPhotoshopも利用します( ｀ー´)ノ
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/design.jpg" class="fadeUpTrigger">
        <div id="stn" class="heading">
          <div id="line" class="line-flow">
            <h2 class="bgextend bgLRextendTrigger">
              <div class="bgappearTrigger"><span>03</span>コーディング</div>
            </h2>
            <p>CODING</p>
          </div>
        </div>
        <p>VSコードで構築しています！言語はHTMLとCSS(Sass)、javascript(部分的にJquery,swiper)等を使いました('ω')ノ　全ページWordpress化を行った自作テーマとなっております。(/・ω・)/
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/coding.jpg" class="fadeUpTrigger">
      </div>
    </section>
      <?php get_footer(); ?>