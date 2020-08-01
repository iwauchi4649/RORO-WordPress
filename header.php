<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <title>fiber</title>
    <meta name="description" content="" />
    <meta name="author" content="fiber" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/index.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/creator.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/member.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/works.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/works-details.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/article.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/page.css" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <meta name="robots" content="noindex,nofollow" />
    <link rel="canonical" href="https://lopan.jp/css-animation" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.3.1/dist/css/yakuhanjp.min.css"
    />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri()?>/javascript/slide.js"></script>
  <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    />
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <?php wp_head(); ?>
  </head>
  <body>
  


    <!-- <div class="shutter">
      <p class="text_clip">Welcom to<br/>fiber</p>
    </div>  -->
     <header>
      <div class="logo">
        <p><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri()?>/images/fiber_web.png" alt="main_logo" /></a></p>
        <div id="nav-drawer">
          <input id="nav-input" type="checkbox" class="nav-unshown" />
          <label id="nav-open" for="nav-input"><span></span></label>
          <label class="nav-unshown" id="nav-close" for="nav-input"></label>
          <div id="nav-content">
            <nav>
              <?php
              $args = array(
                'menu' => "grobal-navigation",//管理画面で作成したメニュー
                "menu_class" =>"",//メニューを構成するulタグのクラス
                "contaier" => false, //<ul>タグを囲んでいる<div>タグを削除
              );
              wp_nav_menu($args);
              ?>
            </nav>
            <figure>
              <audio controls src="<?php echo get_template_directory_uri()?>/mp3/Family_Happiness.mp3" loop>
                Your browser does not support the
                <code>audio</code> element.
              </audio>
            </figure>
          </div>
        </div>
      </div>
    </header> 
