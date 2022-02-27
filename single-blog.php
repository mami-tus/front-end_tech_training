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

        <!-- blog detail -->
        <section class="blog-article-wrapper l-section">
          <div class="l-inner l-inner--xs">
            <div class="blog-article">
              <div class="article">
                <div class="article__heading">
                  <h2 class="animate-title">BLOG</h2>
                </div>
                <div class="article__head">
                  <div class="article__title animate-title"><?php the_title(); ?></div>
                  <div class="article__info">
                    <time class="article__date"><?php the_date(); ?></time>
                    <div class="article__label">
                    <?php  // 投稿に紐づくタームを表示
                          blog_cat_color()
                        ?>
                    </div>
                  </div>
                </div>

                <div class="article__body">
                  <?php
                      // $eyecatch = get_eyecatch_with_default();
                      //画像フィールドの取得（返り値：オブジェクト）
                      $image = get_field('blog-image'); if( !empty($image) ):
                      ?>
                  <p>
                    <img src="<?php echo $image['sizes']['large'];//指定したサイズのサムネイルのURL ?>">
                  </p>
                  <?php endif; ?>
                  <?php the_content(); ?>

                </div>

                <div class="btn">
                  <a href="<?php echo get_post_type_archive_link('blog'); ?>">BLOG一覧</a>
                </div>

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
