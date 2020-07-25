<?php
/*
Template Name: article
*/
?>
 
<?php get_header(); ?>
<body>
  <div class="content">
    <div class="container">
      <?php $posts = get_posts('numberposts=10&category_name=article'); global $post; ?>
      <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
      <article class="article-item box">
        <a href="<?php the_permalink() ?>">
          <div class="article-inside">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="猫">
            <h3 class="article-title">
              <?php the_title(); ?>
            </h3>
            <?php the_content(); ?>
            <div class="article-dls">
              <dl class="article-dls__dl">
                <dt>author</dt>
                <dd><?php the_author(); ?></dd>
              </dl>
              <dl class="article-dls__dl">
                <dt>date</dt>
                <dd><?php the_date(); ?></dd>
              </dl>
            </div>
          </div>
        </a>
      </article>
      <?php endforeach; endif; ?>
    </div>
  </div>
</body>
<?php get_footer(); ?>