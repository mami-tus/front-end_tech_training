<?php get_header(); ?>

<!-- slider -->
<div class="slider-1">
  <div><a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/kv.jpg"></a></div>
  <div><a href="<?php bloginfo('url'); ?>/"><img
        src="<?php bloginfo('stylesheet_directory'); ?>/img/blog01_coding.jpg"></a></div>
  <div><a href="<?php bloginfo('url'); ?>/"><img
        src="<?php bloginfo('stylesheet_directory'); ?>/img/blog02_bicycle.jpg"></a></div>
  <div><a href="#<?php bloginfo('url'); ?>/"><img
        src="<?php bloginfo('stylesheet_directory'); ?>/img/blog03_coffee.jpg"></a></div>
</div>

<!-- contents -->
<main class="contents" id="contents">

  <!-- news -->
  <section class="news l-section">
    <div class="l-inner">
      <div class="news__heading">
        <h2 class="animate-title">NEWS</h2>
      </div>
      <div class="news__body">
        <div class="news-list">
          <ul class="news-list__list">

            <?php
            $infoPosts = get_posts('numberposts=3&category=3');
            foreach ($infoPosts as $post) :
            ?>
            <li class="news-list__item">
              <div class="news-list__heading">
                <time datetime="2022-01-01" class="news-list__date animate-title">
                  <?php the_time('Y-m-d'); ?>
                </time>
                <div class="news-list__label">
                  <span class="label-category label-category__<?php $cat = get_the_category();
                                                                $cat = $cat[0]; {
                                                                  echo $cat->slug;
                                                                } ?> animate-title">
                    <?php $cat = get_the_category();
                      $cat = $cat[0]; {
                        echo $cat->cat_name;
                      } ?>
                  </span>
                </div>
              </div>
              <div class="news-list__body">
                <a href="<?php the_permalink(); ?>" class="news-list__link animate-title">
                  <?php the_title(); ?>
                </a>
              </div>
            </li>
            <?php endforeach; ?>


          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- blog -->
  <section class="blog l-section">
    <div class="l-inner l-inner--xl">
      <!-- l-innerも入れるとそちらも反映されて便利 -->
      <div class="blog__heading">
        <h2 class="animate-title">BLOG</h2>
      </div>
      <div class="blog__body">
        <div class="card-wrapper card-wapper--col3">
          <?php
          $infoPosts = get_posts('numberposts=3&category=6');
          foreach ($infoPosts as $post) :
          ?>
          <div class="card">
            <a href="<?php the_permalink(); ?>" class="card__link">
              <div class="card__img-wrapper">
                <img class="card__img" src="<?php bloginfo('stylesheet_directory'); ?>/img/blog01_coding.jpg">
              </div>
              <div class="card__heading">
                <time datetime="2022-01-01" class="card__date animate-title">
                  <?php the_time('Y-m-d'); ?>
                </time>
                <div class="card__label">
                  <span class="label-category label-category__<?php $cat = get_the_category();
                                                                $cat = $cat[0]; {
                                                                  echo $cat->slug;
                                                                } ?> animate-title">
                    <?php $cat = get_the_category();
                      $cat = $cat[0]; {
                        echo $cat->cat_name;
                      } ?>
                  </span>
                </div>
              </div>
              <div class="card__body">
                <p class="card__title animate-title animate-title">
                  <?php the_title(); ?>
                </p>
              </div>
            </a>
          </div>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>