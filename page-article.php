<?php
/*
Template Name: article
*/
?>
 
<?php get_header(); ?>
<body class="article">
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