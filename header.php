<!DOCTYPE html>
<html>
  <head>
  <?php wp_head(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <title>fiber</title>
    <meta name="description" content="" />
    <meta name="author" content="fiber" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/header.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/index.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/creator.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/member.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/works.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/works-details.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/article.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/page.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/contact.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/slider-zoom.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/company.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick-theme.css" media="screen" />

    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <meta name="robots" content="noindex,nofollow" />
    <link rel="canonical" href="https://lopan.jp/css-animation" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.3.1/dist/css/yakuhanjp.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"/>
  </head>
  <body>
    <header class="header">
    <div class="header__left">
      <a href="<?php echo home_url(); ?>" class="header__left__logo"><img src="<?php echo get_template_directory_uri()?>/images/fiber_web.png" alt="ロゴ"></a>
    </div>
    <div class="header__right">
      <?php
      $args = array(
        'menu' => "grobal-navigation",//管理画面で作成したメニュー
        "menu_class" =>"header__right__list",//メニューを構成するulタグのクラス
        "contaier" => false, //<ul>タグを囲んでいる<div>タグを削除
      );
      wp_nav_menu($args);
      ?>
    </div>
  </header>
  <nav class="navi">
    <?php
    $args = array(
      'menu' => "grobal-navigation",//管理画面で作成したメニュー
      "menu_class" =>"",//メニューを構成するulタグのクラス
      "contaier" => false, //<ul>タグを囲んでいる<div>タグを削除
    );
    wp_nav_menu($args);
    ?>
  </nav>
  <div class="header-responsive">
    <div class="header-responsive__left">
      <a href="<?php echo home_url(); ?>">
        <div class="logo">
          <img src="<?php echo get_template_directory_uri()?>/images/fiber_web.png" alt="ロゴ">
        </div>
      </a>
    </div>
    <div class="header-responsive__right">
      <div class="toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
</body>