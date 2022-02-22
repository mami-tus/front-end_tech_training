<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/slick-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/slick.css">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <!-- headの最後に必須 -->
    <?php wp_head(); ?>
  </head>

  <body id="home">
    <div class="wrapper">

      <!-- header -->
      <header class="header">
        <div class="header__logo">
          <h1 class="logo">
            <a href="<?php bloginfo('url'); ?>/" class="logo__link">mamitus</a>
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
              "<?php wp_nav_menu(array(
   'theme_location'=>'place_global',
            'container'     =>'',
            'menu_class'    =>'',
            'items_wrap' => '%3$s',//<ul>を出力しない
          ));
    ?>"
            </ul>
          </div>
        </nav>
      </header>
