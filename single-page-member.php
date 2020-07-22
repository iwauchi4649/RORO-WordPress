<?php
/*
Template Name: member
Template Post Type: post
*/
?>

<?php get_header()?>
<?php if(have_posts()): the_post(); ?>
  <main class="member">
    <!-- bootstrap等で幅を与えたい時のためにcontainerクラスを作成 -->
    <div class="member__container">
      <div class="member__container__person">
        <div class="member__container__person__content">
          <!-- 右55% -->
          <div class="member__container__person__content__box right">
            <img class="right__img" alt="Syoma" src="<?php the_field('right-image'); ?>">
          </div>
          <!-- 左45% -->
          <div class="member__container__person__content__box left">
            <div class="member__container__person__content__box__name">
              <!-- 半角スペースを含む11文字以内 -->
              <h2 class="member__container__person__content__box__name__full"><?php the_title(); ?></h2>
              <!-- 半角スペースを含む半角英数字24文字以内 -->
              <p class="member__container__person__content__box__name__romaji"><?php the_field('romaji'); ?></p>
              <!-- 全角20文字以内 -->
              <p class="member__container__person__content__box__name__occupation"><?php the_field('occupation'); ?></p>
              <ul class="member__container__person__content__box__name__sns">
                <!-- iタグのno-iを外すと水色に変化 -->
                <li class="twitter sns-first-margin"><a href=<?php the_field('twitter'); ?> class="link-link"><i class="fab fa-twitter"></i></a></li>
                <li class="instagram sns-middle-margin"><a href=<?php the_field('instagram'); ?> class="sns-link"><i class="fab fa-instagram"></i></a></li>
                <li class="youtube sns-middle-margin"><a href=<?php the_field('youtube'); ?> class="sns-link"><i class="fab fa-youtube no-i"></i></a></li>
                <li class="qiita sns-middle-margin"><a href=<?php the_field('qiita'); ?> class="sns-link"><i class="fas fa-search"></i></a></li>
                <li class="github sns-middle-margin"><a href=<?php the_field('github'); ?> class="sns-link"><i class="fab fa-github"></i></a></li>
                <li class="personal sns-last-margin"><a href=<?php the_field('personal'); ?> class="sns-link"><i class="fas fa-link"></i></a></li>
              </ul>
            </div>
            <div class="member__container__person__content__box__sentence">
              <!-- 文字数は250文字以内 -->
              <?php the_content(); ?>
            </div>
            <div class="member__container__person__content__box__skill">
              <h3 class="member__container__person__content__box__skill__title">スキルセット</h3>
              <!-- スキルセットは15個以内 -->
              <ul class="member__container__person__content__box__skill__element">
                <?php the_tags('<li class="skill">', '</li><li class="skill">', '</li>') ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php endif; ?>
<?php get_footer()?>