<?php
/*
Template Name: works
*/
?>
 
<?php get_header(); ?>
<body>
  <div class="page-header">
    <div class="page-header__inner">
      <h1 class="page-header__heading">
        <span>works</span>
      </h1>
    </div>
  </div>
  <div class="creator__container__introduction">
    <div class="creator__container__introduction__title">
      <span class="creator__container__introduction__title__span">
        実績一覧
      </span>
    </div>
  </div>
  <div class="wk-index-module">
    <ul class="works-continer__items__navs">
      <li>
        <a href="#fuu" class="secList">
          <span>Webサイト</span>
        </a>
      </li>
      <li>
        <a href="#euu" class="secList">
          <span>Webデザイン</span>
        </a>
      </li>
      <li>
        <a href="#guu" class="secList">
          <span>動画</span>
        </a>
      </li>
      <li>
        <a href="#duu" class="secList">
          <span>Webアプリ</span>
        </a>
      </li>
    </ul>

    <div class="wk-list-module">
      <?php $posts = get_posts('numberposts=10&category_name=works'); global $post; ?>
      <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
      <article class="wk-list-module__item wk-list-item-module">
        <a href="<?php the_permalink() ?>">
          <div class="wk-list-item-module__figure">
            <img class="wk-cover-image wk-cover-image--absolute" src="<?php the_field('image'); ?>" alt="ROROサイトの画像">
          </div>
          <div class="wk-list-item-module__content">
            <div class="wk-list-item-module__categories">
              <?php the_tags('', '', '') ?>
            </div>
            <h2 class="wk-list-item-module__title wk-typesquare_option"><?php the_title(); ?></h2>
            <p class="wk-list-item-module__client"><?php the_title(); ?></p>
          </div>
        </a>
      </article>
      <?php endforeach; endif; ?>
    </div>
	</div>
</body>
<?php get_footer(); ?>