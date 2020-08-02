<div class="wk-page-header wk-page-header--works wk-page-header--works-index">
  <div class="wk-page-header__inner">
    <h1 class="wk-page-header__heading">
      <span>creator</span>
    </h1>
  </div>
</div>

<?php $posts = get_posts('numberposts=4&category_name=creator'); global $post; ?>
<div class="flex">
  <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
      <div class="flex-item">
        <div class="image-trim">
          <a href="<?php the_permalink() ?>"><img class="circle-img" src="<?php the_field('right-image'); ?>" alt="sample"></a>
        </div>
        <h2><?php the_title(); ?></h2>
        <p><?php the_field('occupation'); ?></p>
        <a href="<?php the_permalink() ?>" class="btn-vertical-border">クリエイターページへ</a>
      </div>
    <?php endforeach; endif; ?>
</div>
