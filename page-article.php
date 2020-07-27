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
    <?php $acf_post_objects = get_field('creator'); if( $acf_post_objects ): ?>
    <div class="article__container__item">
      <a href="<?php the_permalink() ?>">
        <div class="article__container__item__up-box">
          <img src="<?php the_post_thumbnail_url(); ?>">
        </div>
        <div class="article__container__item__down-box">
          <span><?php the_time('Y年m月d日'); ?></span>
          <h3><?php the_title(); ?></h3>
          <?php foreach( $acf_post_objects as $post): ?>
          <img src="<?php the_field('right-image'); ?>" >
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </a>
    </div>
    <?php endif; ?>
    <?php endforeach; endif; ?>
  </div>
</body>
<?php get_footer(); ?>