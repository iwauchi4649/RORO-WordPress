<?php 
function my_scripts() {

}

function add_files() {
	// WordPress本体のjquery.jsを読み込まない
	wp_deregister_script('jquery');
	// jQueryの読み込み
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', "", "20160608", false );
}
add_action( 'wp_enqueue_scripts', 'add_files' );
add_action( 'wp_enqueue_scripts', 'my_scripts' );
add_theme_support('post-thumbnails');
?>