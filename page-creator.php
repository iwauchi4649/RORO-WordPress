<?php
/*
Template Name: creator
*/
?>
<?php get_header()?>
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
            <li class="creator__container__introduction__content__box__square">
              <!-- aタグにpaddingを持たせるためdisplay:blockを付与 -->
              <a href="<?php the_permalink() ?>" class="square__text">
                <!-- 投稿する時は正方形の画像に注意 -->
                <img class="square__text__img" alt="Syoma" src="<?php echo get_template_directory_uri()?>/images/syoma.png">
                <!-- position:absoluteで中央寄せ -->
                <span class="square__text__span">Syoma</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </main>
<?php get_footer()?>