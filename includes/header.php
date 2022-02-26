    <!-- header -->
    <header class="header">
      <div class="header__logo">
        <h1 class="logo">
          <a href="<?php bloginfo('url'); ?>" class="logo__link">
            <?php bloginfo('name'); ?>
          </a>
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
      <?php
      // メニューIDを取得する
      $menu_name = 'global_nav';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);

      $menu_items = wp_get_nav_menu_items($menu->term_id);
      ?>

      <nav class="gnav">
        <div class="gnav__wrap">
          <ul class="gnav__list">
            <?php foreach ($menu_items as $item) : ?>
              <li class="gnav__item">
                <a class="gnav__link" href="<?php echo esc_attr($item->url); ?>">
                  <?php echo esc_html($item->title); ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </nav>
    </header>
