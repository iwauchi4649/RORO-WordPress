<div class="page-header">
  <div class="page-header__inner">
    <h1 class="page-header__heading">
      <span>works</span>
    </h1>
  </div>
</div>

<div class="works-continer">
  <div class="works-continer__content">
    <h2 class="works-continer__content__heading">
      <span>works</span>
      <small>制作実績</small>
    </h2>
    <div class="works-continer__items">
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
      <?php $posts = get_posts('numberposts=6&category_name=works&tag_id=27'); global $post; ?>
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
      <?php $posts = get_posts('numberposts=6&category_name=works&tag_id=29'); global $post; ?>
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
      <?php $posts = get_posts('numberposts=6&category_name=works&tag_id=30'); global $post; ?>
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
      <?php $posts = get_posts('numberposts=6&category_name=works&tag_id=28'); global $post; ?>
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
    <div class="all-view">
      <a class="all-view__content all-button" href="http://52.192.180.216/blog/index.php/works/">
        <span>ALL VIEW</span>
      </a>
    </div>
  </div>
</div>
