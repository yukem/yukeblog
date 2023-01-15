<?php get_header(); ?>
<!-- main -->
<main>
  <div class="dtp-mv-pc">
    <div class="top">
      <h1>DTP</h1>
    </div>
    <div class="bottom fadeUpTrigger">
      <div class="container">
        <div class="wrapper">
          <div class="text01 fadeUpTrigger">
            <p class="appeal-illustration">DTP制作</p>
            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/yukem-icon02.png">
          </div>
          <div class="text02">
            <p>Photoshopとクリスタを利用してイラストを描きました。
              アタリは3Dマネキンを使っています。
            </p>
          </div>
        </div>
        <img class="photo fadeUpTrigger" src="<?php echo get_template_directory_uri(); ?>/img/dtp01.png">
      </div>
    </div>
  </div>
  <section class="movie-dtp">
  <video class="pc" src="<?php echo get_template_directory_uri(); ?>/img/movie1.mp4" playsinline autoplay loop muted></video>
  <video class="sp" src="<?php echo get_template_directory_uri(); ?>/img/movie1-sp.mp4" playsinline autoplay loop muted></video>
  </section>
  <section class="i-flow">
    <div class="container">
      <div class="illustration-wrapper">
        <div class="illustration-single">
          <?php
          $term = get_specific_posts('custom_dtp', 'custom_single_dtp', $term, -1);
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