// import section

// import IMask from 'imask';
// import Swiper from 'swiper';
// import { Navigation, Pagination } from 'swiper/modules';


// Common
const body = document.querySelector('body');
const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); // csrf token






// we use cookie
const weUseCookie = document.querySelector('.we-use-cookie');
const weUseCookieClose = document.querySelector('.we-use-cookie-close');

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