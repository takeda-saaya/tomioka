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
          <p class="p-sub-title__top">contact confirm</p>
          <h1 class="p-sub-title__bottom">お問い合わせ内容<br>ご確認</h1>
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

  <!-- 予約フォーム -->
  <section class="l-contact p-contact">
    <div class="p-contact__inner l-inner">
      <p class="p-contact__text">
        もぎ取り体験の予約や配送サービス、<br class="u-hidden-pc">その他のお問い合わせに関して<br class="u-hidden-pc">お気軽にご相談ください。
      </p>
      <div class="p-contact__contents p-form">
        <div class="p-form__body">
          <!-- Contact Form7のショートコードの読み込み -->
          <?php echo do_shortcode('[contact-form-7 id="80171b4" title="お問い合わせ内容確認"]'); ?>
        </div>
        <div class="p-contact__deco-texts">
          <p class="p-contact__deco-text">・もぎ取り体験のご予約の方は<br>　ご希望の日付と時間をそれぞれ<br>　3候補日ほどご記入ください。</p>
          <p class="p-contact__deco-text">・配送サービスでご注文の方は<br>　商品名と数量をご記入ください。</p>
        </div>
      </div>
      <div class="p-contact__bottom">
        <p class="p-contact__text">お電話・Faxでお問い合わせの方は<br class="u-hidden-pc">下記からご連絡ください。
        </p>
        <div class="p-contact__tels">
          <div class="p-contact__tel1">
            <a href="tel:000-000-0000" style="cursor: pointer;" class=" p-contact__tel">TEL : 000-000-0000</a>
          </div>
          <div class="p-contact__tel2">
            <a href="tel:000-000-0000" style="cursor: pointer;" class="p-contact__tel p-contact__tel--bg">FAX : 000-000-0000</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>