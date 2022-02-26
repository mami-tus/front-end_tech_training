<!DOCTYPE html>
<html lang="ja">

<head>

  <?php get_header(); ?>

</head>

<body id="home">
  <div class="wrapper">

    <!-- header -->
    <?php get_template_part('includes/header'); ?>


    <!-- contents -->
    <main class="contents" id="contents">

      <!-- news一覧 -->
      <section class="news l-section">
        <div class="l-inner">

          <div class="news__heading">
            <h2 class="animate-title">NEWS</h2>
          </div>

          <?php if (have_posts()) : ?>

            <div class="news__body">
              <div class="news-list">
                <ul class="news-list__list">

                  <?php while (have_posts()) : the_post(); ?>
                    <li class="news-list__item">
                      <div class="news-list__heading">
                        <time datetime="2022-01-01" class="news-list__date animate-title">
                          <?php the_time('Y/m/d'); ?>
                        </time>
                        <div class="news-list__label">
                        <?php //カテゴリー名、ラベル色反映
                            news_cat_color()
                            ?>
                        </div>
                      </div>
                      <div class="news-list__body">
                        <a href="<?php the_permalink(); ?>" class="news-list__link animate-title">
                          <?php the_title(); ?>
                        </a>
                      </div>
                    </li>
                  <?php endwhile; ?>

                </ul>
              </div>
            </div>


            <!-- pagination -->
            <div class="news-detail__pagination">
            <?php
              if (function_exists('pagination')) :
                pagination($wp_query->max_num_pages, get_query_var('paged'));
              endif;
              ?>
            </div>

          <?php else : ?>
            <p>記事が見つかりませんでした</p>
          <?php endif; ?>
        </div>

      </section>


    </main>

    <!-- footer -->
    <?php get_template_part('includes/footer'); ?>

  </div>
  <?php get_footer(); ?>
</body>

</html>
