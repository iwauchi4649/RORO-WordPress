<head>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/search-form.css" />
</head>
<form id="form" action="<?php bloginfo('url'); ?>" method="get">
    <input id="s-box" name="s" type="text" placeholder="キーワードを入力"/>
    <button type="submit" id="s-btn-area"><div id="s-btn">検索</div></button>
</form>