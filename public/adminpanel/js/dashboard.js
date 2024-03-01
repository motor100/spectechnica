// Common
const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

// Функция отключения скролла у input type=number
function disableScrollInputNumber() {

  let numberInputs = document.querySelectorAll('.input-number');

  numberInputs.forEach((item) => {
    item.onwheel = function(e) {
      e.preventDefault();
    }
  });

  return false;
}

// Отключение скролла у input type=number
disableScrollInputNumber();


// Input phone mask
let phoneElements = document.querySelectorAll('.phone-mask');

phoneElements.forEach((item) => {
  let maskOptionsPhone = {
    mask: '+{7} (000) 000 00 00'
  };
  let mask = IMask(item, maskOptionsPhone);
});

// Выбор файла Изображение
let inputMainFile = document.querySelector('#input-main-file'),
    mainFileText = document.querySelector('.main-file-text');

if (inputMainFile) {
  inputMainFile.onchange = function() {
    mainFileText.innerHTML = this.files[0].name;
  }
}

// Выбор файла второго Изображение
let inputSecondFile = document.querySelector('#input-second-file'),
    secondFileText = document.querySelector('.second-file-text');

if (inputSecondFile) {
  inputSecondFile.onchange = function() {
    secondFileText.innerHTML = this.files[0].name;
  }
}


// Init air datepicker
// Date picker
let datepickers = document.querySelectorAll('.datepicker');

datepickers.forEach((item) => {
  const dp = new AirDatepicker(item, {
    minDate: new Date(),
    autoClose: true
  });
});

