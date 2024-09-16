<?php get_header(); ?>

<main>

  <!-- mv -->
  <div class="l-sub-mv p-sub-mv">
    <div class="p-sub-mv__inner l-inner">
      <div class="p-sub-mv__wrap">
        <div class="p-sub-mv__img">
          <img src="<?php echo get_theme_file_uri('assets/images/archive/fruit-list.jpg'); ?>" width="375" height="200" alt="女性と男性が楽しそうにいちご狩りをしている" />
        </div>
        <div class="p-sub-mv__title-box p-sub-title-box">
          <p class="p-sub-title__top">fruit list</p>
          <h1 class="p-sub-title__bottom">果物一覧</h1>

          <!-- カテゴリードロップダウンメニュー -->
          <div class="p-sub-title__dropdown p-sub-dropdown">
            <div class="p-sub-dropdown__boxs">
              <?php
              $terms = array(
                'apple' => 'りんご',
                'peach' => 'もも',
                'other' => 'その他'
              );
              foreach ($terms as $slug => $name) :
              ?>
                <div class="p-sub-dropdown__box">
                  <div class="p-sub-dropdown__box-body p-small-dropdown">
                    <?php
                    $term = get_term_by('slug', $slug, 'features');
                    if ($term && !is_wp_error($term)) {
                      $term_link = get_term_link($term);
                      if (!is_wp_error($term_link)) {
                    ?>
                        <div class="p-small-dropdown__box-body">
                          <a href="<?php echo esc_url($term_link); ?>" class="p-small-dropdown__body">
                            <?php echo esc_html($name); ?>
                          </a>
                        </div>
                    <?php
                      } else {
                        error_log("Error getting term link for slug: $slug");
                      }
                    } else {
                      error_log("Error getting term for slug: $slug");
                    }
                    ?>
                  </div>
                </div>
              <?php
              endforeach;
              ?>
            </div>
          </div>
        </div>
      </div>

      <!-- パンくず -->
      <div class=" p-sub-mv__breadcrumb c-breadcrumb">
        <?php
        if (function_exists('bcn_display')) {
          bcn_display();
        }
        ?>
      </div>
    </div>
  </div>

  <!-- 記事 -->
  <article class="l-archive-fruits p-archive-fruits">
    <div class="p-archive-fruits__inner l-inner">
      <h2 class="p-archive-fruits__title">
        <?php
        $current_term = get_queried_object();
        if ($current_term->slug === 'peach') {
          echo '丸っともも';
        } elseif ($current_term->slug === 'other') {
          echo '丸っとその他';
        } elseif ($current_term->slug === 'apple') {
          echo '丸っとりんご';
        } else {
          echo esc_html($current_term->name);
        }
        ?>
      </h2>
      <ul class="p-archive-fruits__items">
        <!-- 記事のループ処理開始 -->
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;

        $args = array(
          'post_type' => 'fruits-list',
          'paged' => $paged,
          'posts_per_page' => 9,
          'tax_query' => array(
            array(
              'taxonomy' => $current_term->taxonomy,
              'terms' => $current_term->term_id,
              'field' => 'term_id',
            ),
          ),
        );
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) : ?>
          <?php while ($wp_query->have_posts()) : $wp_query->the_post();
            $explanation = get_post_meta(get_the_ID(), 'explanation', true);
            $season = get_post_meta(get_the_ID(), 'season', true);
            $name = get_post_meta(get_the_ID(), 'name', true);
            $sweet = get_field('sweet');
            $acidity = get_field('acidity');
            $scent = get_field('scent');
            $long_shelf_life = get_field('long-shelf-life');
            $hardness = get_field('hardness');
          ?>
            <li class="p-archive-fruits__item p-fruits-item">
              <!-- 記事へのリンク -->
              <button data-post-id="<?php echo get_the_ID(); ?>" data-explanation="<?php echo esc_attr($explanation); ?>" data-season="<?php echo esc_attr($season); ?>" data-name="<?php echo esc_attr($name); ?>" class="p-fruits-item__link js-open">
                <!-- アイキャッチ -->
                <div class="p-fruits-item__img">
                  <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                </div>
                <!-- タイトル -->
                <h3 class="p-fruits-item__title">
                  <?php the_title(); ?>
                </h3>
                <!-- カテゴリー全部表示 -->
                <div class="p-fruits-item__cats">
                  <?php
                  $taxonomy_terms = get_the_terms($post->ID, 'features');
                  if ($taxonomy_terms && !is_wp_error($taxonomy_terms)) {
                    foreach ($taxonomy_terms as $taxonomy_term) {
                      echo '<span class="p-fruits-item__cat ' . esc_attr($taxonomy_term->slug) . '">' . esc_html($taxonomy_term->name) . '</span>';
                    }
                  }
                  ?>
                </div>
              </button>

              <!-- モーダル -->
              <dialog class="p-fruits-modal bookmark-animation" id="js-modal-<?php echo get_the_ID(); ?>">
                <div class="p-fruits-modal__inner">
                  <button class="visually-hidden"></button>
                  <div class="p-fruits-modal__wrap">
                    <div class="p-fruits-modal__body">
                      <div class="p-fruits-modal__img"></div>
                      <div class="p-fruits-modal__content">
                        <p class="p-fruits-modal__name"></p>
                        <h2 class="p-fruits-modal__title"></h2>
                        <p class="p-fruits-modal__explanation"></p>
                        <div class="p-fruits-modal__details">
                          <div class="p-fruits-modal__detail">
                            <span class="p-fruits-modal__label">旬の時期</span>
                            <p class="p-fruits-modal__season"></p>
                          </div>
                          <div class="p-fruits-modal__detail">
                            <span class="p-fruits-modal__label">甘み</span>
                            <div class="p-fruits-modal__rounds">
                              <?php for ($i = 0; $i < $sweet; $i++) : ?>
                                <span class="p-fruits-modal__round"></span>
                              <?php endfor; ?>
                            </div>
                          </div>
                          <div class="p-fruits-modal__detail">
                            <span class="p-fruits-modal__label">酸味</span>
                            <div class="p-fruits-modal__rounds">
                              <?php for ($i = 0; $i < $acidity; $i++) : ?>
                                <span class="p-fruits-modal__round"></span>
                              <?php endfor; ?>
                            </div>
                          </div>
                          <div class="p-fruits-modal__detail">
                            <span class="p-fruits-modal__label">香り</span>
                            <div class="p-fruits-modal__rounds">
                              <?php for ($i = 0; $i < $scent; $i++) : ?>
                                <span class="p-fruits-modal__round"></span>
                              <?php endfor; ?>
                            </div>
                          </div>
                          <div class="p-fruits-modal__detail">
                            <span class="p-fruits-modal__label">日持ち</span>
                            <div class="p-fruits-modal__rounds">
                              <?php for ($i = 0; $i < $long_shelf_life; $i++) : ?>
                                <span class="p-fruits-modal__round"></span>
                              <?php endfor; ?>
                            </div>
                          </div>
                          <div class="p-fruits-modal__detail">
                            <span class="p-fruits-modal__label">かたさ</span>
                            <div class="p-fruits-modal__rounds">
                              <?php for ($i = 0; $i < $hardness; $i++) : ?>
                                <span class="p-fruits-modal__round"></span>
                              <?php endfor; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="p-fruits-modal__btn js-close">
                    <button class="c-modal-btn c-modal-btn--white">閉じる</button>
                  </div>
                </div>
              </dialog>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>

      <!-- ページナビ -->
      <div class="p-archive-pagenave l-archive-pagenave">
        <?php
        $pagination = get_the_posts_pagination(array(
          'mid_size'  => 2,
          'end_size'  => 1,
          'prev_text' => '<',
          'next_text' => '>',
          'screen_reader_text' => ' ',
        ));
        echo preg_replace('/\<h2 class=\"screen-reader-text\"\>(.*?)\<\/h2\>\n/', '', $pagination);
        ?>
      </div>

      <!-- メニュー -->
      <div class="l-fruits-menu p-fruits-menu">
        <div class="p-fruits-menu__wrap">
          <div class="p-fruits-menu__title-box">
            <p class="p-fruits-menu__en-title">fruit list</p>
            <p class="p-fruits-menu__ja-title">果物一覧</p>
          </div>
          <div class="p-fruits-menu__boxs">
            <?php
            $terms = array(
              'apple' => 'りんご',
              'peach' => 'もも',
              'other' => 'その他'
            );
            foreach ($terms as $slug => $name) {
              $term = get_term_by('slug', $slug, 'features');
              if ($term && !is_wp_error($term)) {
                $term_link = get_term_link($term);
                if (!is_wp_error($term_link)) :
            ?>
                  <div class="p-fruits-menu__box p-fruits-menu-box">
                    <a href="<?php echo esc_url($term_link); ?>" class="p-fruits-menu-box__link">
                      <?php echo esc_html($name);
                      ?>
                    </a>
                  </div>
            <?php
                endif;
              }
            }
            ?>
          </div>
        </div>
      </div>

    </div>
  </article>

  <!-- 詰め合わせ一覧 -->
  <article id="assortment" class="l-archive-assortment p-archive-assortment">
    <div class="p-archive-assortment__inner l-inner">
      <div class="p-archive-assortment__titles">
        <p class="p-archive-assortment__en-title">popular</p>
        <h2 class="p-archive-assortment__ja-title">配送で人気な詰め合わせ</h2>
      </div>
      <ul class="p-archive-assortment__items">
        <!-- 記事のループ処理開始 -->
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'assortment',
          'paged' => $paged,
          'posts_per_page' => 6,
        );
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) :
          while ($wp_query->have_posts()) : $wp_query->the_post();
            $explanation = get_post_meta(get_the_ID(), 'explanation', true);
            $name = get_post_meta(get_the_ID(), 'name', true);
            $weight1 = get_post_meta(get_the_ID(), 'weight-1', true);
            $weight2 = get_post_meta(get_the_ID(), 'weight-2', true);
            $price1 = get_post_meta(get_the_ID(), 'price-1', true);
            $price2 = get_post_meta(get_the_ID(), 'price-2', true);
        ?>
            <li class="p-archive-assortment__item p-assortment-item">
              <!-- 記事へのリンク -->
              <button data-post-id="<?php echo get_the_ID(); ?>" data-explanation="<?php echo esc_attr($explanation); ?>" data-name="<?php echo esc_attr($name); ?>" data-weight1="<?php echo esc_attr($weight1); ?>" data-weight2="<?php echo esc_attr($weight2); ?>" data-price1="<?php echo esc_attr($price1); ?>" data-price2="<?php echo esc_attr($price2); ?>" class="p-assortment-item__link js-assortment-open">
                <!-- アイキャッチ -->
                <div class="p-assortment-item__img">
                  <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                </div>
                <!-- タイトル -->
                <h3 class="p-assortment-item__title">
                  <?php the_title(); ?>
                </h3>
                <!-- カテゴリー表示 -->
                <div class="p-assortment-item__cats">
                  <?php
                  $taxonomy_terms = get_the_terms($post->ID, 'kinds');
                  if ($taxonomy_terms && !is_wp_error($taxonomy_terms)) {
                    foreach ($taxonomy_terms as $taxonomy_term) {
                      echo '<span class="p-assortment-item__cat ' . esc_attr($taxonomy_term->slug) . '">' . esc_html($taxonomy_term->name) . '</span>';
                    }
                  }
                  ?>
                </div>
              </button>

              <!-- モーダル -->
              <dialog class="p-assortment-modal bookmark-animation" id="js-assortment-modal-<?php echo get_the_ID(); ?>">
                <div class="p-assortment-modal__inner">
                  <button class="visually-hidden"></button>
                  <div class="p-assortment-modal__wrap">
                    <div class="p-assortment-modal__body">
                      <div class="p-assortment-modal__img"></div>
                      <div class="p-assortment-modal__content">
                        <p class="p-assortment-modal__name"></p>
                        <h2 class="p-assortment-modal__title"></h2>
                        <p class="p-assortment-modal__explanation"></p>
                        <div class="p-assortment-modal__details">
                          <div class="p-assortment-modal__detail">
                            <p class="p-assortment-modal__weight1"></p>
                            <p class="p-assortment-modal__price1"></p>
                          </div>
                          <div class="p-assortment-modal__detail">
                            <p class="p-assortment-modal__weight2"></p>
                            <p class="p-assortment-modal__price2"></p>
                          </div>
                        </div>
                        <p class="p-assortment__text">※送料はメールにてご案内いたします。</p>
                        <div class="p-assortment-modal__link">
                          <a href="<?php echo esc_url(home_url('/#delivery')); ?>">配送の流れについてはこちら</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="p-assortment-modal__btns">
                  <div class="p-assortment-modal__btn1">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-modal-btn">購入する</a>
                  </div>
                  <div class="p-assortment-modal__btn2">
                    <button class="c-modal-btn c-modal-btn--white js-assortment-close">閉じる</button>
                  </div>
                </div>
              </dialog>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
    </div>
  </article>

  <!-- cta -->
  <?php
  display_cta_section();
  ?>

</main>

<?php get_footer(); ?>