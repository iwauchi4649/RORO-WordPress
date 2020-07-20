<?php
/*
Template Name: works
*/
?>
 
<?php get_header(); ?>
<body>
  <div class="wk-page-header wk-page-header--works wk-page-header--works-index">
    <div class="wk-page-header__inner">
      <h1 class="wk-page-header__heading">
        <span>works</span>
      </h1>
    </div>
  </div>
  <div class="wk-index-module">
    <div class="wk-toolbar-module wk-toolbar-module--one-line wk-toolbar-module--works-index">
      <div class="wk-toolbar-section-module">
        <span class="wk-toolbar-section-module__heading">category</span>
        <div class="wk-toolbar-section-module__content">
          <ul class="wk-toolbar-section-module__list">
            <li class="wk-toolbar-section-module__list-item">
              <a href="#" class="is-current js-toggle-dropdown-menu">all view</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="wk-list-module">
      <?php $posts = get_posts('numberposts=10&category=3'); global $post; ?>
      <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
      <article class="wk-list-module__item wk-list-item-module">
        <a href="<?php the_permalink() ?>">
          <div class="wk-list-item-module__figure">
            <div class="wk-cover-image wk-cover-image--absolute"></div>
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