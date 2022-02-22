      <!-- footer -->
      <footer class="footer">
        <div class="footer__inner">
          <div class="footer__logo">
            <h1 class="logo">
              <a href="index.html" class="logo__link">mamitus</a>
            </h1>
          </div>
          <nav class="footer-nav">
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a class="footer-nav__link" href="<?php bloginfo('url'); ?>/">HOME</a>
              </li>
              <li class="footer-nav__item">
                <a class="footer-nav__link" href="<?php bloginfo('url'); ?>/service">SERVICE</a>
              </li>
              <li class="footer-nav__item">
                <a class="footer-nav__link" href="<?php bloginfo('url'); ?>/news">NEWS</a>
              </li>
              <li class="footer-nav__item">
                <a class="footer-nav__link" href="<?php bloginfo('url'); ?>/blog">BLOG</a>
              </li>
            </ul>
          </nav>
        </div>

        <small class="copyright">&copy;2022 mamitus</small>
      </footer>

      </div>
      <!-- jQueryのCDN -->
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

      <script src="<?php bloginfo('stylesheet_directory'); ?>/js/slick.min.js"></script>
      <script src="<?php bloginfo('stylesheet_directory'); ?>/js/text-animation.js"></script>
      <script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>

      <!-- bodyタグの前に必須 -->
      <?php wp_footer(); ?>
      </body>

      </html>
