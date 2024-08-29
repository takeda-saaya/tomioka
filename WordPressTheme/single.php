<?php get_header(); ?>
<main>
  <div class="l-single-block p-single-block">

    <!-- パンくず -->
    <div class="c-breadcrumb">
      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </div>

    <!-- 記事 -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="l-single p-single">
          <div class="p-single__inner l-inner">
            <div class="p-single__item">
              <div class="p-single__info">
                <!-- 投稿日 -->
                <time class="p-single__date" datetime="<?php the_time('Y.n.j'); ?>">
                  <?php the_time('Y.m.d'); ?>
                </time>
                <!-- 指定したカテゴリーのみ表示 -->
                <div class="p-single__categories">
                  <?php
                  $categories = get_the_category();
                  if (!empty($categories)) {
                    foreach ($categories as $category) {
                      echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="p-single__cat">' . esc_html($category->name) . '</a>';
                    }
                  }
                  ?>
                </div>
              </div>
              <!-- 投稿タイトル -->
              <h2 class="p-single__title">
                <?php the_title(); ?>
              </h2>
              <!-- 投稿本文 -->
              <div class="p-single__content">
                <?php the_content(); ?>
              </div>
            </div>

            <!--pager-->
            <div class="l-pager p-pager">
              <ul class="p-pager__list">
                <?php if (get_previous_post()) : ?>
                  <li class="p-pager__item-prev">
                    <?php previous_post_link('%link', '<img src="' . esc_url(get_theme_file_uri('assets/images/single/pagenavi-prev.png')) . '" alt="" loading="lazy"> 前の記事'); ?>
                  </li>
                <?php endif; ?>
                <li class="p-pager__item">
                  <?php
                  echo '<a href="' . esc_url(home_url('/news')) . '">一覧へ戻る</a>';
                  ?> <?php if (get_next_post()) : ?>
                <li class="p-pager__item-next">
                  <?php next_post_link('%link', '次の記事 <img src="' . esc_url(get_theme_file_uri('assets/images/single/pagenavi-next.png')) . '" alt="" loading="lazy">'); ?>
                </li>
              <?php endif; ?>
              </ul>
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
    <?php endwhile;
    endif; ?>
  </div>

  <!-- cta -->
  <?php display_cta_section(); ?>

</main>
<?php get_footer(); ?>