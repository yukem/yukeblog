<?php get_header(); ?>
<!-- main -->
<main>
  <div class="illustration-mv-pc">
    <div class="top">
      <h1>ILLUST<br>RATION</h1>
    </div>
    <div class="bottom fadeUpTrigger">
      <div class="container">
        <div class="wrapper">
          <div class="text01 fadeUpTrigger">
            <p class="appeal-illustration">イラスト制作</p>
            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/yukem-icon02.png">
          </div>
          <div class="text02">
            <p>Photoshopとクリスタを利用してイラストを描きました。
              アタリは3Dマネキンを使っています。
            </p>
          </div>
        </div>
        <img class="photo fadeUpTrigger" src="<?php echo get_template_directory_uri(); ?>/img/illustration01.png">
      </div>
    </div>
  </div>
  <section class="i-slide">
    <!-- Slider main container -->
    <div class="swiper-container swiper1 swiper-main">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/illustration_slide01.png"></div>
        <div class="swiper-slide"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/illustration_slide02.png"></div>
        <div class="swiper-slide"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/yukem-icon02.png"></div>
      </div>
      <!-- If we need navigation buttons -->
      <div class="swiper-button">

        <div class="slide-n-btn swiper-button-prev"></div>
        <div class="slide-p-btn swiper-button-next"></div>
      </div>

      <!-- If we need pagination -->
      <!-- <div class="swiper-pagination"></div> -->
      <!-- If we need scrollbar -->
    </div>
    <!-- Slider main container -->
    <div class="swiper-container swiper1 swiper-thumb">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="slide-btn swiper-slide "> <img class="icon1" src="<?php echo get_template_directory_uri(); ?>/img/illustration_slide01.png">
        </div>
        <div class="slide-btn swiper-slide"> <img class="icon2" src="<?php echo get_template_directory_uri(); ?>/img/illustration_slide02.png">
        </div>
        <div class="slide-btn swiper-slide"> <img class="icon3" src="<?php echo get_template_directory_uri(); ?>/img/yukem-icon02.png">
        </div>
        <div class="s-text-wrapper">
          <div id="s-active" class="slide-text s-01">
            <h2>波乗りさるちゃん</h2>
            <p>クリスタでアタリを取ってからフォトショップで描いています。</p>
          </div>
          <div class="slide-text s-02">
            <h2>アーミーさるちゃん</h2>
            <p>AWMはIllustratorで枠を取ってから着彩しています。</p>
          </div>
          <div class="slide-text s-03">
            <h2>coming soon</h2>
            <p>制作中</p>
          </div>
        </div>
      </div>
      <!-- If we need pagination -->
      <!-- <div class="swiper-pagination"></div> -->
    </div>
  </section>
  <section class="i-flow">
    <div class="container">
      <div class="illustration-wrapper">
        <div class="illustration-single">
          <?php
          $term = get_specific_posts('custom_illustration', 'custom_single_illustration', $term, -1);
          if ($term->have_posts()) :
            while ($term->have_posts()) : $term->the_post(); ?>
              <?php the_post_thumbnail('full', array('class' => 'illustration')); ?>
              <div class="i-content i-hidden">
                <?php the_post_thumbnail('full') ?>
                <p><?php echo get_the_excerpt(); ?></p>
                <div class="close">×</div>
              </div>
          <?php endwhile;
            wp_reset_postdata();
          endif;
          ?>
          <div class="mask i-hidden-modal"></div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>