<?php
/*
Template Name: works-details
*/
?>
 
<?php get_header(); ?>
<body>
  <div class="wkd-page-header wkd-page-header--works wkd-page-header--works-detail">
    <div class="wkd-page-header__inner">
      <p class="wkd-page-header__heading">
        <span>works</span>
      </p>
    </div>
  </div>
  <article class="wkd-article">
    <h1 class="wkd-article__title">株式会社RORO Official site</h1>
    <div class="wkd-info-module">
      <div class="wkd-info-module__content">
        <p class="wkd-info-module__client">株式会社RORO</p>
        <div class="wkd-info-module__texts">
          <div>
            <span class="wkd-info-module__category">web</span>
            <span class="wkd-info-module__category">official</span>
          </div>
          <p class="wkd-info-module__technology">Responsive / Ruby on Rails</p>
        </div>
      </div>
      <a href="https://roro-or.com/" class="wkd-info-module__link">https://roro-or.com</a>
    </div>
    <div class="wkd-data-module">
      <p class="wkd-data-module__comment">
        大阪府羽曳野市にある「わかば保育園」さまのWebサイトを制作させていただきました。同じ建物内に同グループが運営するデイサービスがあり、<br>高齢者の方と子どもたちの交流もあるアットホームな保育園です。
        <br>オリジナルのキャラクターやイラストを取り入れて、わかば保育園の楽しい雰囲気が伝わるように制作させていただきました。
      </p>
      <div class="wkd-data-module__members wkd-project-members-module">
        <h2 class="wkd-project-members-module__heading">project member</h2>
        <ul class="wkd-project-members-module__list">
          <li class="wkd-project-members-module__item">
            <a href="#" class="wkd-project-member-module">
              <div class="wkd-project-member-module__inner">
                <img src="<?php echo get_template_directory_uri()?>/images/member-sample.jpeg" alt="" class="wkd-project-member-module__image">
                <p class="wkd-project-member-module__role">ArtDirection</p>
                <p class="wkd-project-member-module__name">Syoma Iwauchi</p>
              </div>
            </a>
          </li>
          <li class="wkd-project-members-module__item">
            <a href="#" class="wkd-project-member-module">
              <div class="wkd-project-member-module__inner">
                <img src="<?php echo get_template_directory_uri()?>/images/member-sample.jpeg" alt="" class="wkd-project-member-module__image">
                <p class="wkd-project-member-module__role">ArtDirection</p>
                <p class="wkd-project-member-module__name">Syoma Iwauchi</p>
              </div>
            </a>
          </li>
          <li class="wkd-project-members-module__item">
            <a href="#" class="wkd-project-member-module">
              <div class="wkd-project-member-module__inner">
                <img src="<?php echo get_template_directory_uri()?>/images/member-sample.jpeg" alt="" class="wkd-project-member-module__image">
                <p class="wkd-project-member-module__role">ArtDirection</p>
                <p class="wkd-project-member-module__name">Syoma Iwauchi</p>
              </div>
            </a>
          </li>
          <li class="wkd-project-members-module__item">
            <a href="#" class="wkd-project-member-module">
              <div class="wkd-project-member-module__inner">
                <img src="<?php echo get_template_directory_uri()?>/images/member-sample.jpeg" alt="" class="wkd-project-member-module__image">
                <p class="wkd-project-member-module__role">ArtDirection</p>
                <p class="wkd-project-member-module__name">Syoma Iwauchi</p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </article>
</body>
<?php get_footer(); ?>