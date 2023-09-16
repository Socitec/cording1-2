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