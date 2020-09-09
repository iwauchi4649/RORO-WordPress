<?php
/*
Template Name: article
Template Post Type: post
*/
?>

<?php get_header(); ?>
<body style="background-color: #f6f6f4;">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $post_objects = get_field('creator'); if( $post_objects ): ?>
  <!-- 記事部分全体 (背景色がグレー) -->
  <div class="single-article-container">

    <!-- 左側に表示される「いいね」「ストック」ボタン -->
    <div class="stickyMenu"></div>

    <!-- 記事部分 (背景色が白) -->
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
    <!-- オプショナルなエリア (非ログイン時は広告が出る) -->
    <div class="options"></div>
    <!-- 目次 (Table of Contens) -->
    <div class="toc">
      <?php if ( is_active_sidebar('sidebar') ) : ?>
        <?php dynamic_sidebar('sidebar'); ?>
      <?php endif; ?>
      <!-- 追尾サイドバー -->
      <?php if (is_singular()): ?>
        <?php if ( is_active_sidebar( 'sidebar-fixed' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-fixed' ); ?>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>
<?php endwhile; endif; ?>
  <div class="select-blog-area" style="background-color: #ffffff;">
    <body class="article">
      <div class="article__container">
        <?php $posts = get_posts('numberposts=3&category_name=article'); global $post; ?>
        <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
        <div class="article__container__item" style="margin-top: 35px;">
          <a href="<?php the_permalink() ?>">
            <div class="article__container__item__up-box">
            <?php if(has_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url(); ?>">
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri()?>/images/fiber_web.png">
            <?php endif; ?>
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
  </div>
</body>
<?php get_footer(); ?>