<?php
add_action('init', function () {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');

  // メニューをサポート
  register_nav_menus([
    'gloval_nav' => 'グローバルナビゲーション',
    'footer_nav' => 'フッターナビゲーション'
  ]);
});

// アイキャッチ画像を取得
function get_eyecatch()
{
  $id = get_post_thumbnail_id();
  $img = wp_get_attachment_image_src($id,'large');
  return $img;
}
