<?php get_header(); ?>
<main>

  <!-- mv -->
  <div class="l-sub-mv p-sub-mv">
    <div class="p-sub-mv__inner l-inner">
      <div class="p-sub-mv__wrap">
        <div class="p-sub-mv__img p-sub-mv__img--bg">
          <img src="<?php echo get_theme_file_uri('assets/images/contact/contact.jpg'); ?>" width="375" height="673" alt="夫婦が笑顔で娘と一緒に娘の形態を見ている" />
        </div>
        <div class="p-sub-mv__title-box p-sub-title-box p-title-box--bg">
          <p class="p-sub-title__top">contact thanks</p>
          <h1 class="p-sub-title__bottom">お問い合わせ完了</h1>
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

  <div class="l-contact-thanks p-contact-thanks">
    <p class="p-contact-thanks__text">お問い合わせが完了しました。<br>
      担当者が確認次第、ご連絡をお返しします。
    </p>
  </div>
</main>
<?php get_footer(); ?>