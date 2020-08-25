<div class="page-header">
  <div class="page-header__inner">
    <h1 class="page-header__heading">
      <span>WORKS</span>
    </h1>
    <span class="page-header__subtitle">制作実績</span>
  </div>
</div>
<?php $posts = get_posts('numberposts=5&category_name=works'); global $post; ?>
  <ul class="your-class">
    <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
      <li>
        <a href="<?php the_permalink() ?>"><img src="<?php the_field('image'); ?>" alt=""></a>
        <!-- 会社名（h2）とフレームワーク（p）は後で追加する「php the_titleで」 -->
        <!-- <div class="">
          <h2 class=""></h2>
          <p class=""></p>
        </div> -->
      </li>
    <?php endforeach; endif; ?>
  </ul>