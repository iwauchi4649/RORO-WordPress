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
    <?php $posts = get_posts('numberposts=6&category_name=works&tag_id=6'); global $post; ?>
      <div id="fuu" class="works-continer__items__contents">
        <div class="works-continer__items__contents__post">
          <div class="works-continer__items__contents__flex">
            <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
              <div class="works-continer__items__contents__block">
                <a class="works-continer__items__contents__post__outer" href="#">
                  <div class="works-continer__items__contents__post__overflow">
                    <img class="works-continer__items__contents__post__image" src="<?php the_field('image'); ?>"></img>
                  </div>
                  <div class="works-continer__items__contents__post__namebox">
                    <div class="works-continer__items__contents__post__namebox__category">
                      <?php the_field('category'); ?>
                    </div>
                    <div class="works-continer__items__contents__post__namebox__title">
                      <?php the_field('company'); ?>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; endif; ?>
          </div>
        </div>
      </div>
      <?php $posts = get_posts('numberposts=6&category_name=works&tag_id=7'); global $post; ?>
      <div id="euu" class="works-continer__items__contents">
        <div class="works-continer__items__contents__post">
          <div class="works-continer__items__contents__flex">
            <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
              <div class="works-continer__items__contents__block">
                <a class="works-continer__items__contents__post__outer" href="#">
                  <div class="works-continer__items__contents__post__overflow">
                    <img class="works-continer__items__contents__post__image" src="<?php the_field('image'); ?>"></img>
                  </div>
                  <div class="works-continer__items__contents__post__namebox">
                    <div class="works-continer__items__contents__post__namebox__category">
                      <?php the_field('category'); ?>
                    </div>
                    <div class="works-continer__items__contents__post__namebox__title">
                      <?php the_field('company'); ?>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; endif; ?>
          </div>
        </div>
      </div>
      <?php $posts = get_posts('numberposts=6&category_name=works&tag_id=8'); global $post; ?>
      <div id="guu" class="works-continer__items__contents">
        <div class="works-continer__items__contents__post">
          <div class="works-continer__items__contents__flex">
            <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
              <div class="works-continer__items__contents__block">
                <a class="works-continer__items__contents__post__outer" href="#">
                  <div class="works-continer__items__contents__post__overflow">
                    <img class="works-continer__items__contents__post__image" src="<?php the_field('image'); ?>"></img>
                  </div>
                  <div class="works-continer__items__contents__post__namebox">
                    <div class="works-continer__items__contents__post__namebox__category">
                      <?php the_field('category'); ?>
                    </div>
                    <div class="works-continer__items__contents__post__namebox__title">
                      <?php the_field('company'); ?>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; endif; ?>
          </div>
        </div>
      </div>
      <?php $posts = get_posts('numberposts=6&category_name=works&tag_id=9'); global $post; ?>
      <div id="duu" class="works-continer__items__contents">
        <div class="works-continer__items__contents__post">
          <div class="works-continer__items__contents__flex">
            <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
              <div class="works-continer__items__contents__block">
                <a class="works-continer__items__contents__post__outer" href="#">
                  <div class="works-continer__items__contents__post__overflow">
                    <img class="works-continer__items__contents__post__image" src="<?php the_field('image'); ?>"></img>
                  </div>
                  <div class="works-continer__items__contents__post__namebox">
                    <div class="works-continer__items__contents__post__namebox__category">
                      <?php the_field('category'); ?>
                    </div>
                    <div class="works-continer__items__contents__post__namebox__title">
                      <?php the_field('company'); ?>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; endif; ?>
          </div>
        </div>
      </div>

    </div>
	</div>
</body>
<?php get_footer(); ?>