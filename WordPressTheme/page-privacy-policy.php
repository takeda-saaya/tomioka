<?php get_header(); ?>
<main>

  <!-- mv -->
  <div class="l-sub-mv p-sub-mv">
    <div class="p-sub-mv__inner l-inner">
      <div class="p-sub-mv__wrap">
        <div class="p-sub-mv__img p-sub-mv__img--white">
          <img src="<?php echo get_theme_file_uri('assets/images/privacy policy/privacy-policy.jpg'); ?>" width="375" height="200" alt="おいしそうなブドウがたくさん実っている" />
        </div>
        <div class="p-sub-mv__title-box p-sub-title-box p-title-box--white">
          <p class="p-sub-title__top">privacy policy</p>
          <h2 class="p-sub-title__bottom p-sub-title__bottom--small">プライバシポリシー</h2>
        </div>
      </div>

      <!-- パンくず -->
      <div class="c-breadcrumb">
        <?php
        if (function_exists('bcn_display')) {
          bcn_display();
        }
        ?>
      </div>
    </div>
  </div>

  <section class="l-privacy-policy p-privacy-policy">
    <div class="p-privacy-policy__inner l-inner">
      <div class="p-privacy-policy__body">
        <?php
        $page = get_page_by_path('privacy-policy');
        if ($page) {
          echo apply_filters('the_content', $page->post_content);
        } else {
          echo '<p>ページが見つかりませんでした。</p>';
        }
        ?>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>