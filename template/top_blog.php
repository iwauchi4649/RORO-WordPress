<div class="page-header">
  <div class="page-header__inner">
    <h1 class="page-header__heading">
      <span>blog</span>
    </h1>
  </div>
</div>

<body class="article">
  <div class="article__container">
    <?php $posts = get_posts('numberposts=3&category_name=article'); global $post; ?>
    <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
    <div class="article__container__item">
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