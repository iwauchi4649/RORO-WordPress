<!-- 10人以上をどのように並べるかは今後の課題 -->
<?php $posts = get_posts('numberposts=10&category_name=creator'); global $post; ?>
  <ul class="img-area">
    <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
      <li>
        <a href="<?php the_permalink() ?>"><img class="circle-img" src="<?php the_field('right-image'); ?>" alt="sample"></a>
      </li>
    <?php endforeach; endif; ?>
  </ul>