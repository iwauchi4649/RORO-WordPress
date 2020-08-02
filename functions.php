
<?php 

function load_js() {
	//管理画面を除外
	if ( !is_admin() ){
		//事前に読み込まれるjQueryを解除
		wp_deregister_script( 'jquery' );

		//Google CDNのjQueryを出力
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), NULL, true );

		//自作スクリプトや、jQueryのライブラリも同様に読み込みます。
		wp_enqueue_script( 'script-name', get_template_directory_uri() . '/javascript/slide.js', array(), '1.0.0', true );
		wp_enqueue_script( 'slick.min', get_stylesheet_directory_uri().'/slick/slick.min.js', array( 'jquery' ), '1.8.1', true);
	}
}
add_action( 'init', 'load_js' );
// ブログのアイキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');
// カスタムメニューを使用可能にする
add_theme_support("menus")
?>