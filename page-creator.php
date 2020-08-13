<?php
/*
Template Name: creator
*/
?>
<?php get_header()?>
  <div class="page-header">
    <div class="page-header__inner">
      <h1 class="page-header__heading c-page-header__heading">
        <span>creator</span>
      </h1>
    </div>
  </div>
  <main class="creator">
    <!-- bootstrap等で幅を与えたい時のためにcontainerクラスを作成 -->
    <div class="creator__container">
      <div class="creator__container__introduction">
        <div class="creator__container__introduction__title">
          <span class="creator__container__introduction__title__span">
            所属クリエイター
          </span>
        </div>
        <!-- box4個の全体 -->
        <div class="creator__container__introduction__content">
          <ul class="creator__container__introduction__content__box">
            <!-- liは1個25%が4個並び、レスポンシブ時は1個50%が2個並び -->
            <?php $posts = get_posts('numberposts=10&category_name=creator'); global $post; ?>
            <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
              <li class="creator__container__introduction__content__box__square">
                <!-- aタグにpaddingを持たせるためdisplay:blockを付与 -->
                <a href="<?php the_permalink() ?>" class="square__text">
                  <!-- 投稿する時は正方形の画像に注意 -->
                  <img class="square__text__img" src="<?php the_field('right-image'); ?>">
                  <!-- position:absoluteで中央寄せ -->
                  <span class="square__text__span"><?php the_title(); ?></span>
                </a>
              </li>
            <?php endforeach; endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </main>
<?php get_footer()?>