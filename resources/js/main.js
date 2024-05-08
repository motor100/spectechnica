// import section

// import IMask from 'imask';
import Swiper from 'swiper';
import { Pagination, EffectFade } from 'swiper/modules';


// Common
const body = document.querySelector('body');
const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); // csrf token


// we use cookie
const weUseCookie = document.querySelector('.we-use-cookie');

if (weUseCookie) {

  const weUseCookieCloseBtn = document.getElementById('we-use-cookie-close-btn');

  weUseCookieCloseBtn.onclick = () => {
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


// to top
document.getElementById("to-top").onclick = function() {
  scroll(0, 0);
}


// Выделение оранжевым цветом элементов меню
const navbarItems = document.querySelectorAll('.header .navbar .navbar-item');

if (typeof navbarItemActive !== 'undefined') {
  navbarItems[navbarItemActive].classList.add('active');
}



// Окна modal window
const modalWindow = document.querySelectorAll('.modal-window');
const callbackBtns = document.querySelectorAll('.js-callback-btn');
const callbackModal = document.querySelector('#callback-modal');
const consultationModal = document.querySelector('#consultation-modal');
const modalCloseBtn = document.querySelector('.modal-window .modal-close');

function modalWindowOpen(win) {
  // Закрытие мобильного меню
  // closeMobileMenu();
  // Открытие окна
  body.classList.add('overflow-hidden');
  win.classList.add('active');
  setTimeout(() => {
    win.childNodes[1].classList.add('active');
  }, 200);
}

function modalWindowClose(win) {
  body.classList.remove('overflow-hidden');
  win.childNodes[1].classList.remove('active');
  setTimeout(() => {
    win.classList.remove('active');
  }, 300);
}

callbackBtns.forEach((item) => {
  item.onclick = () => {
    modalWindowOpen(callbackModal);
  }
});

modalCloseBtn.onclick = () => {
  modalWindowClose(callbackModal);
}

// Закрытие окна если клик за его пределами
for (let i = 0; i < modalWindow.length; i++) {
  modalWindow[i].onclick = function(event) {
    let classList = event.target.classList;
    for (let j = 0; j < classList.length; j++) {
      if (classList[j] == "modal-wrapper" || classList[j] == "modal-window") {
        modalWindowClose(modalWindow[i])
      }
    }
  }
}


// Callback modal checkbox I agree and I read
const checkboxCallbackModal = document.querySelectorAll('.js-checkbox-callback-modal');
const callbackSubmitBtn = document.querySelector('#callback-submit-btn');

function callbackModalCheckboxOnchange() {
  if (!checkboxCallbackModal[0].checked || !checkboxCallbackModal[1].checked) {
    callbackSubmitBtn.disabled = true;
  } else {
    callbackSubmitBtn.disabled = '';
  }
}

checkboxCallbackModal.forEach((item) => {
  item.onchange = callbackModalCheckboxOnchange;
});


// Отправка формы ajax в модальном окне
const callbackModalForm = document.querySelector('#callback-modal-form');

function ajaxCallback(form) {

  const inputs = form.querySelectorAll('.input-field');
  let arr = [];

  const inputName = form.querySelector('.js-name-callback-modal');
  if (inputName.value.length < 3 || inputName.value.length > 20) {
    inputName.classList.add('required');
    arr.push(false);
  }

  let inputEmail = form.querySelector('.js-email-callback-modal');
  if (inputEmail.value.length < 3 || inputEmail.value.length > 50) {
    inputEmail.classList.add('required');
    arr.push(false);
  }

  const inputPhone = form.querySelector('.js-phone-callback-modal');
  if (inputPhone.value.length != 18) {
    inputPhone.classList.add('required');
    arr.push(false);
  }

  const inputCheckboxes = form.querySelectorAll('.js-checkbox-callback-modal');

  inputCheckboxes.forEach((item) => {
    if (!item.checked) {
      arr.push(false);
    }
  });

  if (arr.length == 0) {
    for (let i = 0; i < inputs.length; i++) {
      inputs[i].classList.remove('required');
    }

    // fetch('/api/callback', {
    //   method: 'POST',
    //   cache: 'no-cache',
    //   body: new FormData(form)
    // })
    // .catch((error) => {
    //   console.log(error);
    // })

    alert("Спасибо. Мы свяжемся с вами.");

    form.reset();

  }

  return false;
}

callbackSubmitBtn.onclick = () => {
  ajaxCallback(callbackModalForm);
}


// Main slider
const mainSection = document.querySelector('.main-section');

if (mainSection) {
  const mainSlider = new Swiper('.main-slider', {
    modules: [Pagination, EffectFade],
    slidesPerView: 1,
    loop: true,
    // effect: 'fade',
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    }
  });
}

// Search
const searchFormSection = document.querySelector('.search-form-section');

if (searchFormSection) {
  const searchForm = document.querySelector('.js-search-form');
  const searchInput = document.querySelector('.js-search-input');
  const searchClose = document.querySelector('.search-close');
  const searchDropdown = document.querySelector('.search-dropdown');

  /*
  function searchOnInput() {

    if (searchInput.value.length > 3 && searchInput.value.length < 30) {
  
      function searchDropdownRender(json) {
        
        searchRezult.innerHTML = '';
  
        // Если товаров 0, то не найдено
        if (json.length == 0) {
          let tmpEl = document.createElement('div');
          tmpEl.className = "no-product";
          tmpEl.innerHTML = 'Товаров не найдено';
          searchRezult.append(tmpEl);
        }
  
        // Вывод результатов поиска
        if (json.length > 0) {
  
          // Ограничение количества выводимых результатов
          if (json.length > 4) {
            json.length = 4;
          }
  
          // Формирую html из массива данных
          json.forEach((item) => {
            let tmpEl = document.createElement('div');
            tmpEl.className = "search-list-item main-list-item";
            tmpEl.innerHTML = '<a href="/catalog/' + item.slug + '" class="search-list-item__link main-list-item__link">' + item.title + '</a>';
            searchRezult.append(tmpEl);
          });
  
          // Показать все результаты
          let tmpEl = document.createElement('a');
          tmpEl.className = "secondary-btn search-see-all-btn";
          tmpEl.href = '/poisk?search_query=' + searchInput.value;
          tmpEl.innerText = 'Показать все';
          tmpEl.onclick = searchResetForm;
          searchRezult.append(tmpEl);
  
          // Добавляю клик на найденные элементы
          let searchListItemLink = document.querySelectorAll('.search-list-item__link');
  
          searchListItemLink.forEach((item) => {
            item.onclick = searchResetForm;
          });
        }
  
        searchClose.classList.add('search-close-active');
        searchInput.classList.add('search-input-dp');
        searchDropdown.classList.add('search-dropdown-active');
      }
  
      fetch('/api/products-search?search_query=' + searchInput.value, {
        method: 'get',
        cache: 'no-cache',
      })
      .then((response) => response.json())
      .then((json) => {
        searchDropdownRender(json);      
      })
      .catch((error) => {
        console.log(error);
      })
  
    } else {
      // Если менее 3 и более 30 символов, то скрываю результаты поиска
      searchDropdownClose();
      searchRezult.innerHTML = '';
    }
  
  }
  */

  function searchResetForm() {
    searchForm.reset();
    searchDropdown.classList.remove('active');
    searchClose.classList.remove('active');
    searchInput.classList.remove('active');
  }

  function searchOnInput() {
    searchInput.oninput = function() {
      searchClose.classList.add('active');
      searchDropdown.classList.add('active');
    }
  }
  
  searchClose.onclick = searchResetForm;
  
  searchInput.oninput = searchOnInput;
}


// Вкладки в карточке товара
const tabButtons = document.querySelector('.tab_buttons');

if (tabButtons) {
  const tabBtns = document.querySelectorAll('.tab_btn');
  const tabContents = document.querySelectorAll('.tab_content');

  for (let i = 0; i < tabBtns.length; i++) {
    tabBtns[i].onclick = function() {

      tabBtns.forEach((item) => {
        item.classList.remove('active');
      });
      tabBtns[i].classList.add('active');

      tabContents.forEach((item) => {
        item.classList.remove('active');
      });
      tabContents[i].classList.add('active');
    }
  }

}


// Фильтр в категории
const filterSection = document.querySelector('.filter-section');

if (filterSection) {
  const filterBtn = document.querySelector('.filter-btn');
  const filterContent = document.querySelector('.filter-content');

  filterBtn.onclick = function () {
    filterContent.classList.toggle('active');
  }
}

