<?php
/*
Template Name: article
Template Post Type: post
*/
?>

<?php get_header(); ?>
<body>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $post_objects = get_field('creator'); if( $post_objects ): ?>
  <div class="single-article">
    <h1 class="single-article__title">
      <?php the_title(); ?>
    </h1>
    <div class="single-article__info-box">
      <span class="single-article__info-box__date">
      <i class="far fa-calendar-alt"></i>
        <?php the_date(); ?>
      </span>
      <a href="<?php the_permalink($post_objects->ID); ?>">
        <img src="<?php the_field( 'right-image', $post_objects->ID ); ?>" class="single-article__info-box__img">
        <span class="single-article__info-box__author">
          <?php the_field( 'romaji', $post_objects->ID ); ?>
        </span>
      </a>
    </div>
    <div class="single-article__thumbnail">
      <img src="<?php the_post_thumbnail_url(); ?>">
    </div>
    <div class="single-article__content">
      <?php the_content(); ?>
    </div>
  </div>
<?php endif; ?>
<?php endwhile; endif; ?>
</body>
<?php get_footer(); ?>