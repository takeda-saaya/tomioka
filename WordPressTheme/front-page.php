<?php get_header(); ?>
<main>

  <!-- mv -->
  <div class="p-mv">
    <div class="p-mv__img">
      <img src="<?php echo get_theme_file_uri('assets/images/top/mv__pc.jpg'); ?>" width="375" height="673" alt="リンゴ農園で小さい男の子がかごいっぱいのリンゴを持っている姿" />
    </div>
  </div>

  <!-- about -->
  <div id="me" class="l-about p-about">
    <div class="p-about__inner l-inner">
      <div class="p-about__messages">
        <p class="p-about__message1">丹精込めて。</p>
        <p class="p-about__message2">私たちの丹精込めて育てた果物が、<br>皆様のご家庭に笑顔と幸せをお届けします。</p>
      </div>
      <div class="p-about__body">
        <div class="p-about__wrap">
          <div class="p-about__headings">
            <p class="p-about__sub-heading">about</p>
            <div class="p-about__heading"><span class="p-about__heading-bg">健康食品クロレラ</span>を<br>使った果物は<br>すごい</div>
            <div class="p-about__texts">
              <p class="p-about__text">自然農園冨岡は健康食品クロレラを使った<br class="u-hidden-pc">有機100%栽培。</p>
              <p class="p-about__text">クロレラを使うことでくだもの特有の甘さと<br>見栄えをグッと引き立たせる。</p>
              <p class="p-about__text">小布施にある他の農園では<br class="u-hidden-pc">あまり見ることのない<br>珍しい栽培方法を採用しています。</p>
            </div>
            <div class="p-about__btn">
              <a href="<?php echo esc_url(home_url('/about')); ?>" class="c-main-btn">私たちについて</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  fruits-->
  <section class="l-fruits p-fruits">
    <div class="p-fruits_inner l-inner">
      <div class="p-fruits__title-wrap">
        <div class="p-fruits__title__box p-title-box">
          <p class="p-title__sub">tomioka farm</p>
          <h2 class="p-title__main">自然農園冨岡の果物</h2>
        </div>
      </div>
      <p class="p-fruits__text">
        我が子のように丹精込めて育てた自然農園冨岡の果物。<br class="u-hidden-sp">一口食べれば程よい甘みが口の奥まで広がっていきます。
      </p>
      <div class="p-fruits__cards">
        <div class="p-fruits__card-wrap">
          <a href="<?php echo esc_url(home_url('/features/apple/')); ?>" class="p-fruits__card p-fruits-card js-fade-in">
            <div class="p-fruits-card__text-block">
              <h3 class="p-fruits-card__title">丸っとりんご</h3>
              <p class="p-fruits-card__text">人気のさんふじ含め、<br>
                11種のりんごをご用意してます。</p>
              <div class="p-fruits-card__btn">
                <button>詳しくみる</button>
              </div>
            </div>
            <figure class="p-fruits-card__img">
              <img src="<?php echo get_theme_file_uri('assets/images/top/fruits-card1.jpg'); ?>" width="315" height="196" alt="真っ赤なリンゴが沢山ある" loading="lazy">
            </figure>
          </a>
        </div>
        <a href="<?php echo esc_url(home_url('/features/peach/')); ?>" class="p-fruits__card p-fruits-card js-fade-in">
          <div class="p-fruits-card__text-block">
            <h3 class="p-fruits-card__title">丸っともも</h3>
            <p class="p-fruits-card__text">定番のなつっこ含め、
              <br>5種のももをご用意してます。
            </p>
            <div class="p-fruits-card__btn">
              <button>詳しくみる</button>
            </div>
          </div>
          <figure class="p-fruits-card__img">
            <img src="<?php echo get_theme_file_uri('assets/images/top/fruits-card2.jpg'); ?>" width="315" height="196" alt="木にももが2つ実っている" loading="lazy">
          </figure>
        </a>
        <a href="<?php echo esc_url(home_url('/features/other/')); ?>" class="p-fruits__card p-fruits-card js-fade-in">
          <div class="p-fruits-card__text-block">
            <h3 class="p-fruits-card__title">丸っとその他</h3>
            <p class="p-fruits-card__text">ぶどう、プラム、ネクタリン、くり<br>
              合わせて6種ご用意してます。</p>
            <div class="p-fruits-card__btn">
              <button>詳しくみる</button>
            </div>
          </div>
          <figure class="p-fruits-card__img">
            <img src="<?php echo get_theme_file_uri('assets/images/top/fruits-card3.jpg'); ?>" width="315" height="196" alt="きれいなブドウが沢山実っている" loading="lazy">
          </figure>
        </a>
      </div>
      <div class="p-fruits__btn">
        <a href="<?php echo esc_url(get_post_type_archive_link('fruits-list')); ?>" class="c-main-btn">果物一覧をみる</a>
      </div>
    </div>
  </section>

  <!--calender -->
  <section id="calender" class="l-calender p-calender">
    <div class="p-calender__inner l-inner">
      <div class="p-calender__wrap">
        <div class="p-calender__title__box p-title-box">
          <p class="p-title__sub">calender</p>
          <h2 class="p-title__main">旬の果物カレンダー</h2>
        </div>
        <p class="p-calender__text">自然農園冨岡ではいつお越しになっても旬の果物がお迎えします。<br>
          信州小布施の果物栽培に環境があってこそ成り立ちます。</p>
        <div class="p-calender__container">
          <div class="p-calender__box">
            <div class="p-calender__content">
              <div class="p-calender__hed">
                <div class="p-calender__hed-left">
                  <p class="p-calender__heading">品名</p>
                </div>
                <div class="p-calender__hed-right">
                  <p class="p-calender__hed-text">7月</p>
                  <p class="p-calender__hed-text p-calender__hed-text--bg">8月</p>
                  <p class="p-calender__hed-text">9月</p>
                  <p class="p-calender__hed-text p-calender__hed-text--bg">10月</p>
                  <p class="p-calender__hed-text">11月</p>
                  <p class="p-calender__hed-text p-calender__hed-text--bg">12月</p>
                </div>
              </div>
              <div class="p-calender__body">
                <div class="p-calender__left">
                  <p class="p-calender__apple">りんご</p>
                  <p class="p-calender__peach">もも</p>
                  <p class="p-calender__nectarine">ネクタリン</p>
                  <p class="p-calender__plum">プラム</p>
                  <p class="p-calender__chestnut">くり</p>
                  <p class="p-calender__grape">ぶどう</p>
                </div>
                <div class="p-calender__right">
                  <img src="<?php echo get_theme_file_uri('assets/images/top/calender.jpg'); ?>" alt="旬の果物カレンダー" width="844" height="1083" loading="lazy">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-calender__btns">
          <div class="p-calender__btn1">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-main-btn">もぎ取りの予約をする</a>
          </div>
          <div class="p-calender__btn2">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-main-btn c-main-btn--brown">配送の予約をする</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--  service   -->
  <section class="l-service p-service">
    <div class="p-service__swiper">
      <div class="p-service__wrap">
        <ul class="p-service__list p-service__list--left">
          <li class="p-service__item p-service__item--big">
            <div class="p-service__anime p-anime-fuwafuwa1">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-swiper1.png'); ?>" alt="女性がリンゴを丸かじりしている" width="223" height="229">
            </div>
          </li>
          <li class="p-service__item">
            <div class="p-service__anime p-anime-fuwafuwa2">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-swiper3.png'); ?>" alt="木にみかんがたくさん実っている" width="125" height="123">
            </div>
          </li>
          <li class="p-service__item p-service__item--big">
            <div class="p-service__anime p-anime-fuwafuwa3">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-swiper2.png'); ?>" alt="沢山の桃がある" width="223" height="229">
            </div>
          </li>
          <li class="p-service__item">
            <div class="p-service__anime p-anime-fuwafuwa4">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-swiper4.png'); ?>" alt="男性と女の子が笑いあってブドウを持っている" width="125" height="123">
            </div>
          </li>
          <li class="p-service__item">
            <div class="p-service__anime p-anime-fuwafuwa5">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-swiper5.png'); ?>" alt="木にブドウがたくさん実っている" width="223" height="229">
            </div>
          </li>
        </ul>
        <ul class="p-service__list p-service__list--left">
          <li class="p-service__item p-service__item--big">
            <div class="p-service__anime p-anime-fuwafuwa1">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-swiper1.png'); ?>" alt="女性がリンゴを丸かじりしている" width="223" height="229">
            </div>
          </li>
          <li class="p-service__item">
            <div class="p-service__anime p-anime-fuwafuwa2">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-swiper3.png'); ?>" alt="木にみかんがたくさん実っている" width="125" height="123">
            </div>
          </li>
          <li class="p-service__item p-service__item--big">
            <div class="p-service__anime p-anime-fuwafuwa3">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-swiper2.png'); ?>" alt="沢山の桃がある" width="223" height="229">
            </div>
          </li>
          <li class="p-service__item">
            <div class="p-service__anime p-anime-fuwafuwa4">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-swiper4.png'); ?>" alt="男性と女の子が笑いあってブドウを持っている" width="125" height="123">
            </div>
          </li>
          <li class="p-service__item">
            <div class="p-service__anime p-anime-fuwafuwa5">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-swiper5.png'); ?>" alt="木にブドウがたくさん実っている" width="223" height="229">
            </div>
          </li>
        </ul>
        <ul class="p-service__list p-service__list--left">
          <li class="p-service__item p-service__item--big">
            <div class="p-service__anime p-anime-fuwafuwa1">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-swiper1.png'); ?>" alt="女性がリンゴを丸かじりしている" width="223" height="229">
            </div>
          </li>
          <li class="p-service__item">
            <div class="p-service__anime p-anime-fuwafuwa2">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-swiper3.png'); ?>" alt="木にみかんがたくさん実っている" width="125" height="123">
            </div>
          </li>
          <li class="p-service__item p-service__item--big">
            <div class="p-service__anime p-anime-fuwafuwa3">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-swiper2.png'); ?>" alt="沢山の桃がある" width="223" height="229">
            </div>
          </li>
          <li class="p-service__item">
            <div class="p-service__anime p-anime-fuwafuwa4">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-swiper4.png'); ?>" alt="男性と女の子が笑いあってブドウを持っている" width="125" height="123">
            </div>
          </li>
          <li class="p-service__item">
            <div class="p-service__anime p-anime-fuwafuwa5">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-swiper5.png'); ?>" alt="木にブドウがたくさん実っている" width="223" height="229">
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div id="sales" class="p-service__inner">
      <div id="service" class="p-service__title__box p-title-box">
        <p class="p-title__sub">service</p>
        <h2 class="p-title__main">自然農園冨岡のサービス</h2>
      </div>
      <div class="p-service__cards">
        <div class="p-service__card p-service-card">
          <div class="p-service-card__img">
            <img src="<?php echo get_theme_file_uri('assets/images/top/service-card1.jpg'); ?>" alt="果物売り場にみかんやリンゴが沢山並べてある" width="335" height="263" loading="lazy">
          </div>
          <div class="p-service-card__body">
            <div class="p-service-card__title-wrap">
              <picture class="p-service-card__title-img">
                <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri('assets/images/top/service-title01__pc.png'); ?>">
                <img src="<?php echo get_theme_file_uri('assets/images/top/service-title01__sp.png'); ?>" alt="No.01" width="75" height="64" loading="lazy">
              </picture>
              <h3 class="p-service-card__title">直売</h3>
            </div>
            <p class="p-service-card__text">当日の朝に採れた新鮮な果物を直売しております。<br>「鮮度が違うだけでこんなに変わるの？」というくらい、新鮮な果物は美味しいです。
              小布施で直売所を探している方、<br class="u-hidden-pc"> ぜひ自然農園富岡にお越しください。</p>
            <div class="p-service-card__link">
              <a href="<?php echo esc_url(home_url('/about/#access')); ?>">自然農園富岡のアクセス情報はこちら</a>
            </div>
            <div class="p-service-card__btn">
              <a href="<?php echo esc_url(home_url('/#calender')); ?>" class="c-main-btn">旬の果物を確認する</a>
            </div>
          </div>
        </div>
        <div id="experience" class="p-service__card p-service-card">
          <div class="p-service-card__imgs">
            <div class="p-service-card__img1">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-cards1.jpg'); ?>" alt="子供が桃を取っている様子" width="268" height="210" loading="lazy">
            </div>
            <div class="p-service-card__img2">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-cards2.jpg'); ?>" alt="女性がリンゴを持っている様子" width="242" height="181" loading="lazy">
            </div>
            <div class="p-service-card__img3">
              <img src="<?php echo get_theme_file_uri('assets/images/top/service-cards3.png'); ?>" alt="沢山のリンゴの写真" width="121" height="117" loading="lazy">
            </div>
          </div>
          <div class="p-service-card__body">
            <div class="p-service-card__title-wrap">
              <picture class="p-service-card__title-img">
                <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri('assets/images/top/service-title02__pc.png'); ?>">
                <img src="<?php echo get_theme_file_uri('assets/images/top/service-title02__sp.png'); ?>" alt="No.02" width="75" height="64" loading="lazy">
              </picture>
              <h3 class="p-service-card__title">もぎ取り体験</h3>
            </div>
            <p class="p-service-card__text">りんご・もものもぎ取り体験を行なっております。お子様連れのご家族・カップル・ご夫婦どなたとでもお楽しみになれます。<br>
              自然豊かな小布施だからこそ体験できるもぎ取りに参加してみませんか？<br>
              特典として、お土産&plus;試食で4つの果物プレゼント&#33;</p>
            <div class="p-service-card__btn">
              <button id="js-service-modal-open1" class="c-modal-btn">もぎ取り料金を確認する</button>
            </div>
          </div>
        </div>
        <!-- モーダル -->
        <dialog id="js-service-modal1" class="p-service-modal bookmark-animation">
          <button class="visually-hidden"></button>
          <div class="l-inner p-service-modal__inner">
            <div class="p-service-modal__boxs">
              <div class="p-service-modal__box p-modal-box">
                <h4 class="p-modal-box__title">りんご狩り</h4>
                <table class="p-modal-box__table">
                  <tbody class="p-modal-box__body">
                    <tr class="p-modal-box__row">
                      <th class="p-modal-box__hed">期間</th>
                      <td class="p-modal-box__data">毎年9月中旬〜11月末</td>
                    </tr>
                    <tr class="p-modal-box__row">
                      <th class="p-modal-box__hed">品種</th>
                      <td class="p-modal-box__data">千秋・秋映・紅玉・シナノスイート・陽光・新世界・名月・シナノゴールド・しなのほっぺ・あい香のかおり・サンふじ・シナノリップ</td>
                    </tr>
                    <tr class="p-modal-box__row">
                      <th class="p-modal-box__hed">時間</th>
                      <td class="p-modal-box__data">1時間</td>
                    </tr>
                    <tr class="p-modal-box__row">
                      <th class="p-modal-box__hed">料金</th>
                      <td class="p-modal-box__data">1,000円(5kg以上、600円〜/kg)</td>
                    </tr>
                    <tr class="p-modal-box__row">
                      <th class="p-modal-box__hed">お取り寄せ</th>
                      <td class="p-modal-box__data">可能ですが、別途費用がかかりますので
                        詳しくはスタッフにご確認ください。</td>
                    </tr>
                    <tr class="p-modal-box__row">
                      <th class="p-modal-box__hed">備考</th>
                      <td class="p-modal-box__data">・事前予約は必須ではありませんが、
                        予約された方を優先的にご案内いたします。<br>
                        <span>・りんごは量り売りとなります。</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="p-service-modal__box p-modal-box">
                <h4 class="p-modal-box__title p-modal-box__title--pink">もも狩り</h4>
                <table class="p-modal-box__table">
                  <tbody class="p-modal-box__body">
                    <tr class="p-modal-box__row">
                      <th class="p-modal-box__hed p-modal-box__hed--pink">期間</th>
                      <td class="p-modal-box__data">毎年9月中旬〜11月末</td>
                    </tr>
                    <tr class="p-modal-box__row">
                      <th class="p-modal-box__hed p-modal-box__hed--pink">品種</th>
                      <td class="p-modal-box__data">あかつき・川中島白鳳・なつっこ・川中島白桃・黄金桃</td>
                    </tr>
                    <tr class="p-modal-box__row">
                      <th class="p-modal-box__hed p-modal-box__hed--pink">時間</th>
                      <td class="p-modal-box__data">30分</td>
                    </tr>
                    <tr class="p-modal-box__row">
                      <th class="p-modal-box__hed p-modal-box__hed--pink">料金</th>
                      <td class="p-modal-box__data">2,000円</td>
                    </tr>
                    <tr class="p-modal-box__row">
                      <th class="p-modal-box__hed p-modal-box__hed--pink">お取り寄せ</th>
                      <td class="p-modal-box__data">可能ですが、別途費用がかかりますので詳しくはスタッフにご確認ください。</td>
                    </tr>
                    <tr class="p-modal-box__row">
                      <th class="p-modal-box__hed p-modal-box__hed--pink">備考</th>
                      <td class="p-modal-box__data"><span>・事前予約が必須になります。</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="p-service-modal__btns">
              <div class="p-service-modal__btn1">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-modal-btn">もぎ取り体験の予約をする</a>
              </div>
              <div class="p-service-modal__btn2">
                <button id="js-service-modal-close1" class="c-modal-btn c-modal-btn--white">閉じる</button>
              </div>
            </div>
          </div>
        </dialog>
        <div id="delivery" class="p-service__card p-service-card">
          <div class="p-service-card__img">
            <img src="<?php echo get_theme_file_uri('assets/images/top/service-card3.jpg'); ?>" alt="箱に詰められいる美味しそうな桃" width="335" height="263" loading="lazy">
          </div>
          <div class="p-service-card__body">
            <div class="p-service-card__title-wrap">
              <picture class="p-service-card__title-img">
                <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri('assets/images/top/service-title03__pc.png'); ?>">
                <img src="<?php echo get_theme_file_uri('assets/images/top/service-title03__sp.png'); ?>" alt="No.03" width="75" height="64" loading="lazy">
              </picture>
              <h3 class="p-service-card__title">配送サービス</h3>
            </div>
            <p class="p-service-card__text">自然農園冨岡では配送サービスも行なっております。<br>
              腰の不自由な方、ご多忙で当園までお越しになれない方でも新鮮な果物を味わっていただけます。小布施町内だけでなく、全国配送が可能です。配送の流れなど詳しい内容は下記からご確認ください。</p>
            <div class="p-service-card__btn">
              <button id="js-service-modal-open2" class="c-main-btn">配送について確認する</button>
            </div>
          </div>
        </div>
        <!-- モーダル -->
        <dialog id="js-service-modal2" class="p-delivery-modal">
          <button class="visually-hidden"></button>
          <div class="l-inner p-delivery-modal__inner">
            <div class="p-delivery-modal__boxs">
              <div class="p-delivery-modal__box p-delivery-box">
                <h4 class="p-delivery-box__title">配送の流れ</h4>
                <div class="p-delivery-box__text-wrap">
                  <div class="p-delivery-box__text-box">
                    <span class="p-delivery-box__namber">
                      <img src="<?php echo get_theme_file_uri('assets/images/top/delivery-namber01.png'); ?>" alt="01" width="35" height="35" loading="lazy">
                    </span>
                    <p class="p-delivery-box__text">お問い合わせから<span>お届け先の住所</span>と<span>注文したい商品</span>をご入力ください。</p>
                  </div>
                  <div class="p-delivery-box__text-box">
                    <span class="p-delivery-box__namber">
                      <img src="<?php echo get_theme_file_uri('assets/images/top/delivery-namber02.png'); ?>" alt="02" width="35" height="35" loading="lazy">
                    </span>
                    <p class="p-delivery-box__text">配送料も含め合計金額を記載したメール送信しますので、メールに記載されている
                      郵便局にお振り込みください。</p>
                  </div>
                  <div class="p-delivery-box__text-box">
                    <span class="p-delivery-box__namber">
                      <img src="<?php echo get_theme_file_uri('assets/images/top/delivery-namber03.png'); ?>" alt="03" width="35" height="35" loading="lazy">
                    </span>
                    <p class="p-delivery-box__text">ご入金の確認ができ次第、順次配送となります。</p>
                  </div>
                </div>
              </div>
              <div class="p-delivery-modal__box p-delivery-box">
                <h4 class="p-delivery-box__title">配送料金について</h4>
                <div class="p-delivery-box__text-wrap">
                  <p class="p-delivery-box__text">基本的に送料は1,500円程度となりますが、注文商品の重さによっても変わってきますので<br>
                    詳しくはお問い合わせ後のメールにてご案内いたします。<br>
                    ※離島、一部地域は追加送料がかかります。</p>
                </div>
              </div>
              <div class="p-delivery-modal__box p-delivery-box">
                <h4 class="p-delivery-box__title">返品・交換について</h4>
                <div class="p-delivery-box__text-wrap">
                  <p class="p-delivery-box__text">原則として食料品の返品はご容赦下さい。 不良品の場合まことに申し訳ございません。<br>
                    商品につきましては充分注意をしておりますが、万が一不良品がございましたら、<br>
                    商品到着後３日以内にお知らせ下さい。</p>
                </div>
              </div>
            </div>
            <div class="p-delivery-modal__btns">
              <div class="p-delivery-modal__btn1">
                <a href="<?php echo esc_url(get_post_type_archive_link('fruits-list')) . '#assortment'; ?>" class="c-modal-btn">人気の配送商品を確認する</a>
              </div>
              <div class="p-delivery-modal__btn2">
                <button id="js-service-modal-close2" class="c-modal-btn c-modal-btn--white">閉じる</button>
              </div>
            </div>
          </div>
        </dialog>
      </div>
    </div>
  </section>

  <!-- voice -->
  <section class="p-voice">
    <div class="p-voice__inner l-inner">
      <div class="p-voice__title__box p-title-box">
        <p class="p-title__sub p-title__sub--white">voice</p>
        <h2 class="p-title__main p-title__main--white">お客様の声</h2>
      </div>
      <p class="p-voice__text">自然農園冨岡に訪れてくださった<br class="u-hidden-pc">お客様の声をお届けします。<br>
        皆様のご来訪をスタッフ一同、心より<br class="u-hidden-pc">お待ちしております。</p>
      <div class="p-voice-swiper__content">
        <div class="swiper p-voice-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="p-voice-card">
                <div class="p-voice-card__figure">
                  <img src="<?php echo get_theme_file_uri('assets/images/top/voice-card1.png'); ?>" alt="かごいっぱいのイチゴを持っている笑顔の女性" width="200" height="220" loading="lazy">
                  <figcaption class="p-voice-card__figcaption">初めてのもぎ取りでしたが<br class="u-hidden-pc">
                    とても楽しめました。子どもたちも喜んでもぎ取りしていて <br class="u-hidden-pc">「また行きたい！」とうるさいくらいです笑<br>
                    採れたフルーツも美味しくいただきました。
                  </figcaption>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="p-voice-card p-voice-card--bottom">
                <figure class="p-voice-card__figure">
                  <img src="<?php echo get_theme_file_uri('assets/images/top/voice-card1.png'); ?>" alt="みかんを持った笑顔の夫婦" width="200" height="220" loading="lazy">
                  <figcaption class="p-voice-card__figcaption">初めてのもぎ取りでしたが<br class="u-hidden-pc">
                    とても楽しめました。子どもたちも喜んでもぎ取りしていて <br class="u-hidden-pc">「また行きたい！」とうるさいくらいです笑<br>
                    採れたフルーツも美味しくいただきました。
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="p-voice-card">
                <figure class="p-voice-card__figure">
                  <img src="<?php echo get_theme_file_uri('assets/images/top/voice-card2.png'); ?>" alt="２人の少年が笑顔でリンゴを食べている様子" width="200" height="220" loading="lazy">
                  <figcaption class="p-voice-card__figcaption">初めてのもぎ取りでしたが<br class="u-hidden-pc">
                    とても楽しめました。子どもたちも喜んでもぎ取りしていて <br class="u-hidden-pc">「また行きたい！」とうるさいくらいです笑<br>
                    採れたフルーツも美味しくいただきました。
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="p-voice-card p-voice-card--bottom">
                <figure class="p-voice-card__figure">
                  <img src="<?php echo get_theme_file_uri('assets/images/top/voice-card1.png'); ?>" alt="かごいっぱいのイチゴを持っている笑顔の女性" width="200" height="220" loading="lazy">
                  <figcaption class="p-voice-card__figcaption">初めてのもぎ取りでしたが<br class="u-hidden-pc">
                    とても楽しめました。子どもたちも喜んでもぎ取りしていて <br class="u-hidden-pc">「また行きたい！」とうるさいくらいです笑<br>
                    採れたフルーツも美味しくいただきました。
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="p-voice-card">
                <figure class="p-voice-card__figure">
                  <img src="<?php echo get_theme_file_uri('assets/images/top/voice-card1.png'); ?>" alt="みかんを持った笑顔の夫婦" width="200" height="220" loading="lazy">
                  <figcaption class="p-voice-card__figcaption">初めてのもぎ取りでしたが<br class="u-hidden-pc">
                    とても楽しめました。子どもたちも喜んでもぎ取りしていて <br class="u-hidden-pc">「また行きたい！」とうるさいくらいです笑<br>
                    採れたフルーツも美味しくいただきました。
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
        <!-- ページネーション -->
        <div class="swiper-pagination p-voice-swiper-pagination"></div>
        <!-- 前後の矢印 -->
        <div class="p-voice-swiper-button">
          <div class="swiper-button-prev p-voice-swiper-button-prev"></div>
          <div class="swiper-button-next p-voice-swiper-button-next"></div>
        </div>
      </div>
  </section>

  <!-- news -->
  <section class="p-news">
    <div class="p-news__inner l-inner">
      <div class="p-news__title__box p-title-box">
        <p class="p-title__sub">news</p>
        <h2 class="p-title__main">お知らせ</h2>
      </div>
      <div class="p-news__cards">
        <?php
        $sub_query_args = array(
          'post_type'      => 'post',
          'posts_per_page' => 4,
          'post_status'    => 'publish',
          'orderby'        => 'date',
          'order'          => 'DESC',
        );

        $sub_query = new WP_Query($sub_query_args);

        if ($sub_query->have_posts()) :
        ?>
          <?php while ($sub_query->have_posts()) : $sub_query->the_post(); ?>
            <?php
            $is_recent = (time() - get_the_time('U')) <= 7 * DAY_IN_SECONDS;
            $recent_class = $is_recent ? 'recent-post' : '';
            ?>
            <a href="<?php echo esc_url(add_query_arg('post_id', get_the_ID(), get_permalink())); ?>" class="p-news__card p-news-card <?php echo $recent_class; ?>">
              <div class="p-news-card__img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                <?php endif; ?>
              </div>
              <div class="p-news-card__text-box">
                <div class="p-news-card__info">
                  <?php
                  $categories = get_the_category();
                  if (!empty($categories)) :
                    $category_names = wp_list_pluck($categories, 'name');
                    echo '<p class="p-news-card__category">' . esc_html(implode(', ', $category_names)) . '</p>';
                  endif;
                  ?>
                  <time class="p-news-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                </div>
                <h3 class="p-news-card__title"><?php the_title(); ?></h3>
              </div>
            </a>
          <?php endwhile; ?>
      </div>
    <?php
          wp_reset_postdata();
        endif;
    ?>
    <div class="p-news__btn">
      <a href="<?php echo esc_url(home_url('/news')); ?>" class="c-main-btn">お知らせ一覧をみる</a>
    </div>
    </div>
    </div>
  </section>

  <!-- cta -->
  <?php display_cta_section(); ?>

</main>
<?php get_footer(); ?>