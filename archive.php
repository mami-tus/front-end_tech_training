<?php get_header(); ?>

<!-- contents -->
<main class="contents" id="contents">
<div class="">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

  <!-- news-list -->
  <section class="news-detail l-section">



    <?php if (in_category(array('4'))) { ?>
    <div class="l-inner l-inner--sm">
      <div class="news-detail__heading">
        <h2 class="animate-title">NEWS一覧</h2>
      </div>

      <div class="news-detail__body">

        <div class="news-list">
          <ul class="news-list__list">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
            <?php endwhile;
              endif; ?>
          </ul>
        </div>

      </div>
    </div>

    <?php } elseif (in_category(array('5'))) { ?>
    <div class="l-inner l-inner--sm">
      <div class="news-detail__heading">
        <h2 class="animate-title">NEWS一覧</h2>
      </div>

      <div class="news-detail__body">

        <div class="news-list">
          <ul class="news-list__list">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
            <?php endwhile;
              endif; ?>
          </ul>
        </div>

      </div>
    </div>



    <?php } else { ?>
    <div class="l-inner l-inner--sm">
      <div class="news-detail__heading">
        <h2 class="animate-title">NEWS一覧</h2>
      </div>

      <div class="news-detail__body">

        <div class="news-list">
          <ul class="news-list__list">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
            <?php endwhile;
              endif; ?>
          </ul>
        </div>

      </div>
    </div>

    <?php } ?>








  </section>

</main>


<?php get_footer(); ?>
