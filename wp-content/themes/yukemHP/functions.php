<?php
function mytheme_setup()
{
  // theme.min.cssを読み込むセットアップ
  // (このテーマで適用されるスタイルは→「コード/整形済みテキスト/プルクオート/引用/検索/区切り/テーブル/グループ/画像/オーディオ/ビデオ/埋め込みキャプション)
  add_theme_support('wp-block-styles');
  // 特定のアスペクト比を保持するブロックをレスポンシブにする
  add_theme_support('responsive-embeds');
  // エディタースタイルの有効化と読み込み（Wordpress管理画面のデザイン）
  add_theme_support('editor-style');
  add_editor_style('editor-style-css');
  // titleを有効化しているが、今回はthe_titleで出力している為割愛可能
  add_theme_support('title-tag');
  // html5以前ではtype属性が必要だったが、以降では不要になったため付加しない設定にする
  add_theme_support('html5', array('style', 'script'));
  // サムネイルを有効化
  add_theme_support('post-thumbnails');
  // ブロックで指定できる「全幅・幅広」を有効化
  add_theme_support('align-wide');
  // グロナビ出力を有効化（今回は利用していません）
  register_nav_menus(array(
    'primary' => 'ナビゲーション'
  ));
}
// 実行タイミングの指定
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_enqueue()
{
  // style.cssを読み込む※thime.min.cssをオーバーライドする為、後に記述する
  // (myheme-styleは任意、get_stylesheet_uri()はstyle.cssの場所を指定
  wp_enqueue_style(
    'mytheme-style',
    get_stylesheet_uri(),
    // 以下はキャッシュ対策
    array(),
    filemtime(get_theme_file_path('style.css'))
  );

  // Googleフォントを有効化（使うフォントのスタイルのみ読み込んでいます）
  // ※キャッシュクリアの必要性がないため4つ目のパラメーターはnull
  wp_enqueue_style(
    'myfonts',
    '<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">',
    array(),
    null
  );
  // Wordpressが搭載しているアイコンフォントを有効化
  wp_enqueue_style(
    'dashicons'
  );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue');

// ウィジェットの登録
function mytheme_widgets()
{
  register_sidebar(array(
    'id' => 'sidebar-1',
    'name' => 'フッターメニュー'
  ));
  register_sidebar(array(
    'id' => 'sidebar-2',
    'name' => 'フッターメニュー2'
  ));
  register_sidebar(array(
    'id' => 'sidebar-3',
    'name' => 'フッターメニュー3'
  ));
  register_sidebar(array(
    'id' => 'sidebar-4',
    'name' => 'フッターメニュー4'
  ));
}
add_action('widgets_init', 'mytheme_widgets');

// IE11対応
function mytheme_ie()
{
  global $is_IE;
  // IEの場合のみ出力
  if ($is_IE) {
    wp_enqueue_script(
      'mytheme-css-var-polyfill',
      get_theme_file_uri('ie/css-var-polyfill.js'),
      array(),
      null,
      true
    );
    wp_enqueue_script(
      'mytheme-ofi',
      get_theme_file_uri('ie/ofi.min.js'),
      array(),
      null,
      true
    );
    wp_add_inline_script(
      'mytheme-ofi',
      'jquery(function($){objectFitImages()});'
    );
    wp_add_inline_style(
      'mytheme-style',
      'img{font-family:"object-fit:cover";}'
    );
    // mainがinline-boxで指定されているのでblockに修正
    wp_add_inline_style(
      'mytheme-style',
      'main{display:block;}'
    );
  }
}
add_action('wp_enqueue_scripts', 'mytheme_ie');


// 画像スタイルのブロックを追加
register_block_style(
  'core/image',
  array(
    'name' => 'mycard',
    'label' => 'カード型',
    'inline_style' =>
    '.is-style-mycard{
      padding:10px;
      border:solid 1px gray;
      box-shadow:5px 5px 5px gray;
    }'
  )
);

// 基本色のバーを選択可能に（見出しに入る緑の縦ライン）
register_block_style(
  'core/heading',
  array(
    'name' => 'mybar',
    'label' => '基本色のバー',
    'inline_style' =>
    '.is-style-mybar{
      border-left:
      solid 14px green;
      padding-left:14px;
    }'
  )
);

// 表示中カテゴリーの調整
function custom_archive_title($title)
{
  $titleParts = explode(': ', $title);
  if ($titleParts[1]) {
    return $titleParts[1];
  }
  return $title;
}
add_filter('get_the_archive_title', 'custom_archive_title');

// 表示中の件数表示
function my_result_count()
{
  global $wp_query;

  $paged = get_query_var('paged') - 1;
  $ppp   = get_query_var('posts_per_page');
  $count = $total = $wp_query->post_count;
  $from  = 0;
  if (0 < $ppp) {
    $total = $wp_query->found_posts;
    if (0 < $paged)
      $from  = $paged * $ppp;
  }
  printf(
    '<span class="all">全%1$s件中</span>/ %2$s%3$s件表示',
    $total,
    (1 < $count ? ($from + 1 . '〜') : ''),
    ($from + $count)
  );
}

// カスタム投稿の呼び出し元設定※引数で指定（ポートフォリオ関連）
function get_specific_posts($post_type, $taxonomy = null, $term = null, $number = -1)
{
  if (!$term) :
    $terms_obj = get_terms('$taxonomy');
    $term = wp_list_pluck($terms_obj, 'slug');
  endif;

  $args = array(
    'post_type' => $post_type,
    'tex_query' => array(
      array(
        'taxonomy' => $taxonomy,
        'field' => 'slug',
        'terms' => $term,
      ),
    ),
    'post_per_page' => $number,
  );
  $specific_posts = new Wp_Query($args);
  return $specific_posts;
}

// blog投稿ページの設定
function change_posts_per_page($query)
{
  if (is_admin() || !$query->is_main_query())
    return;
  if ($query->is_home()) { //カスタム投稿タイプを指定
    $query->set('posts_per_page', '10'); //表示件数を指定
  }
}
add_action('pre_get_posts', 'change_posts_per_page');
