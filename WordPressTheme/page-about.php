<?php get_header(); ?>

<main>

  <!-- mv -->
  <div class="l-sub-mv p-sub-mv">
    <div class="p-sub-mv__inner l-inner">
      <div class="p-sub-mv__wrap">
        <div class="p-sub-mv__img">
          <img src="<?php echo get_theme_file_uri('assets/images/about/about.jpg'); ?>" width="355" height="200" alt="男性と女性がみかんを持って笑っている" />
        </div>
        <div class="p-sub-mv__title-box p-sub-title-box">
          <p class="p-sub-title__top">about</p>
          <h1 class="p-sub-title__bottom">私たちについて</h1>

          <!-- カテゴリードロップダウンメニュー -->
          <div class="p-sub-title__dropdown p-about-small-dropdown">
            <div class="p-about-small-dropdown__box-body p-about-dropdown">
              <a href="#features" class="p-about-dropdown__box js-dropdown-trigger">
                <span class="p-about-dropdown-label">特徴</span>
              </a>
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

  <!--  features -->
  <section id="features" class="l-features p-features">
    <div class="p-features__inner">
      <div class="p-features__title__box p-title-box">
        <p class="p-title__sub">features</p>
        <h2 class="p-title__main">自然農園冨岡の特徴</h2>
      </div>
      <div class="p-features__cards">
        <div class="p-features__card p-features-card">
          <div class="p-features-card__img">
            <img src="<?php echo get_theme_file_uri('assets/images/about/features-card1.jpg'); ?>" alt="女性が笑顔でイチゴを食べている" width="375" height="330" loading="lazy">
          </div>
          <div class="p-features-card__right-box">
            <div class="p-features-card__right-box-wrap">
              <div class="p-features-card__top">
                <span class="p-features-card__number">
                  <img src="<?php echo get_theme_file_uri('assets/images/about/features-card-namber01.png'); ?>" alt="01" width="129" height="140" loading="lazy">
                </span>
                <div class="p-features-card__sub-titles">
                  <p class="p-features-card__sub-title1">
                    <img src="<?php echo get_theme_file_uri('assets/images/about/features-card__features.png'); ?>" alt="features" width="153" height="34" loading="lazy">
                  </p>
                  <p class="p-features-card__sub-title2">
                    <img src="<?php echo get_theme_file_uri('assets/images/about/features-card__cast a spell.png'); ?>" alt="cast a spell" width="203" height="34" loading="lazy">
                  </p>
                </div>
              </div>
              <h3 class="p-features-card__title"><span>クロレラ</span>で果物に<br>
                魔法をかける</h3>
              <p class="p-features-card__text">クロレラは豊富な栄養成分を含み果物の発育促進に<br class="u-hidden-sp">作用します。クロレラを使うことで味も見栄えも<br class="u-hidden-sp">グッと引き締まる。<br>他の農家で見ることない珍しい栽培方法です。<br>
                甘くて美味しい果物をぜひご賞味ください。</p>
            </div>
          </div>
        </div>
        <div class="p-features__card p-features-card">
          <div class="p-features-card__img__wrap">
            <div class="p-features-card__img">
              <img src="<?php echo get_theme_file_uri('assets/images/about/features-card2.jpg'); ?>" alt="お皿の上にたくさんのおいしそうなフルーツが盛ってある" width="375" height="330" loading="lazy">
            </div>
          </div>
          <div class="p-features-card__right-box">
            <div class="p-features-card__right-box-wrap">
              <div class="p-features-card__top">
                <span class="p-features-card__number">
                  <img src="<?php echo get_theme_file_uri('assets/images/about/features-card-namber02.png'); ?>" alt="02" width="129" height="140" loading="lazy">
                </span>
                <div class="p-features-card__sub-titles">
                  <p class="p-features-card__sub-title1">
                    <img src="<?php echo get_theme_file_uri('assets/images/about/features-card__features.png'); ?>" alt="features" width="153" height="34" loading="lazy">
                  </p>
                  <p class="p-features-card__sub-title2">
                    <img src="<?php echo get_theme_file_uri('assets/images/about/features-card__seasonal fruits.png'); ?>" alt="seasonal fruits" width="203" height="34" loading="lazy">
                  </p>
                </div>
              </div>
              <h3 class="p-features-card__title">いつ来ても<br><span>旬の果物</span>に<br>
                出会える</h3>
              <p class="p-features-card__text">自然農園冨岡ではいつお越しになられても、<br>
                旬の果物が皆様をお迎えします。<br>
                信州小布施町の果物栽培に適した環境があってこそ<br class="u-hidden-sp">
                成り立つ自然の恵み。<br>
                地元の方も観光の方もふらっと立ち寄ってみませんか？</p>
            </div>
          </div>
        </div>
        <div class="p-features__card p-features-card">
          <div class="p-features-card__img">
            <img src="<?php echo get_theme_file_uri('assets/images/about/features-card3.jpg'); ?>" alt="木にたくさんブドウが実っている" width="375" height="330" loading="lazy">
          </div>
          <div class="p-features-card__right-box">
            <div class="p-features-card__right-box-wrap">
              <div class="p-features-card__top">
                <span class="p-features-card__number">
                  <img src="<?php echo get_theme_file_uri('assets/images/about/features-card-namber03.png'); ?>" alt="03" width="129" height="140" loading="lazy">
                </span>
                <div class="p-features-card__sub-titles">
                  <p class="p-features-card__sub-title1">
                    <img src="<?php echo get_theme_file_uri('assets/images/about/features-card__features.png'); ?>" alt="features" width="153" height="34" loading="lazy">
                  </p>
                  <p class="p-features-card__sub-title2">
                    <img src="<?php echo get_theme_file_uri('assets/images/about/features-card__effort and time.png'); ?>" alt="effort and time" width="203" height="34" loading="lazy">
                  </p>
                </div>
              </div>
              <h3 class="p-features-card__title">一つひとつ<br>
                <span>手間と時間</span>を<br>
                かける
              </h3>
              <p class="p-features-card__text">自然農園富岡ではりんごに消毒がかからないよう、<br class="u-hidden-sp">
                一つひとつ丁寧に袋をかけていきます。<br>
                皆様の笑顔のためなら手間のかかることでも<br class="u-hidden-sp">
                何だってする。<br>
                安心・安全に美味しく食べていただけるよう、<br class="u-hidden-sp">
                手間と時間をかけております。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- concept -->
  <section id="concept" class="l-concept p-concept">
    <div class="p-concept__inner l-inner">
      <div class="p-concept__title__box p-title-box">
        <p class="p-title__sub p-title__sub--white">concept</p>
        <h2 class="p-title__main p-title__main--white">自然農園冨岡の想い</h2>
      </div>
      <div class="p-concept__body">
        <div class="p-concept__img">
          <img src="<?php echo get_theme_file_uri('assets/images/about/concept.png'); ?>" alt="2人の女性と男性の農家が、野菜を持って笑顔でこちらを見ている" width="350" height="170" loading="lazy">
        </div>
        <div class="p-concept__text-box">
          <div class="p-concept__sub-title">丹精込めて。</div>
          <div class="p-concept__texts">
            <p class="p-concept__text">私たち自然農園冨岡は「丹精込めて。」<br>
              という理念のもと運営しております。</p>
            <p class="p-concept__text">長野県小布施町という果物の栽培に適した環境で<br>
              他とは違う自然農園冨岡の果物を味わってほしい。<br>
              そして皆様のご家庭に笑顔を届けたい<br>
              そのように願っております。</p>
            <p class="p-concept__text">信州に癒されに来てみませんか？<br>
              大きな農園ではないですが、笑顔と幸せをお届けいたします。</p>
            <p class="p-concept__name">自然農園冨岡一同<br>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- access -->
  <section id="access" class="p-access">
    <div class="p-access__inner l-inner">
      <div class="p-access__body">
        <div class="p-access__box">
          <div class="p-access__title__box p-title-box">
            <p class="p-title__sub">access</p>
            <h2 class="p-title__main">アクセス</h2>
          </div>
          <dl class="p-access__info">
            <div class="p-access__info-box">
              <dt class="p-access__info__title">住所</dt>
              <dd class="p-access__info_text">
                長野県上高井郡小布施町都住300
              </dd>
            </div>
            <div class="p-access__info-box">
              <dt class="p-access__info__title">電話</dt>
              <dd class="p-access__info_text">026-247-5358</dd>
            </div>
            <div class="p-access__info-box">
              <dt class="p-access__info__title">営業時間</dt>
              <dd class="p-access__info_text">
                9:00~18:00
              </dd>
            </div>
            <div class="p-access__info-box">
              <dt class="p-access__info__title">定休日</dt>
              <dd class="p-access__info_text">カレンダー通り(土日・祝)</dd>
            </div>
        </div>
        <div class="p-access__map">
          <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.671947525941!2d138.31860369999998!3d36.7064203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d8962731ab533%3A0x272eaf01d1c74ce0!2z44CSMzgxLTAyMDgg6ZW36YeO55yM5LiK6auY5LqV6YOh5bCP5biD5pa955S66YO95L2P77yT77yQ77yQ!5e0!3m2!1sja!2sjp!4v1722453876552!5m2!1sja!2sjp" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- cta -->
  <?php
  display_cta_section();
  ?>

</main>

<?php get_footer(); ?>