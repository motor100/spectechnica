<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @yield('robots')
  <link rel="shortcut icon" href="{{ asset('/img/favicon.svg') }}" type="image/x-icon">
  <title>Спецтехника</title>
  @yield('style')
  @vite(['resources/sass/main.scss'])
</head>

<body>
  <header class="header">
    <!-- Верхнее меню -->
    <div class="header_top">
      <div class="container">
        <div class="header_contant">
          <!-- Бургер -->
          <div class="item_burger">
            <div class="burger">
              <span class="burger__line"></span>
              <span class="burger__line"></span>
              <span class="burger__line"></span>
            </div>
            <a href="#" class="burger_link"></a>
          </div>
          <!-- Логотип -->
          <div class="item_logo">
            <a href="/" class="logo-link"></a>
            <img src="/img/logo.svg" alt="logo" class="main_logo">
            <p>Производство и продажа спецтехники</p>
          </div>
          <!-- Кнопка заказать звонок -->
          <div class="item_call">
            <a href="tel:+780090000000" class="number_phone">8-800-9000-00-00</a>
            <div class="btn-call js-callback-btn">
              <p class="btn-call__text">ЗАКАЗАТЬ ЗВОНОК</p>
              <img src="img/icon_call.svg" alt="call">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Навигационное меню -->
    <div class="navigation">
      <div class="container">
        <div class="navbar-wrapper">
          <div class="navbar">
            <div class="navbar-item navbar-item-dropdown">
              <a href="/catalog" class="navbar-item__link">Каталог</a>
              <div class="submenu">
                <div class="flex-container">
                  <div class="submenu-item">
                    <div class="submenu-item__image">
                      <a href="/catalog/category" class="submenu-item__link">
                        <img src="/img/katalog-avtocisterny.png" alt="">
                      </a>
                    </div>
                    <a href="/catalog/category" class="submenu-item__title">Автоцистерны</a>
                  </div>
                  <div class="submenu-item">
                    <div class="submenu-item__image">
                      <a href="/catalog/category" class="submenu-item__link">
                        <img src="/img/katalog-pricepnaya-tekhnika.png" alt="">
                      </a>
                    </div>
                    <a href="/catalog/category" class="submenu-item__title">Прицепная техника</a>
                  </div>
                  <div class="submenu-item">
                    <div class="submenu-item__image">
                      <a href="/catalog/category" class="submenu-item__link">
                        <img src="/img/katalog-avtokrany-i-manipulyatory.png" alt="">
                      </a>
                    </div>
                    <a href="/catalog/category" class="submenu-item__title">Автокраны и манипуляторы</a>
                  </div>
                  <div class="submenu-item">
                    <div class="submenu-item__image">
                      <a href="/catalog/category" class="submenu-item__link">
                        <img src="/img/katalog-tekhnologicheskij-transport.png" alt="">
                      </a>
                    </div>
                    <a href="/catalog/category" class="submenu-item__title">Технологический транспорт</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="navbar-item">
              <a href="/upgrade-and-service" class="navbar-item__link">доработки и сервис</a>
            </div>
            <div class="navbar-item">
              <a href="/services" class="navbar-item__link">услуги</a>
            </div>
            <div class="navbar-item">
              <a href="/about" class="navbar-item__link">о компании</a>
            </div>
            <div class="navbar-item">
              <a href="/contacts" class="navbar-item__link">контакты</a>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </header>

  <div class="content-wrapper">
    @yield('content')
  </div>

  <!-- Футер -->
  <footer class="footer">

    <!-- Стрелка вверх -->
    <div id="to-top" class="to-top">
      <div class="container">
        <div class="polygon">
          <div class="triangle-wrapper">
            <div class="triangle"></div>
          </div>
          
          <!-- <img src="/img/Polygon_1.png" alt="Стрелка"> -->
        </div>
      </div>
    </div>

    <div class="top_line"></div>
    <div class="footer_content">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="f_item__content">
              <div class="p1-title">контакты</div>
              <div class="phone">+7 (982) 292-88-79 </div>
              <div class="email">zakaz@gidravlic.com</div>
              <div class="address">г. Миасс, Тургоякское шоссе, 5/11</div>
              <div class="f_logo">
                <img class="f_logo__image" src="/img/logo.svg" alt="">
              </div>              
              <a href="/contacts" class="f_info">Полная контактная информация</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="f_item__list">
                <div class="p1-title">продукция</div>
                <ul class="list">
                  <li class="list-item">
                    <a href="/catalog">Каталог техники</a>
                  </li>
                  <li class="list-item">
                    <a href="/in-stock">Техника в наличии</a>
                  </li>
                  <li class="list-item">
                    <a href="/special-offer">Спецпредложения</a>
                  </li>
                  <li class="list-item">
                    <a href="/upgrade-and-service">Доработки и сервис</a>
                  </li>
                </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="f_item__list f_item__list_right">
              <div class="p1-title">о компании</div>
              <ul class="list">
                <li class="list-item">
                  <a href="/about">О "ГидроСпецАвто"</a>
                </li>
                <li class="list-item">
                  <a href="/manufacture">Производство</a>
                </li>
                <li class="list-item">
                  <a href="/services">Услуги</a>
                </li>
                <li class="list-item">
                  <a href="/certificates">Сертификаты</a>
                </li>
              </ul>
              <div class="f_apl js-callback-btn">Оставить заявку</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Белая полоса под футером -->
    <div class="bottom-white-line">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="copyright footer-bottom-item">ООО "ГидроСпецАвто" {{ date('Y') }}</div>
            <div class="inn footer-bottom-item">ИНН 7415113283</div>
          </div>
          <div class="col-md-4">
            <a href="/privacy-policy" class="privacy-policy-link">Политика конфиденциальности</a>
          </div>
          <div class="col-md-3">
            <div class="developer footer-bottom-item">
              <a href="https://vk.com/fenix_mix" class="author" target="_blank">Дизайн FeniX</a>
            </div>
            <div class="developer footer-bottom-item">
              <a href="https://mybutton.ru" class="author" target="_blank">Поддержка Button</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    
  </footer>

  <div id="callback-modal" class="modal-window callback-modal">
    <div class="modal-wrapper">
      <div class="modal-area">
        <div class="modal-close">
          <div class="close"></div>
        </div>
        <div class="modal-title">Оставить заявку</div>
        <form id="callback-modal-form" class="form" method="post">
          <div class="form-group">
            <input type="text" name="name" id="name-callback-modal" class="input-field js-name-callback-modal" required minlength="3" maxlength="20" placeholder="Имя*">
          </div>
          <div class="form-group">
            <input type="email" name="email" id="email-callback-modal" class="input-field js-email-callback-modal" required minlength="3" maxlength="50" placeholder="E-mail*">
          </div>
          <div class="form-group">
            <input type="text" name="phone" id="phone-callback-modal" class="input-field js-phone-callback-modal js-input-phone-mask" required size="18" placeholder="Телефон*">
          </div>
          <div class="custom-checkbox-wrapper">
            <input type="checkbox" name="checkbox-agree" class="custom-checkbox js-checkbox-callback-modal" id="checkbox-agree-callback-modal" checked required>
            <label for="checkbox-agree-callback-modal" class="custom-checkbox-label"></label>
            <span class="checkbox-text">Согласен на обработку персональных данных</span>
          </div>
          <div class="custom-checkbox-wrapper mb50">
            <input type="checkbox" name="checkbox-read" class="custom-checkbox js-checkbox-callback-modal" id="checkbox-read-callback-modal" checked required>
            <label for="checkbox-read-callback-modal" class="custom-checkbox-label"></label>
            <span class="checkbox-text">Ознакомлен с <a href="/politika-konfidencialnosti" class="privacy-policy-link" target="_blank">политикой конфиденциальности</a></span>
          </div>
          @csrf
          <button type="button" id="callback-submit-btn" class="modal-submit-btn">ОТПРАВИТЬ</button>
        </form>
      </div>
    </div>
  </div>

  <div id="consultation-modal" class="modal-window consultation-modal">
    <div class="modal-wrapper">
      <div class="modal-area">
        <div class="modal-close">
          <div class="close"></div>
        </div>
        <div class="modal-title">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</div>
        <form id="callback-modal-form" class="form" method="post">
          <div class="form-group">
            <input type="text" name="name" id="name-callback-modal" class="input-field js-name-callback-modal" required minlength="3" maxlength="20" placeholder="Имя*">
          </div>
          <div class="form-group">
            <textarea name="text" id="text-callback-modal" class="input-field js-text-callback-modal" cols="30" rows="10" required minlength="3" maxlength="50" placeholder="Задать вопрос*"></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="phone" id="phone-callback-modal" class="input-field js-phone-callback-modal js-input-phone-mask" required size="18" placeholder="Телефон*">
          </div>
          <div class="custom-checkbox-wrapper">
            <input type="checkbox" name="checkbox-agree" class="custom-checkbox js-checkbox-callback-modal" id="checkbox-agree-callback-modal" checked required>
            <label for="checkbox-agree-callback-modal" class="custom-checkbox-label"></label>
            <span class="checkbox-text">Согласен на обработку персональных данных</span>
          </div>
          <div class="custom-checkbox-wrapper mb50">
            <input type="checkbox" name="checkbox-read" class="custom-checkbox js-checkbox-callback-modal" id="checkbox-read-callback-modal" checked required>
            <label for="checkbox-read-callback-modal" class="custom-checkbox-label"></label>
            <span class="checkbox-text">Ознакомлен с <a href="/politika-konfidencialnosti" class="privacy-policy-link" target="_blank">политикой конфиденциальности</a></span>
          </div>

          <button type="button" id="consultation-submit-btn" class="modal-submit-btn">ОТПРАВИТЬ</button>
        </form>
      </div>
    </div>
  </div>


  @if(!request()->cookie('we-use-cookie'))
    <div class="we-use-cookie">
      <div class="we-use-cookie-wrapper">
        <div class="we-use-cookie-text">Мы используем файлы cookie. Продолжив использование сайта, вы соглашаетесь с условиями <a href="/privacy-policy">Соглашения об использовании сайта</a></div>
        <button class="primary-btn js-we-use-cookie-close">Прекрасно</button>
      </div>
    </div>
  @endif

  <!-- 
  @ if(Auth::guard('admin')->user())
    <div class="top-line-is-login">
      <div class="container-fluid">
        <div class="text-wrapper">
          <div class="top-line__text dashboard">
            <a href="/admin">Панель управления</a>
          </div>
          <div class="top-line__text logout">
            <form class="form" action="{{-- route('admin.logout') --}}" method="POST">
              @csrf
              <button class="logout-btn" type="submit">Выйти</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  @ endif
   -->

  @yield('script')
  @vite(['resources/js/main.js'])

</body>
</html>
