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
    <div class="header_top">
      <div class="container">
        <div class="header_contant">
          <div class="logo">
            <a href="/" class="logo-link">
              <img src="img/логотип.svg" alt="logo">
              <p>Производство и продажа спецтехники</p>
            </a>
          </div>
          <div class="item_call">
            <p class="number_fone">8-800-9000-00-00</p>
            <div class="btn-call js-callback-btn">
              <span class="btn-call__text">заказать звонок</span>
              <img src="img/icon_call.svg" alt="#">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="navigation">
      <div class="container">
        <div class="navbar">
          <a href="/catalog">Каталог</a>
          <a href="/in-stock">в наличии</a>
          <a href="/upgrade-and-service">доработки и сервис</a>
          <a href="/services">услуги</a>
          <a href="/about">о компании</a>
        </div>  
      </div>
    </div>
  </header>

  <div class="content-wrapper">
    @yield('content')
  </div>

  <footer class="footer">
    
    <!-- Нижняя полоса -->
    <div class="top_line"></div>
    
    <div class="footer-content">
      <div class="container">
        <div class="f_content">
          <div class="f_item">
            <p>контакты</p>
            <p class="fone">+7 (982) 292-88-79 </p>
            <a class="email" href="#">zakaz@gidravlic.com</a>
            <p class="adress">г. Миасс, Тургоякское шоссе, 5/11</p>
            <img class="f_logo" src="img/логотип.svg" alt="logo">
          </div>
          <div class="f_item">
            <p>продукция</p>
            <ul>
              <li><a href="/catalog">Каталог техники</a></li>
              <li><a href="/in-stock">Техника в наличии</a></li>
              <li><a href="/special-offer">Спецпредложения</a></li>
              <li><a href="/upgrade-and-service">Доработки и сервис</a></li>
            </ul>
          </div>
          <div class="f_item">
            <p>о компании</p>
            <ul>
              <li><a href="/about">О “ГидроСпецАвто”</a></li>
              <li><a href="/manufacture">Производство</a></li>
              <li><a href="/services">Услуги</a></li>
              <li><a href="/certificates">Сертификаты</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="bottom-white-line">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="copyright">ООО "ГидроСпецАвто" {{ date('Y') }}</div>
          </div>
          <div class="col-md-4">
            <a href="/privacy-policy" class="privacy-policy-link">Политика конфиденциальности</a>
          </div>
          <div class="col-md-4"></div>
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

  <!-- Стрелка вверх -->
  <div id="to-top" class="to-top">
    <div class="container">
      <div class="polygon">
        <img src="img/Polygon_1.png" alt="Стрелка">
      </div>
    </div>
  </div>
  

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
