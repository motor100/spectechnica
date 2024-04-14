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
      <p class='title'>каталог техники</p>
      <div class="main_catalog">
        <div class="eq_item">
          <div class="eq_item__image"><img src="img/image_15.png" alt="камаз-55510"></div>
          <div class="eq_item__title">автоцистерны</div>
          <a href="/catalog/category" class="eq_item__link"></a>
        </div>
        <span class='vline'></span>
        <div class="eq_item">
          <div class="eq_item__image"><img src="img/pngegg-1536x817_1.png" class="eq_item__image" alt="камаз-55510"></div>
          <div class="eq_item__title">прицепная<br>техника</div>
          <a href="/catalog" class="eq_item__link"></a>
        </div>
        <div class='vline'></div>
        <div class="eq_item">
          <div class="eq_item__image"><img src="img/30975084_1.png" class="eq_item__image" alt="камаз-55510"></div>
          <div class="eq_item__title">автокраны и<br>манипуляторы</div>
          <a href="/catalog" class="eq_item__link"></a>
        </div>
        <span class='vline'></span>
        <div class="eq_item">
          <div class="eq_item__image"><img src="img/image_20.png" class="eq_item__image" alt="камаз-55510"></div>
          <div class="eq_item__title">технологический<br>транспорт</div>
          <a href="/catalog/product" class="eq_item__link"></a>
        </div>
      </div>
      <a href="/catalog" class="btn_primary">ПЕРЕЙТИ В КАТАЛОГ</a>
    </div>
  </div>

  <!-- Секция с описанием деятельности компании  -->
  <div class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-md-2"><div class="title">О компании</div></div>
        <div class="col-md-10"></div>
        <div class="col-md-12">
          <div class="banner_text">
            <p class="txt_company">ГидроСпецАвто - это завод с  
              современным оборудованием и передовыми технологиями
              Завод представляет собой крупный машиностроительный комплекс с 
              законченным производственным циклом от заготовки до выпуска готовой продукции.<br>
              Помимо производства спецтехники, мы являемся дилером российских автогигантов, 
              занимаемся комплексным сервисным обслуживанием и 
              снабжением сертифицированными запчастями.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="item_s">
            <img src="/img/s_1.svg" class="svg_item_image" alt="#">
            <p>Высокое качество<br>продукции по<br>доступным ценам</p>  
          </div>
        </div>
        <div class="col-md-3">
          <div class="item_s">
            <img src="/img/s_2.svg" class="svg_item_image" alt="#">
            <p>Штат опытных<br>сотрудников</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="item_s">
            <img src="/img/s_3.svg" class="svg_item_image" alt="#">
            <p>Trade-in: принимаем<br>Вашу технику в зачет</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="item_s">
            <img src="/img/s_4.svg" class="svg_item_image" alt="#">
            <p>Льготная доставка в<br>регионы собственным<br>автотранспортом</p>
          </div>
        </div>
      </div>
    </div>   
  </div>
  
  <!-- Секция с кнопками -->
  <div class="button_section">
    <div class="container">
      <div class="row">
        <div class="col-md-3"><a href="/about#video" class="btn_primary">ВИДЕО О КОМПАНИИ</a></div>
        <div class="col-md-3"><a href="/about#video" class="btn_primary">НАШИ ПРЕИМУЩЕСТВА</a></div>
        <div class="col-md-3"><a href="/about#video" class="btn_primary">СЕРТИФИКАТЫ</a></div>
        <div class="col-md-3"><a href="/about#video" class="btn_primary">ПРОИЗВОДСТВО</a></div>
      </div>
    </div>
  </div>
  
  <!-- Секция с партнерами компании -->
  <div class="partners-section">
    <div class="container">
        <p class="title">партнеры</p>  
    </div>
    <img src="img/partners.png" alt="партнеры">
    <div class="line"></div>  
  </div>
  

  <!-- Секция с производственными характеристиками -->
  @include('advantages-section')

  <!-- Секция с видеопрезентациями техники -->
  <div class="video-section">
    <div class="line"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-5"><p class="title">ВИДЕО-ПРЕЗЕНТАЦИИ ТЕХНИКИ:</p></div>
        <div class="col-md-7"></div>
        <div class="col-md-12">
          <div class="item_video">
            <img src="/img/video_cover_img.png" alt="">
            <!-- <video width="400" height="300" controls="controls" poster="video/duel.jpg"> -->
            <!-- <source src="video/duel.ogv" type='video/ogg; codecs="theora, vorbis"'>
            <source src="video/duel.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            <source src="video/duel.webm" type='video/webm; codecs="vp8, vorbis"'> -->
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection