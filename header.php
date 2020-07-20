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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/works.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/stylesheets/works-details.css" />
    <meta name="robots" content="noindex,nofollow" />
    <link rel="canonical" href="https://lopan.jp/css-animation" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.3.1/dist/css/yakuhanjp.min.css"
    />
    <script type="text/javascript" src="javascript/fuwa.js"></script>
    <script type="text/javascript" src="javascript/music.js"></script>
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
              <ul>
                <li class="t-menu"><a href="<?php echo home_url('/works'); ?>">works</a></li>
                <li class="t-menu"><a href="#" class="t-link">creater</a></li>
                <li class="t-menu"><a href="#" class="t-link">blog</a></li>
                <li class="t-menu"><a href="#" class="t-link">company</a></li>
                <li class="t-menu"><a href="#" class="t-link">contact</a></li>
              </ul>
            </nav>
            <figure>
              <audio controls src="mp3/Family_Happiness.mp3" loop>
                Your browser does not support the
                <code>audio</code> element.
              </audio>
            </figure>
          </div>
        </div>
      </div>
    </header> 
