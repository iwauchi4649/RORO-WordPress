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