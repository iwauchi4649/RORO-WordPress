<!DOCTYPE html>
<html>
  <head>
  <?php wp_head(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <title>RORO</title>
    <meta name="description" content="" />
    <meta name="author" content="fiber" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/images/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/css/header.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/css/shutter.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/css/footer.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/css/business.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/css/campany.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/css/contact.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/css/message.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/css/common.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/slick/slick-theme.css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <meta name="robots" content="noindex,nofollow" />
  </head>
  <body>
    <header class="header">
      <div class="header__container">
        <h1 class="header__container__logo">
          <a href="<?php echo home_url(); ?>" class="header__container__logo__link">
            <img class="logo" src="<?php echo get_template_directory_uri()?>/images/roro-rogo.png" alt="ロゴ">
          </a>
        </h1>
        <div class="header__container__global-menu">
          <ul class="header__container__global-menu__item">
            <li class="header__container__global-menu__item__list">
              <p class="header__container__global-menu__item__list__text">BUSINESS</p>
            </li>
            <li class="header__container__global-menu__item__list">
              <p class="header__container__global-menu__item__list__text">CAMPANY</p>
            </li>
            <li class="header__container__global-menu__item__list">
              <p class="header__container__global-menu__item__list__text">MESSAGE</p>
            </li>
            <li class="header__container__global-menu__item__list">
              <p class="header__container__global-menu__item__list__text">CONTACT</p>
            </li>
          </ul>
        </div>
        <div class="header__container__responsive-button">
          <div class="toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header>