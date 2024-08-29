<?php get_header(); ?>

<main>

  <!-- mv -->
  <div class="l-sub-mv p-sub-mv">
    <div class="p-sub-mv__inner l-inner">
      <div class="p-sub-mv__wrap">
        <div class="p-sub-mv__img">
          <img src="<?php echo get_theme_file_uri('assets/images/home/home.jpg'); ?>" width="355" height="200" alt="木にフルーツが実っている" />
        </div>
        <div class="p-sub-mv__title-box p-sub-title-box">
          <p class="p-sub-title__top">news</p>
          <h2 class="p-sub-title__bottom">お知らせ</h2>

          <!-- カテゴリードロップダウンメニュー -->
          <div class="p-sub-title__dropdown p-sub-dropdown">
            <div class="p-sub-dropdown__boxs">
              <div class="p-sub-dropdown__box">
                <div class="p-sub-dropdown__box-body p-small-dropdown">
                  <select name="category-dropdown" class="p-small-dropdown__body" onchange="document.location.href=this.options[this.selectedIndex].value;">
                    <option disabled selected value>カテゴリー</option>
                    <?php
                    $categories = get_categories(array(
                      'orderby'    => 'name',
                      'order'      => 'ASC',
                      'hide_empty' => 1,
                    ));
                    foreach ($categories as $category) {
                      $category_link = get_category_link($category->term_id);
                      echo sprintf('<option value="%s">%s</option>', esc_url($category_link), esc_html($category->name));
                    }
                    ?>
                  </select>
                </div>
              </div>
              <!-- アーカイブドロップダウンメニュー -->
              <div class="p-sub-dropdown__box">
                <div class="p-sub-dropdown__box-body p-small-dropdown">
                  <select name="archive-dropdown" class="p-small-dropdown__body p-small-dropdown__body--bg" onchange="document.location.href=this.options[this.selectedIndex].value;">
                    <option disabled selected value>アーカイブ</option>
                    <?php
                    $archives = wp_get_archives(array(
                      'type'            => 'monthly',
                      'format'          => 'option',
                      'post_type'       => 'post',
                      'show_post_count' => 0
                    ));
                    echo $archives;
                    ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- パンくず -->
      <div class="p-sub-mv__breadcrumb c-breadcrumb">
        <?php
        if (function_exists('bcn_display')) {
          bcn_display();
        }
        ?>
      </div>
    </div>
  </div>

  <!-- 記事一覧 -->
  <article class="p-archive-news l-archive-news">
    <div class="p-archive-news__inner l-inner">
      <ul class="p-archive-news__items">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php
            $current_date = current_time('timestamp');
            $post_date = get_the_time('U');
            $is_recent = ($current_date - $post_date) <= (7 * DAY_IN_SECONDS);
            $item_class = 'p-archive-news__item p-news-item';
            if ($is_recent) {
              $item_class .= ' recent-post';
            }
            ?>
            <!-- 記事 -->
            <li class="<?php echo esc_attr($item_class); ?>">
              <a href="<?php the_permalink(); ?>">
                <!-- アイキャッチ -->
                <div class="p-news-item__img">
                  <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                </div>
                <div class="p-news-item__text-box">
                  <div class="p-news-item__info">
                    <!-- 投稿のカテゴリーを取得 -->
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                      $category = $categories[0];
                      echo '<span class="p-news-item__cat ' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</span>';
                    }
                    ?>
                    <!-- 投稿日 -->
                    <time class="p-news-item__date" datetime="<?php the_time('Y.n.j'); ?>">
                      <?php the_time('Y.m.d'); ?>
                    </time>
                  </div>
                  <h2 class="p-news-item__title">
                    <!-- タイトル -->
                    <?php the_title(); ?>
                  </h2>
                </div>
              </a>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <p>まだ記事がありません</p>
        <?php endif; ?>
      </ul>

      <!-- ページナビ -->
      <div class="p-archive-pagenave l-archive-pagenave">
        <?php
        $pagination_args = array(
          'mid_size'  => 2,
          'end_size'  => 1,
          'prev_text' => '<',
          'next_text' => '>',
          'screen_reader_text' => ' ',
        );
        the_posts_pagination($pagination_args);
        ?>
      </div>

      <!-- ドロップダウンメニュー -->
      <div class="l-archive-dropdown p-archive-dropdown">
        <div class="p-archive-dropdown__boxs">
          <!-- カテゴリードロップダウンメニュー -->
          <div class="p-archive-dropdown__box">
            <div class="p-archive-dropdown__title-box">
              <p class="p-archive-dropdown__ja-title">カテゴリー</p>
              <p class="p-archive-dropdown__en-title">category</p>
            </div>
            <div class="p-archive-dropdown__wrap p-big-dropdown">
              <select name="category-dropdown" class="p-big-dropdown__body" onchange="document.location.href=this.options[this.selectedIndex].value;">
                <option disabled selected value>選択してください</option>
                <?php
                $categories = get_categories(array(
                  'orderby'    => 'name',
                  'order'      => 'ASC',
                  'hide_empty' => 1,
                ));

                foreach ($categories as $category) {
                  $category_link = get_category_link($category->term_id);
                  echo sprintf('<option value="%s">%s</option>', esc_url($category_link), esc_html($category->name));
                }
                ?>
              </select>
            </div>
          </div>
          <!-- アーカイブドロップダウンメニュー -->
          <div class="p-archive-dropdown__box">
            <div class="p-archive-dropdown__title-box">
              <p class="p-archive-dropdown__ja-title">アーカイブ</p>
              <p class="p-archive-dropdown__en-title">archive</p>
            </div>
            <div class="p-archive-dropdown__wrap p-big-dropdown">
              <select name="archive-dropdown" class="p-big-dropdown__body" onchange="document.location.href=this.options[this.selectedIndex].value;">
                <option disabled selected value>選択してください</option>
                <?php
                $archives = wp_get_archives(array(
                  'type'            => 'monthly',
                  'format'          => 'option',
                  'post_type'       => 'post',
                  'show_post_count' => 0
                ));

                echo $archives;
                ?>
            </div>
            </select>
          </div>
        </div>
      </div>


    </div>
  </article>

  <!-- cta -->
  <?php
  display_cta_section();
  ?>

</main>
<?php get_footer(); ?>