<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mamitus</title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/./css/slick-theme.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/./css/slick.css">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php bloginfo( 'stylesheet_directory' ); ?>/
  </head>


  <body id="home">
    <div class="wrapper">

      <!-- header -->
      <header class="header">
        <div class="header__logo">
          <h1 class="logo">
          <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
          </h1>
        </div>

        <!-- menu -->

        <div class="menu">
          <a class="menu__link">
            <span class="menu__line menu__line--top"></span>
            <span class="menu__line menu__line--center"></span>
            <span class="menu__line menu__line--bottom"></span>
          </a>
        </div>

        <!-- gnav -->

        <nav class="gnav">
          <div class="gnav__wrap">
            <ul class="gnav__list">
              <li class="gnav__item">
                <a class="gnav__link" href="index.html">HOME</a>
              </li>
              <li class="gnav__item">
                <a class="gnav__link" href="news.html">NEWS</a>
              </li>
              <li class="gnav__item">
                <a class="gnav__link" href="blog.html">BLOG</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

