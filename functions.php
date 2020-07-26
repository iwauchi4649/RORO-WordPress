
<?php 

function my_scripts() {
	wp_enqueue_script( 'theme-jquery-script', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' );
}

add_action( 'wp_enqueue_scripts', 'my_scripts' );
add_theme_support('post-thumbnails');
?>