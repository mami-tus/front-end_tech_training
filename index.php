<!DOCTYPE html>
<html lang="ja">

  <head>

    <?php get_header(); ?>

  </head>

  <body id="home">
    <div class="wrapper">

      <!-- header -->
      <?php get_template_part('includes/header'); ?>

      <!-- slider -->
      <div class="slider-1">
        <div><a href="<?php bloginfo('url'); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/kv.jpg"></a>
        </div>
        <div><a href="<?php bloginfo('url'); ?>/"><img
              src="<?php echo get_template_directory_uri(); ?>/img/blog01_coding.jpg"></a></div>
        <div><a href="<?php bloginfo('url'); ?>/"><img
              src="<?php echo get_template_directory_uri(); ?>/img/blog02_bicycle.jpg"></a></div>
        <div><a href="<?php bloginfo('url'); ?>/"><img
              src="<?php echo get_template_directory_uri(); ?>/img/blog03_coffee.jpg"></a></div>
      </div>


      <!-- contents -->
      <main class="contents" id="contents">

        <!-- news -->
        <section class="news l-section">
          <div class="l-inner">

            <div class="news__heading">
              <h2 class="animate-title">NEWS</h2>
            </div>

            <?php if (have_posts()) : ?>

            <div class="news__body">
              <div class="news-list">
                <ul class="news-list__list">

                  <?php
                  $args = [

                    'numberposts' => 3
                  ];
                  // 条件を渡して記事を取得
                  $custom_posts = get_posts($args);
                  ?>

                  <?php
                  foreach ($custom_posts as $post) : setup_postdata($post); ?>

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
                  <?php endforeach; ?>


                </ul>
              </div>
              <?php else : ?>
              <p>記事が見つかりませんでした</p>

              <?php endif; ?>
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

            <?php if (have_posts()) : ?>
            <div class="blog__body">
              <div class="card-wrapper card-wapper--col3">

                <?php
                $args = [
                  'post_type' => 'blog', //blog一覧取得
                  'numberposts' => 3,
                ];
                // 条件を渡して記事を取得
                $custom_posts = get_posts($args);
                ?>

                <?php
                foreach ($custom_posts as $post) : setup_postdata($post); ?>
                <div class="card">
                  <a href="<?php the_permalink(); ?>" class="card__link">
                  <?php
                      // $eyecatch = get_eyecatch_with_default();
                      //画像フィールドの取得（返り値：オブジェクト）
                      $image = get_field('blog-image'); if( !empty($image) ):
                      ?>
                    <div class="card__img-wrapper">
                      <img class="card__img" src="<?php echo $image['sizes']['large'];//指定したサイズのサムネイルのURL ?>">
                    </div>
                    <?php endif; ?>
                    <div class="card__heading">
                      <time datetime="2022-01-01" class="card__date animate-title">
                        <?php the_time('Y/m/d'); ?>
                      </time>
                      <div class="card__label">
                      <?php  // 投稿に紐づくタームを表示
                          blog_cat_color()
                        ?>
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

              <?php else : ?>
              <div class="l-inner">
                <p>記事が見つかりませんでした</p>
              </div>
              <?php endif; ?>
            </div>
          </div>


        </section>


      </main>

      <!-- footer -->
      <?php get_template_part('includes/footer'); ?>

    </div>
    <?php get_footer(); ?>
  </body>

</html>
