<div class="wk-page-header wk-page-header--works wk-page-header--works-index">
  <div class="wk-page-header__inner">
    <h1 class="wk-page-header__heading">
      <span>blog</span>
    </h1>
  </div>
</div>

    <div class="content">
      <div class="container">
      <?php $posts = get_posts('numberposts=3&category_name=article'); global $post; ?>
      <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
        <article class="article-item box">
          <a href="<?php the_permalink(); ?>">
            <div class="article-inside">
              <?php the_post_thumbnail(array(350), array('class' => 'thumb')); ?>
              <h3 class="article-title">
              <?php echo mb_substr(the_title(), 0, 15, 'UTF-8'); ?>	
              </h3>
              <p class="article-content">
              <?php echo mb_substr(get_the_excerpt(), 0, 90, 'UTF-8');?>
              </p>
              <div class="article-dls">
                <dl class="article-dls__dl">
                  <dt>author</dt>
                  <dd><?php the_author(); ?></dd>
                </dl>
                <dl class="article-dls__dl">
                  <dt>date</dt>
                  <dd><?php echo get_the_date( $format, $post ); ?></dd>
                </dl>
              </div>
            </div>
          </a>
        </article>      
        <?php endforeach; endif; ?>
      </div>
    </div>