<?php get_header(); ?>

<!-- slider -->
      <div class="slider-1">
        <div><a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/./img/kv.jpg"></a></div>
        <div><a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/./img/blog01_coding.jpg"></a></div>
        <div><a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/./img/blog02_bicycle.jpg"></a></div>
        <div><a href="#"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/./img/blog03_coffee.jpg"></a></div>
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
                  <li class="news-list__item">
                    <div class="news-list__heading">
                      <time datetime="2022-01-01" class="news-list__date animate-title">2030.02.01</time>
                      <div class="news-list__label">
                        <span class="label-category label-category__news animate-title">お知らせ</span>
                      </div>
                    </div>
                    <div class="news-list__body">
                      <a href="news-article.html" class="news-list__link animate-title">Webデザインニュースサイト「xxxxxxxx」に取材いただきました</a>
                    </div>
                  </li>
                  <li class="news-list__item">
                    <div class="news-list__heading">
                      <time datetime="2022-01-01" class="news-list__date animate-title">2030.01.25</time>
                      <div class="news-list__label">
                        <span class="label-category label-category__works animate-title">制作実績</span>
                      </div>
                    </div>
                    <div class="news-list__body">
                      <a href="news-article.html" class="news-list__link animate-title">xxxxx様のWebサイトを制作いたしました</a>
                    </div>
                  </li>
                  <li class="news-list__item">
                    <div class="news-list__heading">
                      <time datetime="2022-01-01" class="news-list__date animate-title">2030.01.20</time>
                      <div class="news-list__label">
                        <span class="label-category label-category__recruit animate-title">採用</span>
                      </div>
                    </div>
                    <div class="news-list__body">
                      <a href="news-article.html" class="news-list__link animate-title">フロントエンドエンジニアを１名募集中です</a>
                    </div>
                  </li>

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
                <div class="card">
                  <a href="blog-article.html" class="card__link">
                    <div class="card__img-wrapper">
                      <img class="card__img" src="<?php bloginfo( 'stylesheet_directory' ); ?>/./img/blog01_coding.jpg">
                    </div>
                    <div class="card__heading">
                      <time datetime="2022-01-01" class="card__date animate-title">2030.02.11</time>
                      <div class="card__label">
                        <span class="label-category label-category__study animate-title">勉強</span>
                      </div>
                    </div>
                    <div class="card__body">
                      <p class="card__title animate-title animate-title">コーディング練習おすすめサイト。ブログタイトルブログタイトル</p>
                    </div>
                  </a>
                </div>
                <div class="card">
                  <a href="blog-article.html" class="card__link">
                    <div class="card__img-wrapper">
                      <img class="card__img" src="<?php bloginfo( 'stylesheet_directory' ); ?>/./img/blog02_bicycle.jpg">
                    </div>
                    <div class="card__heading">
                      <time datetime="2022-01-01" class="card__date animate-title">2030.02.01</time>
                      <div class="card__label">
                        <span class="label-category label-category__hobby animate-title">趣味</span>
                      </div>
                    </div>
                    <div class="card__body">
                      <p class="card__title animate-title">自転車を買いました。ブログタイトルブログタイトルブログタイトル</p>
                    </div>
                  </a>
                </div>
                <div class="card">
                  <a href="blog-article.html" class="card__link">
                    <div class="card__img-wrapper">
                      <img class="card__img" src="<?php bloginfo( 'stylesheet_directory' ); ?>/./img/blog03_coffee.jpg">
                    </div>
                    <div class="card__heading">
                      <time datetime="2022-01-01" class="card__date animate-title">2030.01.15</time>
                      <div class="card__label">
                        <span class="label-category label-category__cafe animate-title">カフェ</span>
                      </div>
                    </div>
                    <div class="card__body">
                      <p class="card__title animate-title">人気のコーヒーショップ５選。ブログタイトルブログタイトルブログタイトルブログタイトル</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>


        </section>
      </main>

      <?php get_header(); ?>
