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
            <p class='number_fone'>8-800-9000-00-00</p>
            <button class='btn-call'>заказать звонок
              <img src="img/icon_call.svg" alt="#">
            </button>
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
    
    
    <div class="container">
      <div class="f_contant">
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
  </footer>

  @if(!request()->cookie('we-use-cookie'))
    <div class="we-use-cookie">
      <div class="we-use-cookie-wrapper">
        <div class="we-use-cookie-text">Этот сайт использует cookie-файлы и другие технологии для улучшения его работы. Продолжая работу с сайтом, вы разрешаете использование cookie-файлов. Вы всегда можете отключить файлы cookie в настройках Вашего браузера.</div>
        <button class="primary-btn we-use-cookie-close">ХОРОШО</button>
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
