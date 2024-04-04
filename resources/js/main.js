// import section

// import IMask from 'imask';
// import Swiper from 'swiper';
// import { Navigation, Pagination } from 'swiper/modules';


// Common
const body = document.querySelector('body');
const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); // csrf token






// we use cookie
const weUseCookie = document.querySelector('.we-use-cookie');
const weUseCookieClose = document.querySelector('.js-we-use-cookie-close');

if (weUseCookie) {

  weUseCookieClose.onclick = () => {
    weUseCookie.classList.add('hidden');

    fetch('/ajax/we-use-cookie', {
      method: 'GET',
      cache: 'no-cache',
    })
    .catch((error) => {
      console.log(error);
    })
  }

}


// to-top только на главной
// if (document.getElementById("main")) {
//   // to-top плавная прокрутка наверх
//   document.getElementById("to-top").onclick = function() {
//     scroll(0, 0);
//   }
// }

document.getElementById("to-top").onclick = function() {
  scroll(0, 0);
}

window.onscroll = function() {
  // Показать to-top при скролле
  let scrToTop = window.scrollY || document.documentElement.scrollTop;
  if (scrToTop > 500) {
    // if (document.getElementById("main")) {
      document.getElementById("to-top").classList.add('active');
      // document.getElementById("to-top").;
    // } else {
      // document.getElementById("to-top").style.display = "none";
    // }
  } else {
    // if (document.getElementById("main")) {
      document.getElementById("to-top").classList.remove('active');
      // document.getElementById("to-top").style.opacity = "0";
      // document.getElementById("to-top").style.visibility = "hidden";
    // } else {
      // document.getElementById("to-top").style.display = "none";
    // }
  }
};