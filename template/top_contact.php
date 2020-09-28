<!-- ↓デフォルトのpタグを自動で差し込まないようにする -->
<?php remove_filter ('the_content', 'wpautop'); ?>
<!-- ↓MW WP Formのフォーム識別子を差し込む -->
<?php echo do_shortcode('[mwform_formkey key="7"]'); ?>