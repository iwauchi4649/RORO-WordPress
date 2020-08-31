<?php get_header()?>
<?php if (have_posts()): ?>
<?php
  if (isset($_GET['s']) && empty($_GET['s'])) {?>
    <p style="text-align:center;color:#2c649c;font-size:20px;"><?php echo '検索キーワード未入力'; ?></p>
  <?php } else {?>
    <p style="text-align:center;color:#2c649c;font-size:20px;"><?php echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; ?></p>
  <?php
  }
  ?>
<div class="article__container">
<?php while(have_posts()): the_post(); ?>
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
<?php endwhile; ?>
</ul>
<?php else: ?>
<p style="text-align:center;color:#2c649c;font-size:20px;"><?php echo "検索されたキーワードにマッチする記事はありませんでした"?></p>
<?php endif; ?>
</div>
<?php get_footer()?>