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
        @foreach($categories as $category)
          <div class="eq_item">
            <div class="eq_item__image">
              <img src="{{ Storage::url($category->image->image) }}" alt="">
            </div>
            <div class="eq_item__title">{{ $category->title }}</div>
            <a href="/category/{{ $category->slug }}" class="eq_item__link"></a>
            <span class="vline"></span>
          </div>
        @endforeach
      </div>
      <a href="/catalog" class="btn_primary__catalog">перейти в каталог</a>
    </div>
  </div>

  <!-- Секция с описанием деятельности компании  -->
  <div class="about_section">
    <div class="container">
      <div class="about-title">О компании</div>
      <div class="about_text">ГидроСпецАвто - это завод с современным оборудованием и передовыми технологиями.<br>
        Завод представляет собой крупный машиностроительный комплекс с законченным производственным циклом от заготовки до выпуска готовой продукции.<br>
        Помимо производства спецтехники, мы являемся дилером российских автогигантов, занимаемся комплексным сервисным обслуживанием и снабжением сертифицированными запчастями.
      </div>
      <div class="services">
        <div class="item_s">
          <div class="item_image">
            <img src="/img/s_1.png" alt="#">
          </div>
          <div class="item_text">Высокое качество<br>продукции по<br>доступным ценам</div>  
        </div>
        <div class="item_s">
          <div class="item_image">
            <img src="/img/s_2.png" alt="#">
          </div>
          <div class="item_text">Штат опытных<br>сотрудников</div>
        </div>
        <div class="item_s">
          <div class="item_image">
            <img src="/img/s_3.png" alt="#">
          </div>
          <div class="item_text">Trade-in: принимаем<br>Вашу технику в зачет</div>
        </div>
        <div class="item_s">
          <div class="item_image">
            <img src="/img/s_4.png" alt="#">
          </div>
          <div class="item_text">Льготная доставка в<br>регионы собственным<br>автотранспортом</div>
        </div>
      </div>
    </div>
    <div class="about-section-banner-bg">
      <img src="/img/about-section-banner-bg.jpg" alt="">
    </div>
  </div>

  <div class="about_section_mobile hidden-desktop">
    <div class="container">
      <div class="services">
        <div class="item_s">
          <div class="item_image">
            <img src="/img/s_1.png" alt="#">
          </div>
          <div class="item_text">Высокое качество<br>продукции по<br>доступным ценам</div>  
        </div>
        <div class="item_s">
          <div class="item_image">
            <img src="/img/s_2.png" alt="#">
          </div>
          <div class="item_text">Штат опытных<br>сотрудников</div>
        </div>
        <div class="item_s">
          <div class="item_image">
            <img src="/img/s_4.png" alt="#">
          </div>
          <div class="item_text">Льготная доставка в<br>регионы собственным<br>автотранспортом</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Секция с кнопками -->
  <div class="buttons_section">
    <div class="container">
      <div class="buttons">
        <div class="item_button">
          <a href="/about#video_content_section" class="btn_primary__company">ВИДЕО О КОМПАНИИ</a>
        </div>
        <div class="item_button">
          <a href="/about#our_advantages_section" class="btn_primary__company">НАШИ ПРЕИМУЩЕСТВА</a>
        </div>
        <div class="item_button">
          <a href="/about#certificates_section" class="btn_primary__company">СЕРТИФИКАТЫ</a>
        </div>
        <div class="item_button">
          <a href="/about#production_section" class="btn_primary__company">ПРОИЗВОДСТВО</a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Секция с партнерами компании -->
  @include('partners-section')

  <!-- Горизонтальная линия -->
  <div class="horizontal_line"></div>
  
  <!-- Секция наши преимущества -->
  @include('advantages-section')

  <!-- Горизонтальная линия -->
  <div class="horizontal_line"></div>

  <!-- Секция с видеопрезентациями техники -->
  <div class="video_section">
    <div class="container">
      <div class="section-title">ВИДЕО-ПРЕЗЕНТАЦИИ ТЕХНИКИ</div>
      <div class="row">
        <div class="col-md-6">
          <div class="item">
            <div class="item_video">
              <img src="/img/video-cover.jpg" alt="">
            </div>
            <div class="item_title">ВИДЕО 1</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="item">
            <div class="item_video">
              <img src="/img/video-cover.jpg" alt="">
            </div>
            <div class="item_title">ВИДЕО 2</div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection