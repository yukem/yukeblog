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
        <p class="number">
          <?php the_search_query(); ?> の検索結果
        </p>
      </div>
      <div class="container">
        <div class="article">
          <?php if (have_posts() && get_search_query()) :
            while (have_posts()) :
              the_post(); ?>
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
            <?php endwhile; ?>
          <?php else : ?>
            <div class="col-full">
              <div class="wrap-col">
                <p>検索キーワードに該当する記事がありませんでした。</p>
              </div>
            </div>
          <?php endif; ?>

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