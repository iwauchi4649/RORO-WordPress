<?php
/*
Template Name: article
Template Post Type: post
*/
?>

<?php get_header(); ?>
<body>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="single-article">
    <span class="single-article__author">
      <?php the_author(); ?>
    </span>
    <span class="single-article__date">
      <?php the_date(); ?>
    </span>
    <span class="single-article__title">
      <?php the_title(); ?>
    </span>
    <div class="single-article__content">
      <?php the_content(); ?>
    </div>
  </div>
<?php endwhile; endif; ?>
</body>
<?php get_footer(); ?>