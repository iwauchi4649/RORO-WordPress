<?php get_header()?>
  <div class="swiper-container">
	<!-- メイン表示部分 -->
	<div class="swiper-wrapper">
		<!-- 各スライド -->
		<div class="swiper-slide">Slide 1</div>
		<div class="swiper-slide">Slide 2</div>
		<div class="swiper-slide">Slide 3</div>
		<div class="swiper-slide">Slide 4</div>
	</div>
</div>
     <section class="t-fiber-about">
      <div class="t-fiber-about__title">
        <p></p>
      </div>
      <div class="t-fiber-about__content">
          <p class="element js-fadein">fiberは、デザイナーやエンジニア・マーケター等、</p>
          <p class="element js-fadein">Webに関するプロフェッショナルが所属する</p>
          <p class="element js-fadein">少数精鋭のWebサービス開発・運用プラットフォームです。</p>
          <p class="element js-fadein">クリエイターへの依頼、打ち合わせ、納品から運用までの流れを</p>
          <p class="element js-fadein">シームレスに行うことが可能となり、依頼主とクリエイターが</p>
          <p class="element js-fadein">ダイレクトに繋がることで従来のWeb開発会社よりも</p>
          <p class="element js-fadein">圧倒的な低コストで制作することができます。</p>
      </div>
    </section>
    <main class="member">
    <!-- bootstrap等で幅を与えたい時のためにcontainerクラスを作成 -->
    <div class="member__container">
      <div class="member__container__person">
      <?php $posts = get_posts('numberposts=1&category_name=blog'); global $post; ?>
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
                      <li class="twitter sns-margin"><a href=<?php the_field('twitter'); ?> class="link-link"><i class="fab fa-twitter"></i></a></li>
                    <?php endif;?>
                    <?php if(!empty($instagram)):?>
                      <li class="instagram sns-margin"><a href=<?php the_field('instagram'); ?> class="sns-link"><i class="fab fa-instagram"></i></a></li>
                    <?php endif;?>
                    <?php if(!empty($youtube)):?>
                      <li class="youtube sns-margin"><a href=<?php the_field('youtube'); ?> class="sns-link"><i class="fab fa-youtube"></i></a></li>
                    <?php endif;?>
                    <?php if(!empty($qiita)):?>
                      <li class="qiita sns-margin"><a href=<?php the_field('qiita'); ?> class="sns-link"><i class="fas fa-search"></i></a></li>
                    <?php endif;?>
                    <?php if(!empty($personal)):?>
                      <li class="personal sns-margin"><a href=<?php the_field('personal'); ?> class="sns-link"><i class="fas fa-link"></i></a></li>
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
      <?php $posts = get_posts('numberposts=1&category_name=works'); global $post; ?>
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
    <div class="content">
      <div class="container">
      <?php $posts = get_posts('numberposts=3&category_name=blog'); global $post; ?>
      <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
        <article class="article-item box">
          <a href="<?php the_permalink(); ?>">
            <div class="article-inside">
              <?php the_post_thumbnail(array(350), array('class' => 'thumb')); ?>
              <h3 class="article-title">
              <?php echo mb_substr(the_title(), 0, 15, 'UTF-8'); ?>	
              </h3>
              <p class="article-content">
              <?php echo mb_substr(get_the_excerpt(), 0, 90, 'UTF-8');?>
              </p>
              <div class="article-dls">
                <dl class="article-dls__dl">
                  <dt>author</dt>
                  <dd><?php the_author(); ?></dd>
                </dl>
                <dl class="article-dls__dl">
                  <dt>date</dt>
                  <dd><?php echo get_the_date( $format, $post ); ?></dd>
                </dl>
              </div>
            </div>
          </a>
        </article>      
        <?php endforeach; endif; ?>
      </div>
    </div>
<?php get_footer()?>
