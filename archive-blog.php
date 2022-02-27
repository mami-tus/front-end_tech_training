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

        <!-- blog一覧 -->
        <section class="blog-detail l-section">
          <div class="l-inner l-inner--xl">

            <div class="blog-detail__heading">
              <h2 class="animate-title">BLOG</h2>
            </div>

            <?php if (have_posts()) : ?>

            <div class="blog-detail__body">


              <div class="card-wrapper card-wapper--col3">
                <?php while (have_posts()) : the_post(); ?>
                <div class="card">
                  <a href="<?php the_permalink(); ?>" class="card__link">
                    <div class="card__img-wrapper">
                      <?php
                      // $eyecatch = get_eyecatch_with_default();
                      //画像フィールドの取得（返り値：オブジェクト）
                      $image = get_field('blog-image'); if( !empty($image) ):
                      ?>
                      <img class="card__img" src="<?php echo $image['sizes']['large'];//指定したサイズのサムネイルのURL ?>">
                      <?php endif; ?>
                    </div>
                    <div class="card__heading">
                      <time datetime="2022-01-01" class="card__date">
                        <?php the_time('Y/m/d'); ?>
                      </time>


                      <div class="card__label">

                        <?php  // 投稿に紐づくタームを表示
                          blog_cat_color()
                        ?>

                      </div>
                    </div>
                    <div class="card__body">
                      <p class="card__title"><?php the_title(); ?></p>
                    </div>
                  </a>
                </div>

                <?php endwhile; ?>
              </div>
            </div>


            <!-- pagination -->
            <div class="blog-detail__pagination">
              <?php
              if (function_exists('pagination')) :
                pagination($wp_query->max_num_pages, get_query_var('paged'));
              endif;
              ?>
              <?php else : //記事がない時
            ?>
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
