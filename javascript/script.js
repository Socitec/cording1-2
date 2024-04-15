// メニュー展開時に背景を固定
const backgroundFix = (bool) => {
  const scrollingElement = () => {
    const browser = window.navigator.userAgent.toLowerCase();
    if ("scrollingElement" in document) return document.scrollingElement;
    return document.documentElement;
  };

  const scrollY = bool
    ? scrollingElement().scrollTop
    : parseInt(document.body.style.top || "0");

  const fixedStyles = {
    height: "100vh",
    position: "fixed",
    top: `${scrollY * -1}px`,
    left: "0",
    width: "100vw"
  };

  Object.keys(fixedStyles).forEach((key) => {
    document.body.style[key] = bool ? fixedStyles[key] : "";
  });

  if (!bool) {
    window.scrollTo(0, scrollY * -1);
  }
};

// 変数定義
const CLASS = "-active";
let flg = false;
let accordionFlg = false;

let humberger = document.getElementById("js-humberger");
let focusTrap = document.getElementById("js-focus-trap");
let menu = document.querySelector(".js-nav-area");
let accordionTrigger = document.querySelectorAll(".js-sp-accordion-trigger");
let accordion = document.querySelectorAll(".js-sp-accordion");
let menuList = document.getElementsByClassName("js-menu-link");
console.log(menuList);

// メニュー開閉制御
humberger.addEventListener("click", (e) => { //ハンバーガーボタンが選択されたら
  e.currentTarget.classList.toggle(CLASS);
  menu.classList.toggle(CLASS);
  if (flg) {// flgの状態で制御内容を切り替え
    // backgroundFix(false);
    humberger.setAttribute("aria-expanded", "false");
    humberger.focus();
    flg = false;
  } else {
    // backgroundFix(true);
    humberger.setAttribute("aria-expanded", "true");
    flg = true;
  }
});
//メニューのリストがクリックされたらメニューを閉じる
for (let i = 0; i < menuList.length; i++) {
  menuList[i].addEventListener("click", (e) => {
    humberger.classList.toggle(CLASS);
    menu.classList.toggle(CLASS);
    if (flg) {// flgの状態で制御内容を切り替え
      // backgroundFix(false);
      humberger.setAttribute("aria-expanded", "false");
      humberger.focus();
      flg = false;
    } else {
      // backgroundFix(true);
      humberger.setAttribute("aria-expanded", "true");
      flg = true;
    }
  });
}

window.addEventListener("keydown", () => { //escキー押下でメニューを閉じられるように
  if (event.key === "Escape") {
    humberger.classList.remove(CLASS);
    menu.classList.remove(CLASS);

    // backgroundFix(false);
    humberger.focus();
    humberger.setAttribute("aria-expanded", "false");
    flg = false;
  }
});

// メニュー内アコーディオン制御
accordionTrigger.forEach((item) => {
  item.addEventListener("click", (e) => {
    e.currentTarget.classList.toggle(CLASS);
    e.currentTarget.nextElementSibling.classList.toggle(CLASS);
    if (accordionFlg) {
      e.currentTarget.setAttribute("aria-expanded", "false");
      accordionFlg = false;
    } else {
      e.currentTarget.setAttribute("aria-expanded", "true");
      accordionFlg = true;
    }
  });

});

// フォーカストラップ制御
focusTrap.addEventListener("focus", (e) => {
  humberger.focus();
});

//ボタンをクリックするとポップアップ表示
const popupList = [
  // 順序 [0]クリック対象要素 [1]ポップアップ対象要素 [2]ポップアップを閉じるボタン要素 [3]ポップアップのdisplay
  ['js_about-button', 'js_about-popup-block', 'js_about-close-button', 'block'],
  ['js_profile1-button', 'js_profile1-popup-block', 'js_profile1-close-button', 'flex'],
  ['js_profile1-img', 'js_profile1-popup-block', 'js_profile1-close-button', 'flex'],
  ['js_profile2-button', 'js_profile2-popup-block', 'js_profile2-close-button', 'flex'],
  ['js_profile2-img', 'js_profile2-popup-block', 'js_profile2-close-button', 'flex'],
];

popupList.forEach(function (popupItem) {
  let clickButton = document.getElementById(popupItem[0]);
  let popupWrapper = document.getElementById(popupItem[1]);
  let closeButton = document.getElementById(popupItem[2]);

  clickButton.addEventListener('click', () => {
    popupWrapper.style.display = 'block';
  });

  popupWrapper.addEventListener('click', e => {
    if (e.target.id === popupWrapper.id || e.target.id === closeButton.id) {
      popupWrapper.style.display = 'none';
    }
  });
});


//jQuery記述

jQuery(function ($) {
});
// //Swiper本体とモジュールを読み込む
// import Swiper, { Navigation, Pagination, Autoplay } from 'swiper';

// // Swiper本体とモジュールのスタイル読み込み
// import 'swiper/css';
// import 'swiper/css/navigation';
// import 'swiper/css/pagination';

// const Slideshow = () => {

//   const option = {
//     //モジュールを使う
//     modules: [Navigation, Pagination, Autoplay],
//     loop: true,
//     slidesPerView: 1,
//     speed: 1000,
//     //autoplayとかpaginationとかが使えるようになる
//     autoplay: {
//       delay: 5000,
//     },
//     pagination: {
//       el: '.swiper-pagination',
//     },
//     navigation: {
//       nextEl: '.swiper-button-next',
//       prevEl: '.swiper-button-prev',
//     },
//   }

//   const swiper = new Swiper('.swiper', option);
// }
// export default Slideshow;

const swiper = new Swiper('.swiper', {
  // Optional parameters
  // direction: 'vertical',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
//# sourceMappingURL=script.js.map