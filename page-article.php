<?php
/*
Template Name: article
*/
?>
 
<?php get_header(); ?>
<div class="page-header">
  <div class="page-header__inner">
    <h1 class="page-header__heading">
      <span>blog</span>
    </h1>
  </div>
</div>
<div class="creator__container__introduction">
  <div class="creator__container__introduction__title">
    <span class="creator__container__introduction__title__span">
      記事一覧
    </span>
  </div>
</div>
<body class="article">
<?php get_search_form(); ?>
  <div class="article__container">
    <?php $posts = get_posts('numberposts=10&category_name=article'); global $post; ?>
    <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
    <div class="article__container__item">
      <a href="<?php the_permalink() ?>">
        <div class="article__container__item__up-box">
          <img src="<?php the_post_thumbnail_url(); ?>">
        </div>
        <div class="article__container__item__down-box">
          <span><?php the_time('Y年m月d日'); ?></span>
          <h3><?php the_title(); ?></h3>
        </div>
      </a>
    </div>
    <?php endforeach; endif; ?>
  </div>
</body>
<?php get_footer(); ?>