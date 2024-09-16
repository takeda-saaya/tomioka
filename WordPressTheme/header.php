<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">
  <link rel=icon href=/favicon.ico>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php
  $class = 'l-site-wrapper';
  if (is_page(array('contact', 'contact-thanks', 'contact-confirm'))) {
    $class .= ' l-site-wrapper--bg';
  } elseif (!is_front_page() && !is_page('privacy-policy') && !is_page(array('contact', 'contact-thanks', 'contact-confirm'))) {
    $class .= ' l-site-wrapper--beige';
  }
  ?>

  <div class="<?php echo esc_attr($class); ?>">

    <header class="p-header <?php if (is_front_page()) {
                              echo 'l-header';
                            } else {
                              echo 'l-header';
                            } ?>">

      <div class="p-header__inner">

        <?php if (is_front_page()) {
          echo '<h1 class="p-header__logo">';
        } else {
          echo '<div class="p-header__logo">';
        } ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
          自然農園冨岡
        </a>
        <?php if (is_front_page()) {
          echo '</h1>';
        } else {
          echo '</div>';
        } ?>

        <!-- PCナビ -->
        <nav class="p-header__pc-nav p-pc-nav">
          <ul class="p-pc-nav__items">
            <li class="p-pc-nav__item"><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
            <li class="p-pc-nav__item"><a href="<?php echo esc_url(home_url('/about')); ?>">私たちについて</a></li>
            <li class="p-pc-nav__item p-pc-nav__item-dropdown p-dropdown">
              <div class="p-dropdown-toggle">サービス</div>
              <ul class="p-dropdown-menu">
                <li class="p-dropdown__trigger">
                  <a href="#sales">直売</a>
                </li>
                <li class="p-dropdown__trigger">
                  <a href="#experience">もぎ取り体験</a>
                </li>
                <li class="p-dropdown__trigger">
                  <a href="#delivery">配送</a>
                </li>
              </ul>
            </li>
            <li class="p-pc-nav__item"><a href="<?php echo esc_url(get_post_type_archive_link('fruits-list')); ?>">果物一覧</a></li>
            <li class="p-pc-nav__item"><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
            <li class="p-pc-nav__btn">
              <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-header-btn c-header-btn--red">
                <div class="c-header-btn__img">
                  <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14" fill="none">
                    <path d="M16 2.33333V11.6667C16 12.0203 15.8784 12.3594 15.662 12.6095C15.4457 12.8595 15.1522 13 14.8462 13H2.15385C1.84783 13 1.55434 12.8595 1.33795 12.6095C1.12157 12.3594 1 12.0203 1 11.6667V2.33333M16 2.33333C16 1.97971 15.8784 1.64057 15.662 1.39052C15.4457 1.14048 15.1522 1 14.8462 1H2.15385C1.84783 1 1.55434 1.14048 1.33795 1.39052C1.12157 1.64057 1 1.97971 1 2.33333M16 2.33333L9.15654 7.808C8.96362 7.96225 8.7346 8.04488 8.5 8.04488C8.2654 8.04488 8.03638 7.96225 7.84346 7.808L1 2.33333" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <span class="c-header-btn__text">お問い合わせ</span>
              </a>
            </li>
          </ul>
        </nav>

        <!-- ハンバーガーメニュー -->
        <div class="p-header__hamburger">
          <button type="button" id="js-hamburger" class="c-hamburger" aria-controls="js-sp-nav" aria-expanded="false" aria-label="メニューを開閉する">
            <span class="c-hamburger__line"></span>
            <span class="c-hamburger__line"></span>
            <span class="c-hamburger__line"></span>
          </button>
        </div>

        <!-- SPナビ -->
        <nav class="p-header__sp-nav p-sp-nav" id="js-sp-nav" aria-hidden="true">
          <ul class="p-sp-nav__items">
            <li class="p-sp-nav__item">
              <a href="<?php echo esc_url(home_url('/about')); ?>">
                <p>私たちについて</p>
                <p>about</p>
              </a>
            </li>
            <li class="p-sp-nav__item">
              <a href="<?php echo esc_url(home_url('/about/#access')); ?>">
                <p>アクセス</p>
                <p>access</p>
              </a>
            </li>
            <li class="p-sp-nav__item">
              <a href="<?php echo home_url('/#service'); ?>">
                <p>サービス</p>
                <p>service</p>
              </a>
            </li>
            <li class="p-sp-nav__item">
              <a href="<?php echo esc_url(home_url('/news')); ?>">
                <p>お知らせ</p>
                <p>news</p>
              </a>
            </li>
            <li class="p-sp-nav__item">
              <a href="<?php echo esc_url(get_post_type_archive_link('fruits-list')); ?>">
                <p>果物一覧</p>
                <p>fruit list</p>
              </a>
            </li>
          </ul>
          <div class="p-sp-nav__btn">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-header-btn">
              <div class="c-header-btn__img">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14" fill="none">
                  <path d="M16 2.33333V11.6667C16 12.0203 15.8784 12.3594 15.662 12.6095C15.4457 12.8595 15.1522 13 14.8462 13H2.15385C1.84783 13 1.55434 12.8595 1.33795 12.6095C1.12157 12.3594 1 12.0203 1 11.6667V2.33333M16 2.33333C16 1.97971 15.8784 1.64057 15.662 1.39052C15.4457 1.14048 15.1522 1 14.8462 1H2.15385C1.84783 1 1.55434 1.14048 1.33795 1.39052C1.12157 1.64057 1 1.97971 1 2.33333M16 2.33333L9.15654 7.808C8.96362 7.96225 8.7346 8.04488 8.5 8.04488C8.2654 8.04488 8.03638 7.96225 7.84346 7.808L1 2.33333" stroke="#E63D48" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <span class="c-header-btn__text">お問い合わせ</span>
            </a>
          </div>
        </nav>
      </div>
    </header>