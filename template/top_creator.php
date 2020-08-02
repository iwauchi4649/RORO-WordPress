<main class="member">
    <!-- bootstrap等で幅を与えたい時のためにcontainerクラスを作成 -->
    <div class="member__container">
      <div class="member__container__person">
      <?php $posts = get_posts('numberposts=1&category_name=creator'); global $post; ?>
      <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
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
                <?php
                  $twitter = get_post_meta($post->ID, 'twitter', true);
                  $instagram = get_post_meta($post->ID, 'instagram', true);
                  $youtube = get_post_meta($post->ID, 'youtube', true);
                  $qiita = get_post_meta($post->ID, 'qiita', true);
                  $personal = get_post_meta($post->ID, 'personal', true);
                  // empty関数は引数に与えた変数や配列の中身が空かどうか確認する関数
                  // 変数の値が0あるいは空、NULLである場合はTRUEを、それ以外である場合はFALSE
                  // 「!」は==FALSEを意味する
                  /* if ここから */
                  if(!empty($twitter) || !empty($instagram) || !empty($youtube) || !empty($qiita) || !empty($personal)  ){?>
                    <?php if(!empty($twitter)):?>
                      <li class="sns-margin"><a href=<?php the_field('twitter'); ?> class="sns-link twitter"><i class="fab fa-twitter"></i></a></li>
                    <?php endif;?>
                    <?php if(!empty($instagram)):?>
                      <li class="sns-margin"><a href=<?php the_field('instagram'); ?> class="sns-link instagram"><i class="fab fa-instagram"></i></a></li>
                    <?php endif;?>
                    <?php if(!empty($youtube)):?>
                      <li class="sns-margin"><a href=<?php the_field('youtube'); ?> class="sns-link youtube"><i class="fab fa-youtube"></i></a></li>
                    <?php endif;?>
                    <?php if(!empty($qiita)):?>
                      <li class="sns-margin"><a href=<?php the_field('qiita'); ?> class="sns-link qiita"><i class="fas fa-search"></i></a></li>
                    <?php endif;?>
                    <?php if(!empty($personal)):?>
                      <li class="sns-margin"><a href=<?php the_field('personal'); ?> class="sns-link personal"><i class="fas fa-link"></i></a></li>
                    <?php endif;?>
                <?php } /** if ここまで */ ?>
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
        <?php endforeach; endif; ?>
      </div>
    </div>
  </main>