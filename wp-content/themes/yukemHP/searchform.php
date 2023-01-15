<form method="get" id="searchform" value="<?php the_search_query(); ?>" action="<?php bloginfo('url'); ?>">
  <input type="text" name="s" id="s" class="search-box-text-input js-search-box-text-input" placeholder="キーワードで検索" />
  <button type="submit"><i class="fas fa-search"></i></button>
</form>