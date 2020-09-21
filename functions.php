<?php

// WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル
define( 'WP_SCSS_ALWAYS_RECOMPILE', true );

function load_js() {
	//管理画面を除外
	if ( !is_admin() ){
		//事前に読み込まれるjQueryを解除
		wp_deregister_script( 'jquery' );

		//Google CDNのjQueryを出力
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), NULL, true );

		//自作スクリプトや、jQueryのライブラリも同様に読み込みます。
		wp_enqueue_script( 'script-shutter', get_template_directory_uri() . '/javascript/shutter.js', array(), '1.0.0', true );
		wp_enqueue_script( 'script-header', get_template_directory_uri() . '/javascript/header.js', array(), '1.0.0', true );
		wp_enqueue_script( 'script-footer', get_template_directory_uri() . '/javascript/footer.js', array(), '1.0.0', true );
		wp_enqueue_script( 'script-scroll', get_template_directory_uri() . '/javascript/scroll.js', array(), '1.0.0', true );
	}
}

add_action( 'init', 'load_js' );

?>