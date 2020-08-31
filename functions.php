
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
		wp_enqueue_script( 'script-name', get_template_directory_uri() . '/javascript/header.js', array(), '1.0.0', true );
		wp_enqueue_script( 'slick.min', get_stylesheet_directory_uri().'/slick/slick.min.js', array( 'jquery' ), '1.8.1', true);
	}
}
add_action( 'init', 'load_js' );
// ブログのアイキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');
// カスタムメニューを使用可能にする
add_theme_support("menus");

function change_posts_paging($query) {

	// 管理画面やメインクエリーでない場合は除外
	 if ( is_admin() || ! $query->is_main_query() ) {
		 return;
	 }
	 // 検索結果ページ
	 if ( $query->is_search() ) {
			// 公開されてる記事のみ検索
			// $query->set( 'post_status', publish );
			// 投稿のみ検索
			// $query->set( 'post_type', post );
			// 表示したくないカテゴリーID
			// $query->set( 'category__not_in', 1 );
			//　表示したくない投稿ID。arrayで複数指定可。
			// $query->set( 'post__not_in', array( 1, 2, 3, 4, 5 ) );
			//　検索結果の表示順
			// $query->set( 'order', DESC );
			$query->set('category_name', 'article');
		 return;
		}
	 }
	 add_action( 'pre_get_posts', 'change_posts_paging' );
/**
 * サイト内検索の範囲に、カテゴリー名、タグ名、を含める
 */
function custom_search($search, $wp_query) {
	global $wpdb;
	 
	//サーチページ以外だったら終了
	if (!$wp_query->is_search)
	 return $search;
	
	if (!isset($wp_query->query_vars))
	 return $search;
	 
	// ユーザー名とか、タグ名・カテゴリ名も検索対象に
	$search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
	 if ( count($search_words) > 0 ) {
		$search = '';
		foreach ( $search_words as $word ) {
			if ( !empty($word) ) {
				$search_word = $wpdb->escape("%{$word}%");
				$search .= " AND (
						{$wpdb->posts}.post_title LIKE '{$search_word}'
						-- OR {$wpdb->posts}.post_content LIKE '{$search_word}' 
						-- OR {$wpdb->posts}.post_author IN (
						-- 	SELECT distinct ID
						-- 	FROM {$wpdb->users}
						-- 	WHERE display_name LIKE '{$search_word}'
						-- 	)
						-- OR {$wpdb->posts}.ID IN (
						-- 	SELECT distinct r.object_id
						-- 	FROM {$wpdb->term_relationships} AS r
						-- 	INNER JOIN {$wpdb->term_taxonomy} AS tt ON r.term_taxonomy_id = tt.term_taxonomy_id
						-- 	INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
						-- 	WHERE t.name LIKE '{$search_word}'
						-- OR t.slug LIKE '{$search_word}'
						-- OR tt.description LIKE '{$search_word}'
						-- )
				) ";
			}
		}
	}
	 
	 return $search;
	 }
add_filter('posts_search','custom_search', 10, 2);
?>