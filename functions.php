<?php
add_action('init', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  // メニューをサポート
  register_nav_menus([
    'global_nav' => 'グローバルナビゲーション',
    'footer_nav' => 'フッターナビゲーション',
  ]);
});

// アイキャッチ画像がなければ、標準画像を取得する
function get_eyecatch_with_default()
{
  if (has_post_thumbnail()) :
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else :
    $img = array(get_template_directory_uri() . '/img/blog01_coding.jpg');
  endif;

  return $img;
}

// アーカイブページの表示件数を変更する
function change_posts_per_page($query)
{
  if (is_admin() || !$query->is_main_query())
    return;

  if ($query->is_category(9)) { //BLOG一覧の時に表示件数を9件にセット
    $query->set('posts_per_page', '9');
  }
}
add_action('pre_get_posts', 'change_posts_per_page');

/**
 * ページネーション出力関数
 * $paged : 現在のページ
 * $pages : 全ページ数
 * $range : 左右に何ページ表示するか
 * $show_only : 1ページしかない時に表示するかどうか
 */
function pagination($pages, $paged, $range = 2, $show_only = false)
{

  $pages = (int) $pages;    //float型で渡ってくるので明示的に int型 へ
  $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

  //表示テキスト
  $text_first   = "« 最初へ";
  $text_before  = "‹ 前へ";
  $text_next    = "次へ ›";
  $text_last    = "最後へ »";

  if ($show_only && $pages === 1) {
    // １ページのみで表示設定が true の時
    echo '<div class="pagination"><span class="current pager">1</span></div>';
    return;
  }

  if ($pages === 1) return;    // １ページのみで表示設定もない場合

  if (1 !== $pages) {
    //２ページ以上の時
    echo '<div class="pagination"><span class="page_num">Page ', $paged, ' of ', $pages, '</span>';
    if ($paged > $range + 1) {
      // 「最初へ」 の表示
      echo '<a href="', get_pagenum_link(1), '" class="first">', $text_first, '</a>';
    }
    if ($paged > 1) {
      // 「前へ」 の表示
      echo '<a href="', get_pagenum_link($paged - 1), '" class="prev">', $text_before, '</a>';
    }
    for ($i = 1; $i <= $pages; $i++) {

      if ($i <= $paged + $range && $i >= $paged - $range) {
        // $paged +- $range 以内であればページ番号を出力
        if ($paged === $i) {
          echo '<span class="current pager">', $i, '</span>';
        } else {
          echo '<a href="', get_pagenum_link($i), '" class="pager">', $i, '</a>';
        }
      }
    }
    if ($paged < $pages) {
      // 「次へ」 の表示
      echo '<a href="', get_pagenum_link($paged + 1), '" class="next">', $text_next, '</a>';
    }
    if ($paged + $range < $pages) {
      // 「最後へ」 の表示
      echo '<a href="', get_pagenum_link($pages), '" class="last">', $text_last, '</a>';
    }
    echo '</div>';
  }
};

/* 投稿アーカイブページの作成 */
function post_has_archive($args, $post_type)
{

  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news'; //任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// カスタム投稿（blog）のカテゴリー背景色の取得
function blog_cat_color()
{
  $terms = get_the_terms(get_the_ID(), 'blog_cat'); // タクソノミーのタームを取得
  if (!empty($terms)) {
    foreach ($terms as $term) {

      $term_name = $term->name; // ターム名の取得
      $term_id = $term->term_id; // タームIDの取得
      // カスタムフィールドの取得 'フィールド名','タクソノミースラッグ_'.$term_id
      $term_color = get_field('cat_color', 'blog_cat_' . $term_id);
      echo '<span class="label-category" style="background-color:' . $term_color . ';">' . $term_name . '</span>'; // タームの表示

    }
  }
}


// デフォルト投稿(news)のカテゴリー背景色
function news_cat_color()
{
  $categories = get_the_category();
  if ($categories) {
    $categories_color = get_field('color', 'category_' . $categories[0]->term_id);
    $categories_name  = $categories[0]->name;
    echo '<span class="label-category" style="' . esc_attr('background:' . $categories_color) . ';">' . esc_html($categories_name) . '</span>';
  }
}
