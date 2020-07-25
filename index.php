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
    <!-- <section class="t-creater">
      <p>作品をスライダーで並べる。</p>
    </section> -->
    <section class="t-works__box">
    <div class="category-nav">
      <p class="t-section-name">works</p>
      <div class="t-works__tag">
        <p>category</p>
        <p id="t-category-view">all view</p>
      </div>
    </div>
    <div class="t-works__box__discription">
      <div class="t-works__box__left">
        <div class="t-works__box__discription__content">
          <p class="category">web</p>
          <p class="t-site-name-en">Raccoon shop</p>
          <p class="t-site-name-ja">たぬき商店</p>
        </div>
      </div>
      <div class="t-works__box__right">
        <p><img src="<?php echo get_template_directory_uri()?>/images/momizi_img.jpg" alt=""></p>
      </div>
    </div>
  </section>
    <?php query_posts('posts_per_page=3'); ?>
  <?php if(have_posts()): ?>
    <div class="content">
      <div class="container">
      <?php while(have_posts()): the_post(); ?>
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
        <?php endwhile; ?>
<?php endif; ?>
      </div>
    </div>
<?php get_footer()?>
