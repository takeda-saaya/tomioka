<footer class="p-footer">
  <div class="p-footer__inner l-inner">
    <div class="p-footer__body">
      <ul class="p-footer__items">
        <li class="p-footer__item">
          <a href="<?php echo esc_url(home_url('/about')); ?>">
            <p>私たちについて</p>
            <p>about</p>
          </a>
        </li>
        <li class="p-footer__item">
          <a href="<?php echo esc_url(home_url('/about/#access')); ?>">
            <p>アクセス</p>
            <p>access</p>
          </a>
        </li>
        <li class="p-footer__item">
          <a href="<?php echo esc_url(home_url('/#sales')); ?>">
            <p>サービス</p>
            <p>service</p>
          </a>
        </li>
        <li class="p-footer__item">
          <a href="<?php echo esc_url(home_url('/news')); ?>">
            <p>お知らせ</p>
            <p>news</p>
          </a>
        </li>
        <li class="p-footer__item">
          <a href="<?php echo esc_url(get_post_type_archive_link('fruits-list')); ?>">
            <p>果物一覧</p>
            <p>fruit list</p>
          </a>
        </li>
        <li class="p-footer__item">
          <a href="<?php echo esc_url(home_url('/contact')); ?>">
            <p>お問い合わせ</p>
            <p>CONTACT</p>
          </a>
        </li>
      </ul>
      <div class="p-footer__info">
        <div class="p-footer__logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_theme_file_uri('assets/images/top/footer-logo.png'); ?>" alt="自然農家富岡" width="174" height="50" loading="lazy" />
          </a>
        </div>
        <p class="p-footer__address p-footer__text">〒000-0000<br class="u-hidden-pc">
          長野県上高井郡小布施町00-000</p>
        <div class="p-footer__operation-details">
          <p class="p-footer__time p-footer__text">営業時間 9:00~18:00</p>
          <div class="p-footer__closed p-footer__text">定休日 日曜/祝日</div>
        </div>
        <div class="p-footer__tels">
          <div class="p-footer__tel">
            <a href="tel:000-000-0000">TEL : 000-000-0000</a>
          </div>
          <p class="p-footer__fax">FAX : 000-000-0000</p>
        </div>
      </div>
    </div>
    <div class="p-footer__bottom">
      <a href="<?php echo esc_url(home_url('privacy-policy')); ?>" class="p-footer__privacy-policy" target="_blank">プライバシーポリシー</a>
      <div class="p-footer__copy">Copyright&copy;ShizenNouenTomioka All rights reserved.</div>
    </div>
  </div>
</footer>

<!-- topに戻る -->
<a href="<?php echo esc_url(home_url('/')); ?>" class="c-page-top-btn js-pagetop">
  <img src="<?php echo get_theme_file_uri('assets/images/common/page-top-btn.png'); ?>" width="67" height="74" alt="topに戻るページ" loading="lazy" />
</a>

<?php wp_footer(); ?>
</body>

</html>