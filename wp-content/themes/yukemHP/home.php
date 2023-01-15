<!-- ※※※※※※※※※※※※※※※※※※※※ -->
<!-- blogページです -->
<!-- ※※※※※※※※※※※※※※※※※※※※ -->
<?php get_header(); ?>
<main>
  <div class="blog-mv-pc">
    <div class="top">
      <h1>BLOG</h1>
    </div>
    <div class="bottom">
      <div class="container">
        <div class="wrapper">
          <div class="text01">
            <p class="appeal-portfolio">ブログ</p>
            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/yukem-icon.png">
          </div>
        </div>
        <div class="search-box">
          <div class="search">
            <?php if (is_active_sidebar('sidebar-4')) : ?>
              <?php dynamic_sidebar('sidebar-4'); ?>
            <?php endif; ?>
          </div>
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
    <section class="blog-list">
      <div class="info">
        <p class="category"><span class="sel-category">表示中</span><?php the_archive_title(); ?></p>
        <p class="number">
          <?php if (have_posts()) :
            my_result_count();  // ここら辺で表示します
            while (have_posts()) :
              the_post();
            /* do stuff */
            endwhile;
          else :
          /* Nothing Found */
          endif; ?>
        </p>
      </div>
      <div class="container">
        <div class="article">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <article <?php post_class('single'); ?>>
                <div class="inner">
                  <a href="<?php the_permalink(); ?>" class="single">
                    <?php if (has_post_thumbnail()) : ?>
                      <figure>
                        <?php the_post_thumbnail(); ?>
                      </figure>
                    <?php else : ?>
                      <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/youtube-01.jpg" alt="仮イメージ" />
                      </figure>
                    <?php endif; ?>
                    <!-- <img src="img/thumbnail-blog.jpg"> -->
                    <div class="text">
                      <h2><?php the_title(); ?></h2>
                      <p class="sub"> <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                          <?php echo esc_html(get_the_date()); ?>
                        </time></p>
                      <p class="content"><?php print mb_strimwidth(strip_tags(get_the_content()), 0, 100, "…", "UTF-8"); ?></p>
                    </div>
                  </a>
                  <div class="category-1">
                    <?php the_category(); ?>
                  </div>
                </div>
              </article>
          <?php endwhile;
          endif; ?>
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
      <div class="pagination">
        <?php the_posts_pagination(array(
          'prev_text' => '<span>＜</span><span class="screen-reader-text">前へ</span>',
          'next_text' => '<span class="screen-reader-text">次へ</span><span>＞</span>'
        )); ?>
      </div>
    </section>
    <?php get_footer(); ?>