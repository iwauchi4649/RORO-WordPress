<?php
/*
Template Name: works
Template Post Type: post
*/
?>

<?php get_header(); ?>
<body>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="wkd-page-header wkd-page-header--works wkd-page-header--works-detail">
    <div class="wkd-page-header__inner">
      <p class="wkd-page-header__heading">
        <span>works</span>
      </p>
    </div>
  </div>
  <article class="wkd-article">
    <h1 class="wkd-article__title"><?php the_title(); ?></h1>
    <div class="wkd-info-module">
      <div class="wkd-info-module__content">
        <p class="wkd-info-module__client"><?php the_title(); ?></p>
        <div class="wkd-info-module__texts">
          <div class="wk-list-item-module__categories">
            <?php the_tags('', '', '') ?>
          </div>
        </div>
      </div>
      <a href="<?php the_field('link'); ?>" target="_blank" class="wkd-info-module__link"><?php the_field('link'); ?></a>
    </div>
    <div class="wkd-data-module">
      <?php the_content(); ?>
      <div class="wkd-data-module__members wkd-project-members-module">
        <h2 class="wkd-project-members-module__heading">project member</h2>
        <?php $acf_post_objects = get_field('creator'); if( $acf_post_objects ): ?>
        <ul class="wkd-project-members-module__list">
        <?php foreach( $acf_post_objects as $post): ?>
        <?php setup_postdata($post); ?>
          <li class="wkd-project-members-module__item">
            <a href="<?php the_permalink(); ?>" class="wkd-project-member-module">
              <div class="wkd-project-member-module__inner">
                <img src="<?php the_field('right-image'); ?>" class="wkd-project-member-module__image">
                <p class="wkd-project-member-module__role"><?php the_field('occupation'); ?></p>
                <p class="wkd-project-member-module__name"><?php the_title(); ?></p>
              </div>
            </a>
          </li>
        <?php endforeach; ?>
        </ul>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </article>
<?php endwhile; endif; ?>
</body>
<?php get_footer(); ?>