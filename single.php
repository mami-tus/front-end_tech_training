<?php get_header(); ?>

<!-- contents -->
<main class="contents" id="contents">
  <div class="">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


      <section class="news-article-wrapper l-section">
        <div class="l-inner l-inner--xs">
          <div class="news-article">
            <div class="article">
              <div class="article__heading">
                <h2 class="animate-title">NEWS</h2>
              </div>
              <div class="article__head">
                <div class="article__title animate-title">
                  <?php the_title(); ?></div>
                <div class="article__info">
                  <time class="article__date"><?php the_time('Y/m/d'); ?></time>
                  <div class="card__label">
                    <span class="label-category label-category__news">お知らせ</span>
                  </div>
                </div>
              </div>
              <?php the_content(); ?>

          <?php endwhile;
      endif; ?>

          <div class="article__pager-home">
            <a class="btn" href="<?php bloginfo('url'); ?>/">HOME</a>
          </div>
            </div>

          </div>
        </div>
      </section>


</main>

<?php get_footer(); ?>
