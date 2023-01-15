<?php get_header(); ?>
<!-- main -->
<main>
  <div class="web-mv-pc">
    <div class="top">
      <h1>WEB</h1>
    </div>
    <div class="bottom fadeUpTrigger">
      <div class="container">
        <div class="wrapper">
          <div class="text01 fadeUpTrigger">
            <p class="appeal-illustration">WEB制作</p>
            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/img/yukem-icon02.png">
          </div>
          <div class="text02">
            <p>Photoshopとクリスタを利用してイラストを描きました。
              アタリは3Dマネキンを使っています。
            </p>
          </div>
        </div>
        <img class="photo fadeUpTrigger" src="<?php echo get_template_directory_uri(); ?>/img/web01.png">
      </div>
    </div>
  </div>

  <section class="wire-web">
  <img class="wire-img" src="<?php echo get_template_directory_uri(); ?>/img/wire-web.jpg">
  </section>

  <section class="i-flow">
    <div class="container">
      <div class="illustration-wrapper">
        <div class="illustration-single">
          <?php
          $term = get_specific_posts('custom_web', 'custom_single_web', $term, -1);
          if ($term->have_posts()) :
            while ($term->have_posts()) : $term->the_post(); ?>
              <?php the_post_thumbnail('full', array('class' => 'web')); ?>
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