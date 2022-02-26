<!DOCTYPE html>
<html lang="ja">

<head>

  <?php get_header(); ?>

</head>

<body id="home">
  <div class="wrapper">

    <!-- header -->
    <?php get_template_part('includes/header'); ?>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <!-- contents -->
        <main class="contents" id="contents">

          <!-- news news-article -->
          <section class="service-article-wrapper l-section">
            <div class="l-inner l-inner--xs">
              <div class="service-article">
                <div class="article">
                  <div class="article__heading">
                    <h2 class="animate-title service-title">
                      <?php the_title(); ?>
                    </h2>
                  </div>

                  <div class="article__body">
                    <?php the_content(); ?>
                  </div>

                  <?php if (is_page(39)) : ?>
                  <div class="btn">
                    <a href="<?php bloginfo('url'); ?>">HOME</a>
                  </div>
                  <?php endif; ?>

                </div>

              </div>
            </div>
          </section>
        </main>

      <?php endwhile; ?>
    <?php endif; ?>
    <!-- footer -->
    <?php get_template_part('includes/footer'); ?>

  </div>
  <?php get_footer(); ?>
</body>

</html>
