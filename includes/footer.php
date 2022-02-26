<!-- footer -->
<footer class="footer">
    <div class="footer__inner">
      <div class="footer__logo">
        <h1 class="logo">
          <a href="<?php bloginfo('url'); ?>" class="logo__link">
            <?php bloginfo('name'); ?>
          </a>
        </h1>
      </div>
      <?php
      // メニューIDを取得する
      $menu_name = 'footer_nav';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object($locations[$menu_name]);

      $menu_items = wp_get_nav_menu_items($menu->term_id);
      ?>

      <nav class="footer-nav">
        <ul class="footer-nav__list">
          <?php foreach ($menu_items as $item) : ?>
            <li class="footer-nav__item">
              <a class="footer-nav__link" href="<?php echo esc_attr($item->url); ?>">
                <?php echo esc_html($item->title); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>

    <small class="copyright">&copy;2022 mamitus</small>
  </footer>


