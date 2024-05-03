@section('title', 'Главная')

@extends('layouts.main')

@section('content')

<div class="home">

  <!-- Главная секция -->
  <div class="main-section">
    <div class="main-slider swiper">
      <div class="swiper-wrapper">
        <div class="slide swiper-slide">
          <div class="images">
            <img class="img_fon" src="img/image_12.png" alt="фон">
            <img class="img_car" src="img/main-slider-car1.png" alt="урал 4320">
          </div>
          <div class="title">
            <span class="title-text">Aвтоцистерны</span>
          </div>
        </div>
        <div class="slide swiper-slide">
          <div class="images">
            <img class="img_fon" src="img/image_12.png" alt="фон">
            <img class="img_car" src="img/main-slider-car1.png" alt="урал 4320">
          </div>
          <div class="title">
            <span class="title-text">Aвтоцистерны</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Пагинация -->
    <div class="swiper-pagination"></div>
  </div>
  
  <!-- Секция каталога техники -->
  <div class="catalog-section">
    <div class="container">
      <div class="section-title">каталог техники</div>
      <div class="catalog">
        <div class="eq_item">
          <div class="eq_item__image">
            <img src="/img/katalog-avtocisterny.png" alt="камаз-55510">
          </div>
          <div class="eq_item__title">автоцистерны</div>
          <a href="/catalog/category" class="eq_item__link"></a>
          <span class="vline"></span>
        </div>
        <div class="eq_item">
          <div class="eq_item__image">
            <img src="/img/katalog-pricepnaya-tekhnika.png" class="eq_item__image" alt="камаз-55510">
          </div>
          <div class="eq_item__title">прицепная<br>техника</div>
          <a href="/catalog/category" class="eq_item__link"></a>
          <span class="vline"></span>
        </div>
        <div class="eq_item">
          <div class="eq_item__image">
            <img src="/img/katalog-avtokrany-i-manipulyatory.png" class="eq_item__image" alt="камаз-55510">
          </div>
          <div class="eq_item__title">автокраны и<br>манипуляторы</div>
          <a href="/catalog/category" class="eq_item__link"></a>
          <span class="vline"></span>
        </div>
        <div class="eq_item">
          <div class="eq_item__image">
            <img src="/img/katalog-tekhnologicheskij-transport.png" class="eq_item__image" alt="камаз-55510">
          </div>
          <div class="eq_item__title">технологический<br>транспорт</div>
          <a href="/catalog/category" class="eq_item__link"></a>
        </div>
      </div>
      <a href="/catalog" class="btn_primary__catalog">перейти в каталог</a>
    </div>
  </div>

  <!-- Секция с описанием деятельности компании  -->
  <div class="about_section">
    <div class="container">
      <div class="section-title">О компании</div>
      <div class="about_text">ГидроСпецАвто - это завод с современным оборудованием и передовыми технологиями.<br>
        Завод представляет собой крупный машиностроительный комплекс с законченным производственным циклом от заготовки до выпуска готовой продукции.<br>
        Помимо производства спецтехники, мы являемся дилером российских автогигантов, занимаемся комплексным сервисным обслуживанием и снабжением сертифицированными запчастями.</div>
      <div class="services">
        <div class="row">
          <div class="col-md-3">
            <div class="item_s">
              <div class="item_image">
                <img src="/img/s_1.png" alt="#">
              </div>
              <div class="item_text">Высокое качество<br>продукции по<br>доступным ценам</div>  
            </div>
          </div>
          <div class="col-md-3">
            <div class="item_s">
              <div class="item_image">
                <img src="/img/s_2.png" alt="#">
              </div>
              <div class="item_text">Штат опытных<br>сотрудников</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="item_s">
              <div class="item_image">
                <img src="/img/s_3.png" alt="#">
              </div>
              <div class="item_text">Trade-in: принимаем<br>Вашу технику в зачет</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="item_s">
              <div class="item_image">
                <img src="/img/s_4.png" alt="#">
              </div>
              <div class="item_text">Льготная доставка в<br>регионы собственным<br>автотранспортом</div>
            </div>
          </div>
        </div>
      </div>
    </div>   
  </div>

  <!-- Секция с кнопками -->
  <div class="buttons_section">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="/about#video_content_section" class="btn_primary__company">ВИДЕО О КОМПАНИИ</a>
        </div>
        <div class="col-md-3">
          <a href="/about#our_advantages_section" class="btn_primary__company">НАШИ ПРЕИМУЩЕСТВА</a>
        </div>
        <div class="col-md-3">
          <a href="/about#certificates_section" class="btn_primary__company">СЕРТИФИКАТЫ</a>
        </div>
        <div class="col-md-3">
          <a href="/about#production_section" class="btn_primary__company">ПРОИЗВОДСТВО</a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Секция с партнерами компании -->
  <div class="partners-section">
    <div class="container">
      <div class="section-title">партнеры</div>  
    </div>
    <div class="container">
      <div class="partners-logo">
        <div class="item">
          <img src="/img/ural-logo.jpg" alt="">
        </div>
        <div class="item">
          <img src="/img/maz-logo.jpg" alt="">
        </div>
        <div class="item">
          <img src="/img/iveco-logo.jpg" alt="">
        </div>
        <div class="item">
          <img src="/img/rusbiznesavto-logo.jpg" alt="">
        </div>
        <div class="item">
          <img src="/img/korib-logo.jpg" alt="">
        </div>
        <div class="item">
          <img src="/img/sinergiya-logo.jpg" alt="">
        </div>
        <div class="item">
          <img src="/img/jurop-logo.jpg" alt="">
        </div>
        <div class="item">
          <img src="/img/prompribor-logo.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- Горизонтальная линия -->
  <div class="horizontal_line"></div>
  
  <!-- Секция с производственными характеристиками -->
  @include('advantages-section')

  <!-- Горизонтальная линия -->
  <div class="horizontal_line"></div>

  <!-- Секция с видеопрезентациями техники -->
  <div class="video_section">
    <div class="container">
      <div class="section-title">ВИДЕО-ПРЕЗЕНТАЦИИ ТЕХНИКИ</div>
      <div class="row">
        <div class="col-md-6">
          <div class="item_video">
            <img src="/img/video-cover1.jpg" alt="">
          </div>
          <div class="title_video">ВИДЕО 1</div>
        </div>
        <div class="col-md-6">
          <div class="item_video">
            <img src="/img/video-cover2.jpg" alt="">
          </div>
          <div class="title_video">ВИДЕО 2</div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection