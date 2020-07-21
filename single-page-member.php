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
            <img class="right__img" alt="Syoma" src="<?php echo get_template_directory_uri()?>/images/syoma.png">
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
                <li class="twitter"><a href="#" class="link-twitter sns-first-margin"><i class="fab fa-twitter no-i"></i></a></li>
                <li class="instagram"><a href="#" class="sns-link sns-middle-margin"><i class="fab fa-instagram no-i"></i></a></li>
                <li class="youtube"><a href="#" class="sns-link sns-middle-margin"><i class="fab fa-youtube no-i"></i></a></li>
                <li class="qiita"><a href="#" class="sns-link sns-middle-margin"><i class="fas fa-search no-i"></i></a></li>
                <li class="github"><a href="#" class="sns-link sns-middle-margin"><i class="fab fa-github no-i"></i></a></li>
                <li class="link"><a href="#" class="sns-link sns-last-margin"><i class="fas fa-link no-i"></i></a></li>
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
                <li class="skill">html css</li>
                <li class="skill">JavaScript</li>
                <li class="skill">WordPress</li>
                <li class="skill">ruby</li>
                <li class="skill">Rails</li>
                <li class="skill">vba</li>
                <li class="skill">Adobe Xd</li>
                <li class="skill">Illustrator</li>
                <li class="skill">PhotoShop</li>
                <li class="skill">Github</li>
                <li class="skill">Github</li>
                <li class="skill">Github</li>
                <li class="skill">Github</li>
                <li class="skill">Github</li>
                <li class="skill">Github</li>
                <li class="skill">Github</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php endif; ?>
<?php get_footer()?>