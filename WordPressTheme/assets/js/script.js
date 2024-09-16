"use strict";

// fonts読み込み対策
setTimeout(function () {
  if (document.getElementsByTagName("html")[0].classList.contains("wf-active") != true) {
    document.getElementsByTagName("html")[0].classList.add("loading-delay");
  }
}, 3000);
jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  /* ハンバーガーメニュー */
  $("#js-hamburger").click(function () {
    $("body").toggleClass("is-open");
    if ($(this).attr("aria-expanded") == "false") {
      $(this).attr("aria-expanded", "true");
      $("#js-sp-nav").attr("aria-hidden", "false");
    } else {
      $(this).attr("aria-expanded", "false");
      $("#js-sp-nav").attr("aria-hidden", "true");
    }
  });

  // ハンバーガーメニューアンカーリンク
  $(".js-sp-nav-item a").click(function () {
    $("body").removeClass("is-open");
    $("#js-hamburger").attr("aria-expanded", "false");
    $("#js-sp-nav").attr("aria-hidden", "true");
  });

  // TOPへ戻るボタンの表示設定
  $(function () {
    var pageTop = $(".js-pagetop");
    pageTop.hide();
    $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        pageTop.fadeIn();
      } else {
        pageTop.fadeOut();
      }
    });
    pageTop.click(function () {
      $("body, html").animate({
        scrollTop: 0
      }, 200);
      return false;
    });
  });

  //Tsukushi A Round Gothic・lato
  (function (d) {
    var config = {
        kitId: "xli0vjo",
        scriptTimeout: 3000,
        async: true
      },
      h = d.documentElement,
      t = setTimeout(function () {
        h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
      }, config.scriptTimeout),
      tk = d.createElement("script"),
      f = false,
      s = d.getElementsByTagName("script")[0],
      a;
    h.className += " wf-loading";
    tk.src = "https://use.typekit.net/" + config.kitId + ".js";
    tk.async = true;
    tk.onload = tk.onreadystatechange = function () {
      a = this.readyState;
      if (f || a && a != "complete" && a != "loaded") return;
      f = true;
      clearTimeout(t);
      try {
        Typekit.load(config);
      } catch (e) {}
    };
    s.parentNode.insertBefore(tk, s);
  })(document);

  // service　modal1
  $(document).ready(function () {
    $("#js-service-modal-open1").click(function (e) {
      e.preventDefault();
      $("#js-service-modal1")[0].showModal();
    });
    $("#js-service-modal-close1").click(function (e) {
      e.preventDefault();
      $("#js-service-modal1")[0].close();
    });
    $("#js-service-modal1").click(function (e) {
      if (e.target === this) {
        $(this)[0].close();
      }
    });
  });

  // service　modal2
  $(document).ready(function () {
    $("#js-service-modal-open2").click(function (e) {
      e.preventDefault();
      $("#js-service-modal2")[0].showModal();
    });
    $("#js-service-modal-close2").click(function (e) {
      e.preventDefault();
      $("#js-service-modal2")[0].close();
    });
    $("#js-service-modal2").click(function (e) {
      if (e.target === this) {
        $(this)[0].close();
      }
    });
  });

  // voice swiper
  var swiper = new Swiper(".p-voice-swiper", {
    loop: true,
    speed: 1500,
    slidesPerView: 1.34,
    spaceBetween: 14,
    centeredSlides: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    breakpoints: {
      400: {
        slidesPerView: 1.5,
        spaceBetween: 16,
        centeredSlides: true
      },
      500: {
        slidesPerView: 1.7,
        spaceBetween: 16,
        centeredSlides: true
      },
      600: {
        slidesPerView: 1.9,
        spaceBetween: 16,
        centeredSlides: true
      },
      700: {
        slidesPerView: 2.3,
        spaceBetween: 16,
        centeredSlides: true
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 16,
        centeredSlides: true
      },
      900: {
        slidesPerView: 3.1,
        spaceBetween: 32,
        centeredSlides: false
      },
      1440: {
        slidesPerView: 3,
        spaceBetween: 52,
        centeredSlides: false
      }
    },
    pagination: {
      el: ".p-voice-swiper-pagination",
      clickable: true
    },
    navigation: {
      nextEl: ".p-voice-swiper-button-next",
      prevEl: ".p-voice-swiper-button-prev"
    }
  });

  // 果物モーダル
  var openButtons = document.querySelectorAll('.js-open');
  var closeButtons = document.querySelectorAll('.js-close');
  openButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      var postId = this.getAttribute('data-post-id');
      var explanation = this.getAttribute('data-explanation');
      var season = this.getAttribute('data-season');
      var name = this.getAttribute('data-name');
      var title = this.querySelector('.p-fruits-item__title').textContent;
      var postThumbnail = this.querySelector('.p-fruits-item__img img').getAttribute('src');
      var modal = document.getElementById("js-modal-".concat(postId));
      if (modal) {
        // モーダルの要素に値を設定
        var modalImg = modal.querySelector('.p-fruits-modal__img');
        var modalTitle = modal.querySelector('.p-fruits-modal__title');
        var modalExplanation = modal.querySelector('.p-fruits-modal__explanation');
        var modalSeason = modal.querySelector('.p-fruits-modal__season');
        var modalName = modal.querySelector('.p-fruits-modal__name');
        modalImg.innerHTML = "<img src=\"".concat(postThumbnail, "\" alt=\"Thumbnail\">");
        modalTitle.textContent = title;
        modalExplanation.textContent = explanation;
        modalSeason.textContent = season;
        modalName.textContent = name;
        modal.showModal();
        modal.addEventListener('click', function (e) {
          if (e.target === modal) {
            modal.close();
          }
        });
      }
    });
  });
  closeButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      var modal = this.closest('dialog');
      if (modal) {
        modal.close();
      }
    });
  });

  // 詰め合わせモーダル
  var assortmentOpenButtons = document.querySelectorAll('.js-assortment-open');
  var assortmentCloseButtons = document.querySelectorAll('.js-assortment-close');
  assortmentOpenButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      var postId = this.getAttribute('data-post-id');
      var explanation = this.getAttribute('data-explanation');
      var name = this.getAttribute('data-name');
      var weight1 = this.getAttribute('data-weight1');
      var weight2 = this.getAttribute('data-weight2');
      var price1 = this.getAttribute('data-price1');
      var price2 = this.getAttribute('data-price2');
      var modal = document.getElementById("js-assortment-modal-" + postId);
      if (modal) {
        var modalImg = modal.querySelector('.p-assortment-modal__img');
        var postThumbnail = this.querySelector('.p-assortment-item__img img').getAttribute('src');
        modalImg.innerHTML = "<img src=\"" + postThumbnail + "\" alt=\"Thumbnail\">";
        var modalTitle = modal.querySelector('.p-assortment-modal__title');
        var modalName = modal.querySelector('.p-assortment-modal__name');
        var modalExplanation = modal.querySelector('.p-assortment-modal__explanation');
        var modalWeight1 = modal.querySelector('.p-assortment-modal__weight1');
        var modalWeight2 = modal.querySelector('.p-assortment-modal__weight2');
        var modalPrice1 = modal.querySelector('.p-assortment-modal__price1');
        var modalPrice2 = modal.querySelector('.p-assortment-modal__price2');
        modalTitle.textContent = this.querySelector('.p-assortment-item__title').textContent;
        modalName.textContent = name;
        modalExplanation.textContent = explanation;
        modalWeight1.textContent = weight1;
        modalWeight2.textContent = weight2;
        modalPrice1.textContent = price1;
        modalPrice2.textContent = price2;
        modal.showModal();

        // 背景をクリックしてモーダルを閉じる
        modal.addEventListener('click', function (e) {
          if (e.target === modal) {
            modal.close();
          }
        });
      }
    });
  });
  assortmentCloseButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      var modal = this.closest('dialog');
      if (modal) {
        modal.close();
      }
    });
  });

  // 表示アニメーション
  $(document).ready(function () {
    function getElementOffsetAndHeight() {
      var elements = [];
      $('.js-fade-in').each(function () {
        var elementOffsetTop = $(this).offset().top;
        var elementHeight = $(this).outerHeight();
        elements.push({
          element: $(this),
          offsetTop: elementOffsetTop,
          height: elementHeight
        });
      });
      return elements;
    }
    var fadeElements = getElementOffsetAndHeight();
    function getScrollData() {
      var windowHeight = $(window).height();
      var scrollTop = $(window).scrollTop();
      return {
        windowHeight: windowHeight,
        scrollTop: scrollTop
      };
    }
    function checkAndFadeIn() {
      var scrollData = getScrollData();
      fadeElements.forEach(function (item) {
        if (scrollData.scrollTop + scrollData.windowHeight > item.offsetTop + item.height / 2) {
          item.element.addClass('visible');
        }
      });
    }
    $(window).on('scroll', function () {
      checkAndFadeIn();
    });
    checkAndFadeIn();
  });
});