<?php get_header(); ?>
<main>
  <div class="blog-single-mv-pc">
    <section class="blog-list">
      <div class="container">
        <div class="article-single">
          <article <?php post_class('mycontainer'); ?>>
            <div class="myposthead">
              <h1><?php the_title(); ?></h1>
              <div class="wrap">
                <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                  <?php echo esc_html(get_the_date()); ?>
                </time>
                <?php the_category(); ?>
              </div>
            </div>
            <?php the_post_thumbnail(); ?>
            <?php the_content(); ?>
            <aside class="myshare">
              <h2><span class="dashicons dashicons-share"></span>SHARE</h2>
              <div class="mypostlist">
                <a href="https://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" class="mytwitter" onclick="window.open(this.href,'new','width=500,height=400');return false;">
                  <span class="dashicons dashicons-twitter"></span>
                  <span class="screen-reader-text">Twitter</span>
                </a>
                <a href="https://www.facebook.com/share.php?u=<?php echo urlencode(get_permalink()); ?>" class="myfacebook" onclick="window.open(this.href,'new','width=500,height=400');return false;">
                  <span class="dashicons dashicons-facebook-alt"></span>
                  <span class="screen-reader-text">Facebook</span>
                </a>
              </div>
            </aside>
            <?php the_post_navigation(array(
              'prev_text' => '前の記事へ',
              'next_text' => '次の記事へ',
            )); ?>
        </div>
        <div class="aside">
          <div class="wrapper">
            <span class="aside-category">最新記事</span>
            <?php if (is_active_sidebar('sidebar-1')) : ?>
              <?php dynamic_sidebar('sidebar-1'); ?>
            <?php endif; ?>
            <span class="aside-category">カテゴリー</span>
            <?php if (is_active_sidebar('sidebar-2')) : ?>
              <?php dynamic_sidebar('sidebar-2'); ?>
            <?php endif; ?>
            <span class="aside-category">月別</span>
            <?php if (is_active_sidebar('sidebar-3')) : ?>
              <?php dynamic_sidebar('sidebar-3'); ?>
            <?php endif; ?>
            <span class="aside-twitter">Twitter</span>
            <a class="twitter-timeline" data-width="220" data-height="338" data-theme="dark" href="https://twitter.com/game_yukemu?ref_src=twsrc%5Etfw">Tweets by game_yukemu</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <a href="https://twitter.com/game_yukemu?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @game_yukemu</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
          <div class="ad">
            <a href="https://px.a8.net/svt/ejp?a8mat=3N68S3+28YZ1U+ONS+TS3OI" rel="nofollow">株歴40年超のプロが今、買うべきと考える銘柄</a>
            <amp-pixel src="https://www11.a8.net/0.gif?a8mat=3N68S3+28YZ1U+ONS+TS3OI" layout="nodisplay"></amp-pixel>
            <a href="https://px.a8.net/svt/ejp?a8mat=3N68S3+28YZ1U+ONS+TVQUP" rel="nofollow">
              <img border="0" width="336" height="280" alt="" src="https://www20.a8.net/svt/bgt?aid=220321011136&wid=001&eno=01&mid=s00000003196005019000&mc=1"></a>
            <img border="0" width="1" height="1" src="https://www11.a8.net/0.gif?a8mat=3N68S3+28YZ1U+ONS+TVQUP" alt="">
            <a href="https://px.a8.net/svt/ejp?a8mat=3N68S2+DSJJAQ+1WP2+6AJV6" rel="nofollow">FXを始めるなら【DMM FX】！</a>
            <img border="0" width="1" height="1" src="https://www17.a8.net/0.gif?a8mat=3N68S2+DSJJAQ+1WP2+6AJV6" alt="">
            <a href="https://px.a8.net/svt/ejp?a8mat=3N68S2+DSJJAQ+1WP2+6D4GH" rel="nofollow">
              <img border="0" width="300" height="250" alt="" src="https://www26.a8.net/svt/bgt?aid=220321010834&wid=001&eno=01&mid=s00000008903001069000&mc=1"></a>
            <img border="0" width="1" height="1" src="https://www17.a8.net/0.gif?a8mat=3N68S2+DSJJAQ+1WP2+6D4GH" alt="">
            <a href="https://px.a8.net/svt/ejp?a8mat=3N68S2+DTQEIA+50+2HFY7M" rel="nofollow">サーバーセットでお得</a>
            <img border="0" width="1" height="1" src="https://www19.a8.net/0.gif?a8mat=3N68S2+DTQEIA+50+2HFY7M" alt="">
            <a href="https://px.a8.net/svt/ejp?a8mat=3N68S2+DTQEIA+50+2HHNXT" rel="nofollow">
              <img border="0" width="300" height="250" alt="" src="https://www29.a8.net/svt/bgt?aid=220321010836&wid=001&eno=01&mid=s00000000018015031000&mc=1"></a>
            <img border="0" width="1" height="1" src="https://www16.a8.net/0.gif?a8mat=3N68S2+DTQEIA+50+2HHNXT" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- blog -->
    <section id="app-connection" class="new-blog">
      <div class="container">
        <h2 class="bgextend bgLRextendTrigger">
          <div class="bgappearTrigger">関連記事</div>
        </h2>
      </div>
      <div class="thumbnail">
        <ul class="slider">
          <div class="wrapper-new-btn">
            <i id="connection-next" class="far fa-arrow-alt-circle-right"></i>
            <i id="connection-prev" class="far fa-arrow-alt-circle-right left"></i>
          </div>
          <div id="hidden2" class="hidden2">
            <?php
            // カテゴリーが複数設定されている場合は、どれかをランダムに取得
            $categories = wp_get_post_categories($post->ID, array('orderby' => 'rand'));
            //表示したい記事要素を設定
            if ($categories) {
              $args = array(
                'category__in' => array($categories[1]), // カテゴリーのIDで記事を取得
                'post__not_in' => array($post->ID), // 表示している記事は除外する
                'showposts' => 10, // 取得したい記事数
                'caller_get_posts' => 1, // 取得した記事を1番目から表示する
                'orderby' => 'rand' // ランダムで取得する
              );
              $my_query = new WP_Query($args);
              if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                  $my_query->the_post();
            ?>
                  <li class="fadeUpTrigger">
                    <div class="wrapper"><a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                          <figure>
                            <?php the_post_thumbnail(); ?>
                          </figure>
                        <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/img/youtube-01.jpg" alt="仮イメージ" />
                        <?php endif; ?>
                      </a></div>
                    <p><?php
                        if (mb_strlen($post->post_title, 'UTF-8') > 14) {
                          $title = mb_substr($post->post_title, 0, 14, 'UTF-8');
                          echo $title . '…';
                        } else {
                          echo $post->post_title;
                        }
                        ?></p>
                    <div class="sub">
                      <p class="date"><time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>"><?php echo esc_html(get_the_date()); ?>
                        </time><?php the_category(); ?></p>
                    </div>
                  </li>
                <?php }
                wp_reset_query();
              } else { ?>
                <p class="no-related">関連記事は今のところありません(;´∀｀)</p>
            <?php }
            } ?>
          </div>
        </ul>
      </div>
    </section>
    <?php get_footer(); ?>