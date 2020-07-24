<?php 
function my_scripts() {
  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );
add_theme_support('post-thumbnails');

/**
 * カスタムメニューを使用可能にする
 */
add_theme_support("menus")
?>