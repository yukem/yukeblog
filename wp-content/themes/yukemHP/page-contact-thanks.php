<?php get_header(); ?>
<main>
 <!-- contact -->
<section class="contact contact-thanks" id="form">
  <div class="design">
    <span class="left">CONTACTCONTACT</span>
    <span class="right">CONTACTCONTACT</span>
  </div>
  <div class="container">
    <div class="heading">
      <div class="bgextend bgLRextendTrigger">
        <div class="bgappearTrigger">
          <h2>お問い合わせ</h2>
          <p>ご意見やお仕事のご依頼などは以下よりご連絡ください。</p>
        </div>
      </div>
      <div class="info">
        <p class="input">情報入力</p>
        <p class="check">内容確認</p>
        <p class="thanks">完了</p>
      </div>
    </div>
    <div class="contact-form">
      <div class="wrapper">
        <h2>お問い合わせありがとうございました！</h2>
      </div>
    </div>
</section>
</main>
<footer>
  <div class="container">
    <div class="footer-left">
      <a class="footer-left" href="https://yukeblog.org/">
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
      <div><a href="#form"><i class="fas fa-envelope yureru-j"></i></a></div>
      <div><a href="https://twitter.com/game_yukemu" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter yureru-j"></i></a></div>
    </div>
    <div class="footer-right">
      <div class="culmn">
        <a href="https://yukeblog.org/" class="bold">ホーム</a>
      </div>
      <div class="culmn">
        <a href="https://yukeblog.org/profile/" class="bold">プロフィール</a>
      </div>
      <div class="culmn">
        <input id="f-acd-check" class="acd-check" type="checkbox">
        <label class="acd-label" for="f-acd-check">ポートフォリオ</label>
        <div class="acd-content">
          <a class="bold parent">ポートフォリオ</a>
          <a class="acd-content-single hide">イラスト</a>
          <a class="acd-content-single hide">DTP</a>
          <a class="acd-content-single hide">WEB制作</a>
          <a href="https://yukeblog.org/portfolio/" class="acd-content-single">yukemu.page制作</a>
        </div>
      </div>
      <div class="culmn">
        <input id="f-acd-check2" class="acd-check" type="checkbox">
        <label class="acd-label" for="f-acd-check2">活動</label>
        <div class="acd-content">
          <a class="bold parent">活動</a>
          <a class="acd-content-single hide">クラウドソーシング</a>
          <a class="acd-content-single hide">ラジオ</a>
          <a class="acd-content-single hide">コンビ活動</a>
          <a href="https://yukeblog.org/activities/" class="acd-content-single">YouTube</a>
        </div>
      </div>
      <div class="culmn">
        <a href="https://yukeblog.org/blog/" class="bold">ブログ</a>
      </div>
    </div>
  </div>
  <p class="line"><small>Copyright&copy; yukemu All rights reserved.</small></p>
</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- jQueryライブラリの読み込み-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>